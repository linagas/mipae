<?php

class Asignacion extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('asignacion_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_asignaciones(){
        $asignaciones = $this->asignacion_model->get_asignaciones();
            $data=array(
                'asignaciones' => $asignaciones,          
                        );
	$this->parser->parse('backend/asignacion/lista_asignaciones', $data);
    }
    
    
    function insertar_asignaciones() {
        $process = $this->input->post('process');
        if ($process) {
            $descripcion_asignacion = $this->input->post('descripcion_asignacion');
            $tipo_asignacion = $this->input->post('tipo_asignacion');
            $cantidad_asignacion = $this->input->post('cantidad_asignacion');
            $fecha_asignacion = $this->input->post('fecha_asignacion');
            $remanente = $this->input->post('remanente');
            $values = array('descripcion_asignacion' => $descripcion_asignacion, 'tipo_asignacion' => $tipo_asignacion, 'cantidad_asignacion' => $cantidad_asignacion, 'fecha_asignacion' => $fecha_asignacion, 'remanente' => $remanente);
            $asignacionInsertado = $this->asignacion_model->insert_asignacion($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('backend/asignacion/insertar_asignacion', $data);
        }
    }

    public function detalle_asignacion($id_asignacion){
            	$asignacion['asignacion']= $this->asignacion_model->detail($id_asignacion);
                $data = array(
				'asignacion' => $asignacion,
				'id_asignacion' => $id_asignacion,
		);
		$this->parser->parse('backend/asignacion/detalle_asignaciones', $data);
                
    }
    
    public function update_asignacion($id_asignacion){
	$process = $this->input->post('process');
	if($process){
                    $descripcion_asignacion = $this->input->post('descripcion_asignacion');
                    $tipo_asignacion = $this->input->post('tipo_asignacion');
                    $cantidad_asignacion = $this->input->post('cantidad_asignacion');
                    $fecha_asignacion = $this->input->post('fecha_asignacion');
                    $remanente = $this->input->post('remanente');
                    $values = array('descripcion_asignacion' => $descripcion_asignacion, 'tipo_asignacion' => $tipo_asignacion, 'cantidad_asignacion' => $cantidad_asignacion, 'fecha_asignacion' => $fecha_asignacion, 'remanente' => $remanente);
                    $asignacionInsertado = $this->asigancion_model->update_asignacion($id_asignacion, $values);
                    $this->parser->parse('asignacion/get_asignaciones', $data);
        }else{
		$asignacion['asignacion'] = $this->asignacion_model->detail($id_asignacion);
               	$data = array(
		'asignacion' => $asignacion,
		'id_asignacion' => $id_asignacion
		);
		$this->parser->parse('backend/asignacion/update_asignaciones', $data);
						
		}
	}
        
        public function delete_asignacion(){ 
		$asignacionId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($asignacionId as $index => $asignacionId) {
			$deletedAsignacion = $this->asignacion_model->delete_asignacion($asignacionId);
		}
		$asignacion['asignaciones'] = $this->asignacion_model->get_asignaciones();
			redirect('asignacion/get_asignaciones', 'refresh');
	}
        
        public function buscar_asignacion(){
             $process = $this->input->post('process');
                if($process){
                 $fecha_asignacion= $this->input->post('fecha_asignacion');
                 $asignacion['tipo_asignacion']= $this->asignacion_model->get_asignaciones($fecha_asignacion);
                 $descripcion_asignacion['descripcion_asignacion']= $this->asignacion_model->get_asignaciones($descripcion_asignacion);
                 $data = array(
				'fecha_asignacion' => $fecha_asignacion,
                                'tipo_asignacion' => $asignacion,
                                'descripcion_asignacion' => $descripcion_asignacion
                     
		);
               $this->parser->parse('backend/asignacion/detalle_asignaciones',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('backend/asignacion/buscar_asignacion', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
        }
}
