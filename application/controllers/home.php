<?php

class Home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('usuario_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('session');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){
        
        $this->load->view('plantillas/header');
        $this->load->view('plantillas/sidebar');
        $this->load->view('plantillas/container');
        $this->load->view('plantillas/footer');
        
    }   
    
    function insertar_usuario() {
        $process = $this->input->post('process');
        if ($process) {
            $privilegio = $this->input->post('privilegio');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $sexo = $this->input->post('sexo');
            if ($sexo == 'mujer') {
                $sexo = 0;
            } else {
                $sexo = 1;
            }
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $correo = $this->input->post('correo');
            $nombre_usu = $this->input->post('nombre_usu');
            $contrasena = sha1($this->input->post('contrasena'));
            $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'sexo' => $sexo, 'fecha_nacimiento' => $fecha_nacimiento, 'correo' => $correo, 'nombre_usu' => $nombre_usu, 'contrasena' => $contrasena, 'privilegio' => $privilegio);
            $usuarioInsertado = $this->usuario_model->insert_usuario($values);
            redirect('home',' refresh');
        } else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/insertar_usuario', $data);
        }
    }
    
    public function iniciar_session() {
         $this->load->model('usuario_model');
            $process = $this->input->post('process');
            if ($process) 
                {
                $data['result'] = "Usuario Insertado";
                $nombre_u = $this->input->post('nombre_u');
                $password = sha1($this->input->post('contrasena'));
                $check_usuario = $this->usuario_model->login_usuario($nombre_u, $password);
                      
                if ($check_usuario == TRUE) 
                {
                    $data = array(
                            'logged_in' => TRUE,
                            'privilegio' => $check_usuario->privilegio,
                            'estatus' => $check_usuario->estatus,
                           'nombre_usuario' => $check_usuario->nombre_usu,
                            'codigo_escuela' => $check_usuario->codigo_escuela
                        );
                        $this->session->set_userdata($data);
                        //redirect('admin', 'refresh');
                        //$codigo_escuela=$this->session->userdata('codigo_escuela');
                        $privilegio=$this->session->userdata('privilegio');
                        //print_r($codigo_escuela);
                  
                            if($privilegio==0){
                               redirect('admin', 'refresh');
                            }else{
                                redirect('usuarios', 'refresh');
                          }
                
                   }else {
                        $data['result'] = "error, error, ";
                        $this->parser->parse('frontend/iniciar_session', $data);
                        return false;                   
                    }
                } else {
                $data['result']="";
                $this->parser->parse('frontend/iniciar_session', $data);
            }
    }
    public function cerrar_session() {
        $data= $this->session->all_userdata();
        $this->session->unset_userdata($data);
        $this->parser->parse('frontend/iniciar_session', $data);
    }
    
    public function slide() {
        $this->load->view('home_view');
    }

}