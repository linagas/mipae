<?php

class Madre extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('madre_model');
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
	$this->parser->parse('frontend/madres/lista_madres', $data);
    }
    
        public function buscar_madre(){
                $process = $this->input->post('process');
                if($process){
                 $cedula = $this->input->post('cedula');
                 $madre['madre']= $this->madre_model->get_cedula_madre($cedula);
                 $data = array(
				'madre' => $madre
		);
                 $this->parser->parse('frontend/madres/detalle_madre',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este cedula no esta registrada';
                    $this->parser->parse('backend/madres/buscar', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
    }
    
    function insertar_madres() {
         $process = $this->input->post('process');
        if ($process) {
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $cedula = $this->input->post('cedula');
            $sexo = $this->input->post('sexo');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $tipo_madre = $this->input->post('tipo_madre');
            $direccion_madre = $this->input->post('direccion_madre');
			$estatus_madre = $this->input->post('estatus_madre');
            $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'sexo' => $sexo, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'tipo_madre' => $tipo_madre, 'direccion_madre' => $direccion_madre, 'estatus_madre' =>$estatus_madre);
            $madreInsertado = $this->madre_model->insert_madre($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/madres/insertar_madres', $data);
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
            //$sexo = $this->input->post('sexo');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $telefono = $this->input->post('telefono');
            $tipo_madre = $this->input->post('tipo_madre');
            $direccion_madre = $this->input->post('direccion_madre');
			$estatus_madre = $this->input->post('estatus_madre');
                    $values = array('nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'fecha_nacimiento' => $fecha_nacimiento, 'telefono' => $telefono, 'tipo_madre' => $tipo_madre, 'direccion_madre' => $direccion_madre, 'estatus_madre' =>$estatus_madre);
                    $madreInsertado = $this->madre_model->update_madre($id_madre, $values);
            }else{
		$madre['madre'] = $this->madre_model->detail($id_madre);
               	$data = array(
		'madre' => $madre,
		'id_madre' => $id_madre
		);
		$this->parser->parse('frontend/madres/update_madres', $data);
						
		}
	}
        
        public function delete_madre(){ 
		$madreId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($madreId as $index => $madreId) {
			$deletedMadre = $this->madre_model->delete_madre($madreId);
		}
		$madres['madres'] = $this->madre_model->get_madres();
			redirect('madres/get_madres', 'refresh');
	}
}
