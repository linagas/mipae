<?php

class Permisos extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('permisos_model');
        
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        $this->load->library('session');
        //Helpers
        $this->load->helper('form');
    }
    
   function index(){
//        $logged=$this->session->userdata('logged_in');
//            if($logged){
//            $privilegio=$this->session->userdata('privilegio');
//            $estatus=$this->session->userdata('estatus');
//            $codigo_escuela=$this->session->userdata('codigo_escuela');
//   
//                if(($privilegio==1) && ($estatus==0)){
//                    
//                $data['nombre_usuario']=$this->session->userdata('nombre_usuario');
//                $data['privilegio']='Director';
//                    
//					$this->load->view('backend/header');
//      				$this->load->view('frontend/usuarios/sidebar_user');
//                    $this->load->view('backend/container', $data);
//                    $this->load->view('backend/footer');
//                }else{
//                    print_r("NO tiene privilegio para acceder a estya pagina");
//                    print_r("usuario inactivo");
//                }
//            //redirect(site_url('usuarios/get_usuarios'));
//            }else{
//                redirect(site_url('home/iniciar_session'));
//            }
            
    }
    
    public function get_permisos(){
        
    }
    
    public function insert_permisos() {
        
    }
        
    public function detail_permisos($id_permisos){
        
    }
    
    public function update_permisos($id_permisos){
    }
        
    public function delete_permisos($id_permisos){ 
    }
}

