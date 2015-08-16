<?php

class Asistencia extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('asistencia_model');
        $this->load->model('madre_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_asistencia(){
        $asistencias = $this->asistencia_model->get_asistencia();
            $data=array(
                'asistencias' => $asistencias,          
                        );
	$this->parser->parse('frontend/asistencias/lista_asistencias', $data);
    }
    
    function insertar_asistencia() {
        $this->load->model('madre_model');
		
		$madres= $this->madre_model->get_simple_madres();
		
			$data = array(
					'madres' => $madres,
		);
        $process = $this->input->post('process');
        
        if ($process) {
            $c_cedula = $this->input->post('c_cedula');
            $consultar_c = $this->madre_model->get_cedula_madre($c_cedula);
            if($consultar_c){
            $fecha = $this->input->post('fecha');
            $evento = $this->input->post('evento');
            $cant_asistencia = $this->input->post('cant_asistencia');
            $cant_inasistencia = $this->input->post('cant_inasistencia');
            
            $values = array('fecha' => $fecha, 'evento' => $evento, 'cant_asistencia' => $cant_asistencia, 'cant_inasistencia' => $cant_inasistencia, 'c_cedula' => $c_cedula
                    );
            $asistenciaInsertado = $this->asistencia_model->insert_asistencia($values);
            
            $data['result']="cedula correcta";
                    $this->parser->parse('frontend/asistencias/insertar_asistencia', $data);
            }else{
                    $data['result']="Esta madre no existe";
                    $this->parser->parse('frontend/asistencias/insertar_asistencia', $data);
        }
            }else {
            $data['result']="";
            $this->parser->parse('frontend/asistencias/insertar_asistencia', $data);
        }
    }

    public function detalle_asistencia($id_asistencia){
            	$asistencia['asistencia']= $this->asistencia_model->detail($id_asistencia);
                $data = array(
				'asistencia' => $asistencia,
				'id_asistencia' => $id_asistencia,
		);
		$this->parser->parse('frontend/asistencias/detalle_asistencia', $data);
                
    }
    
    public function update_asistencia($id_asistencia){
	$process = $this->input->post('process');
	if($process){
            $fecha_asistencia = $this->input->post('fecha_asistencia');
            $justificacion = $this->input->post('justificacion');
            $cant_asistencia = $this->input->post('cant_asistencia');
            $cant_inasistencia = $this->input->post('cant_inasistencia');
            $c_cedula = $this->input->post('c_cedula');
                    $values = array('fecha_asistencia' => $fecha_asistencia, 'justificacion' => $justificacion, 'cant_asistencia' => $cant_asistencia, 'cant_inasistencia' => $cant_inasistencia, 'c_cedula' => $c_cedula);
                    $asistenciaInsertado = $this->asistencia_model->update_asistencia($id_asistencia, $values);
                    $this->parser->parse('asistencia/get_asistencia', $data);
        }else{
		$asistencia['asistencia'] = $this->asistencia_model->detail($id_asistencia);
               	$data = array(
		'asistencia' => $asistencia,
		'id_asistencia' => $id_asistencia
		);
		$this->parser->parse('frontend/asistencias/update_asistencia', $data);
						
		}
	}
        
        public function delete_asistencia(){ 
		$asistenciaId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($asistencianId as $index => $asistenciaId) {
			$deletedasistencia = $this->asistencia_model->delete_asistencia($asistenciaId);
		}
		$asistencia['asistencias'] = $this->asistencia_model->get_asistencia();
			redirect('asistencia/get_asistencia', 'refresh');
	}
}
