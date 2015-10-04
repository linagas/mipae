<?php

class Rol extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('rol_model');
        
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
    
    public function get_rol(){
        $roles = $this->rol_model->get_rol();
            $data=array(
                'lista_roles' => $roles,
                'proyect_name' => 'Progrma de Alimentacion Escolar MiPae'
            );
        $this->parser->parse('backend/rol/lista_roles', $data);
        
    }
    
    public function insert_rol() {
        $process= $this->input->post('process');
		$nombre= $this->input->post('nombre');
                if($process){
				$data['result'] = "Usuario Insertado";
				$values=array('rol' => $nombre);
				$insertedUser = $this->rol_model->insert_rol($values);
					$response=array(
						'yes' => "inserted values",
						'values' =>$insertedUser,
						'error' => "not error"
					);
                                        
				$this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
				$users_json=$this->output->set_output(json_encode($response));
			}else{
				$response=array(
					'error' => "error error error"
				);
			$this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
			$users_json=$this->output->set_output(json_encode($response));
		}
    }
        
    public function detail_rol($id_rol){
        
    }
    
    public function update_rol($id_rol){
    }
        
    public function delete_rol($id_rol){
        if(!empty($id_rol)){
            $deletedRol = $this->rol_model->delete_rol($id_rol);
            $response=array(
                'yes' => "deleting",
                'error' => "not error"
            );
            $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
            $rol_json=$this->output->set_output(json_encode($response));
        }  else {
            $response=array(
                'error' => "error error error"
            );
        }
        
    
    }
}

