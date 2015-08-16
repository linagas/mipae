<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Su propio código de constructor
        //Modelos
        $this->load->model('usuario_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('session');
        //Helpers
        $this->load->helper('form');
    }

    public function index() {
          $logged=$this->session->userdata('logged_in');
            if($logged){
            $privilegio=$this->session->userdata('privilegio');
            $estatus=$this->session->userdata('estatus');
            if(($privilegio==0) && ($estatus==1)){
                $data['nombre_usuario']=$this->session->userdata('nombre_usuario');
                $data['privilegio']='Administrador';
                    $this->load->view('backend/header');
                    $this->load->view('backend/sidebar_admin');
                    $this->load->view('backend/container', $data);
                    $this->load->view('backend/footer'); 
                }else{
                    print_r("NO tiene privilegio para acceder a estya pagina");
                    print_r("usuario inactivo");
                }
            //redirect(site_url('usuarios/get_usuarios'));
            }else{
                redirect(site_url('home/iniciar_session'));
            }
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */