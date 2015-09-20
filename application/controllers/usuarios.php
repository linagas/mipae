<?php

class Usuarios extends CI_Controller{

    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('usuario_model');
        $this->load->model('escuela_model');
        
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        $this->load->library('session');
        //Helpers
        $this->load->helper('form');
    }
    
   function index(){


        $logged=$this->session->userdata('logged_in');
            if($logged){
            $privilegio=$this->session->userdata('privilegio');
            $estatus=$this->session->userdata('estatus');
            $codigo_escuela=$this->session->userdata('codigo_escuela');
   
                if(($privilegio==1) && ($estatus==0)){
                    
                $data['nombre_usuario']=$this->session->userdata('nombre_usuario');
                $data['privilegio']='Director';
		$this->load->view('backend/header', $data);
      		$this->load->view('frontend/usuarios/sidebar_user');
                $this->load->view('backend/container');
                $this->load->view('backend/footer');
                }else{
                    print_r("NO tiene privilegio para acceder a esta pagina");
                    print_r("usuario inactivo");
                }
            //redirect(site_url('usuarios/get_usuarios'));
            }else{
                redirect(site_url('home/iniciar_session'));
            }
            
    }
    
    public function formUser(){
	$this->parser->parse('frontend/insertar_usuarios');
    }
    public function get_usuarios(){
        $usuarios = $this->usuario_model->get_usuarios();
            $data=array(
                'usuarios' => $usuarios,
                'title' => 'Lista de Usuarios',
                'proyect_name' => 'Progrma de Alimentacion Escolar MiPae'
                
            );
	$response= $this->parser->parse('backend/usuarios/lista_usuarios', $data);
    }
    
    public function buscar_usuario(){
                
                $process = $this->input->post('process');
                if($process){
                 $cedula= $this->input->post('cedula');
                 $usuario['usuario']= $this->usuario_model->get_cedula_usuario($cedula);
                  if($usuario['usuario']['sexo'] ==0){
                        $usuario['usuario']['sexo']='Mujer';
                        }else{
                        $usuario['usuario']['sexo']='Hombre'; 
                        }
                $codigo_escuela=$usuario['usuario']['codigo_escuela'];
                $escuela['escuela']=$this->escuela_model->get_codigo_escuela($codigo_escuela);
                 $data = array(
				'usuario' => $usuario,
                                'escuela'=> $escuela
		);
               $this->parser->parse('backend/usuarios/detalle_usuario',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('backend/usuarios/buscar', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
    }
    
    public function insertar_usuarios() {
        
        $process = $this->input->post('process');
        if ($process) {
            $contrasena = sha1($this->input->post('contrasena'));
            $c_contrasena = sha1($this->input->post('conf_contrasena'));
        
           if($contrasena==$c_contrasena){
               $nombre = $this->input->post('nombre');
            $privilegio = $this->input->post('privilegio');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $sexo = $this->input->post('sexo');
            
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $correo = $this->input->post('correo');
            $nombre_usu = $this->input->post('nombre_usu');
            $codigo_escuela =$this->input->post('codigo_escuela');
            $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'sexo' => $sexo, 'fecha_nacimiento' => $fecha_nacimiento,'telefono'=>$telefono,'correo' => $correo, 'nombre_usu' => $nombre_usu, 'contrasena' => $contrasena,'privilegio'=>$privilegio, 'codigo_escuela'=>$codigo_escuela);
            $usuarioInsertado = $this->usuario_model->insert_usuario( $values);
            ?>
            <script>
                     alert("Se ha insertado el registro");
                     
            </script>
            <?php
            
        }else{
            $data['escuela']= $this->usuario_model->get_escuelas();
            $data['resultado']= 'No Coinciden las contraseñas';
            $this->parser->parse('backend/usuarios/insertar_usuario', $data);
            }
           
        } else {
            $data['resultado']= '';
            $data['escuela']= $this->usuario_model->get_escuelas();
            $this->parser->parse('backend/usuarios/insertar_usuario', $data);
        }
    }
        
    public function detalle_usuario($id_usuario){
            	$usuario['usuario']= $this->usuario_model->detail($id_usuario);
                if($usuario['usuario']['sexo'] ==0){
                        $usuario['usuario']['sexo']='Mujer';
                        }else{
                        $usuario['usuario']['sexo']='Hombre'; 
                        }
                $codigo_escuela=$usuario['usuario']['codigo_escuela'];
                $escuela['escuela']=$this->escuela_model->get_codigo_escuela($codigo_escuela);
		$data = array(
				'usuario' => $usuario,
				'id_usuario' => $id_usuario,
                                'escuela'=> $escuela
		);
		$this->parser->parse('backend/usuarios/detalle_usuario', $data);
                
    }
    
    public function update_usuario($id_usuario){
        $usuario['usuario'] = $this->usuario_model->detail($id_usuario); 
        if($usuario['usuario']['sexo'] ==0){
                        $usuario['usuario']['sexo']='Mujer';
                        }else{
                        $usuario['usuario']['sexo']='Hombre'; 
                        }
        $codigo_escuela=$usuario['usuario']['codigo_escuela'];
        $escuela['escuela']=$this->escuela_model->get_codigo_escuela($codigo_escuela);
	$process = $this->input->post('process');
        if ($process) {
            $contrasena = sha1($this->input->post('contrasena'));
        $c_contrasena = sha1($this->input->post('conf_contrasena'));
        
           if($contrasena==$c_contrasena){
               $nombre = $this->input->post('nombre');
                $privilegio = $this->input->post('privilegio');
                $apellido = $this->input->post('apellido');
                $cedula = $this->input->post('cedula');
                $sexo = $this->input->post('sexo');
           
                $fecha_nacimiento = $this->input->post('fecha_nacimiento');
                $telefono = $this->input->post('telefono');
                $correo = $this->input->post('correo');
                $nombre_usu = $this->input->post('nombre_usu');
                $codigo_escuela =$this->input->post('codigo_escuela');
                $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'sexo' => $sexo, 'fecha_nacimiento' => $fecha_nacimiento,'telefono'=>$telefono,'correo' => $correo, 'nombre_usu' => $nombre_usu, 'contrasena' => $contrasena,'privilegio'=>$privilegio);
                    $usuarioInsertado = $this->usuario_model->update_usuario($id_usuario, $values);
                    ?>
                <script>
                         alert("Se ha insertado el registro");
                </script>
                <?php
           }else{
            $data['resultado']= 'No Coinciden las contraseñas';
            $this->parser->parse('backend/usuarios/update_usuario', $data);
                 }
        } else {
            $data = array(
		'usuario' => $usuario,
		'id_usuario' => $id_usuario,
                'escuela'=> $escuela
		);
            $data['resultado']= '';
        $this->parser->parse('backend/usuarios/update_usuario', $data);	
		}
	}
        
        public function delete_usuario($id_usuario){ 
		
			$deletedUsuario = $this->usuario_model->delete_usuario($id_usuario);
		
		
		$usuarios['usuarios'] = $this->usuario_model->get_usuarios();

	
		redirect('usuarios/get_usuarios', 'refresh');
	}
}
