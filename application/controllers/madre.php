<?php

class Madre extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('madre_model');
        $this->load->model('usuario_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_madres(){
        $madres = $this->madre_model->get_madres();
            $data=array(
                'madres' => $madres,          
                        );
	$this->parser->parse('backend/madres/lista_madres', $data);
    }
    
    function get_madres_escuela(){
        $madres = $this->madre_model->get_madres();
            $data=array(
                'madres' => $madres,          
                        );
	$this->parser->parse('frontend/madres/lista_madres', $data);
    }
    
        public function buscar_madre(){

			 $cedula = $this->input->post('cedula');
			 $madre = $this->madre_model->get_cedula_madre($cedula);
			 
			 echo $madre;

    }
            public function buscar_cedula_madre(){
                $process = $this->input->post('process');
               if($process){
			 $cedula = $this->input->post('cedula');
			 $madre['madre'] = $this->madre_model->cedula_madre($cedula);
                        $data= array('madre'=>$madre);	
                $this->parser->parse('backend/madres/detalle_madre',$data);
               }  else {
               $data['result']='Este cedula no esta registrada';
               $this->parser->parse('backend/madres/buscar', $data);
               }
            }
   public  function insertar_madres() {
         $process = $this->input->post('process');
        if ($process) {
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $direccion_madre = $this->input->post('direccion_madre');
            $tipo_madre = $this->input->post('tipo_madre');
            $estatus_madre = $this->input->post('estatus_madre');
            $codigo_escuela = $this->input->post('codigo_escuela');
            $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'direccion_madre' => $direccion_madre,'tipo_madre' => $tipo_madre, 'estatus_madre' => $estatus_madre, 'codigo_escuela'=>$codigo_escuela);            $madreInsertado = $this->madre_model->insert_madre($values);
            if($madreInsertado){
                 ?>
            <script>
                     alert("Se ha insertado el registro");
                     
            </script>
            <?php
            
                
            }else{
            $data['result']="Disculpe ha ocurrido un error";
            $this->parser->parse('backend/madres/insertar_madres', $data);    
            }
         }else {
             $data['escuela']= $this->usuario_model->get_escuelas();
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('backend/madres/insertar_madres', $data);
        }
    }

    public  function insertar_madres_escuela() {
         $codigo_escuela=$this->session->userdata('codigo_escuela');
         if($codigo_escuela){
            print_r($codigo_escuela);die;
         $process = $this->input->post('process');
            if ($process) {
                $nombre = $this->input->post('nombre');
                $apellido = $this->input->post('apellido');
                $cedula = $this->input->post('cedula');
                $edad = $this->input->post('edad');
                $fecha_nacimiento = $this->input->post('fecha_nacimiento');
                $telefono = $this->input->post('telefono');
                $direccion_madre = $this->input->post('direccion_madre');
                $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'edad' => $edad, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'direccion_madre' => $direccion_madre);
                $madreInsertado = $this->madre_model->insert_madre($values);
                $data = array('id_madre' => $madreInsertado , 'codigo_escuela'=> $codigo_escuela);
                
                $this->parser->parse('frontend/madres/post_madre', $data);
             }else {
                $data['result']="Debe LLenar los campos";
                $this->parser->parse('frontend/madres/insertar_madres', $data);
            }
        }else{
            $data['result']="Ocurrio un problema pongase en contacto con el administrador";
             $this->load->view('usuarios', $data);
        }

    }
        

    public function detalle_madre($id_madre){
            	$madre['madre']= $this->madre_model->detail($id_madre);
                $data = array(
				'madre' => $madre,
				'id_madre' => $id_madre,
		);
		$this->parser->parse('frontend/madres/detalle_madre', $data);
                
    }
    
    public function update_madre($id_madre){
	$process = $this->input->post('process');
        
	if($process){
            $data="";
          
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $edad = $this->input->post('edad');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $tipo_madre = $this->input->post('tipo_madre');
            $direccion_madre = $this->input->post('direccion_madre');
			$estatus_madre = $this->input->post('estatus_madre');
                    $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'edad' => $edad, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'tipo_madre' => $tipo_madre, 'direccion_madre' => $direccion_madre, 'estatus_madre' =>$estatus_madre);
                    $madreInsertado = $this->madre_model->update_madre($id_madre, $values);
                     ?>
            <script>
                     alert("Se ha insertado el registro");
                     
            </script>
            <?php
            }else{
		$madre['madre'] = $this->madre_model->detail($id_madre);
               	$data = array(
		'madre' => $madre,
		'id_madre' => $id_madre
		);
		$this->parser->parse('frontend/madres/update_madre', $data);
						
		}
	}
         public function update_madrea($id_madre){
	$process = $this->input->post('process');
        
	if($process){
            $data="";
          
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $edad = $this->input->post('edad');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $tipo_madre = $this->input->post('tipo_madre');
            $direccion_madre = $this->input->post('direccion_madre');
			$estatus_madre = $this->input->post('estatus_madre');
                    $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'edad' => $edad, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'tipo_madre' => $tipo_madre, 'direccion_madre' => $direccion_madre, 'estatus_madre' =>$estatus_madre);
                    $madreInsertado = $this->madre_model->update_madre($id_madre, $values);
                     ?>
            <script>
                     alert("Se ha insertado el registro");
                     
            </script>
            <?php
            }else{
		$madre['madre'] = $this->madre_model->detail($id_madre);
               	$data = array(
		'madre' => $madre,
		'id_madre' => $id_madre
		);
		$this->parser->parse('backend/madres/update_madre', $data);
						
		}
	}
        
        public function delete_madre($id_madre){ 
		//inmadres', 'refresh');dex es una variable cualquiera que 
			$deletedMadre = $this->madre_model->delete_madre($id_madre);
			redirect('madre/get_madres', 'refresh');
	}
}
