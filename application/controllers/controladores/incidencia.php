<?php

class Incidencia extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('incidencias_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_incidencias(){
        $incidencias = $this->incidencias_model->get_incidencias();
            $data=array(
                'incidencias' => $incidencias,          
                        );
	$this->parser->parse('frontend/incidencias/lista_incidencias', $data);
    }
    
    function insertar_incidencias() {
        $process = $this->input->post('process');
        if ($process) {
            $descripcion = $this->input->post('descripcion');
            $tipo_incidencia = $this->input->post('tipo_incidencia');
            $values = array('descripcion' => $descripcion, 'tipo_incidencia' => $tipo_incidencia);
            $incidenciaInsertado = $this->incidencias_model->insert_incidencias($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/incidencias/insertar_incidencias', $data);
        }
    }

    public function detalle_incidencia($id_incidencias){
        print_r($id_incidencias);
            	$incidencia['incidencia']= $this->incidencias_model->detail($id_incidencias);
                $data = array(
				'incidencia' => $incidencia,
				'id_incidencia' => $id_incidencias,
		);
		$this->parser->parse('frontend/incidencias/detalle_incidencias', $data);
                
    }
    
    public function update_incidencia($id_incidencia){
	$process = $this->input->post('process');
	if($process){
                      $descripcion = $this->input->post('descripcion');
            $tipo_incidencia = $this->input->post('tipo_incidencia');
            $values = array('descripcion' => $descripcion, 'tipo_incidencia' => $tipo_incidencia);
                    $incidenciaInsertado = $this->incidencia_model->update_incidencia($id_incidencia, $values);
                    $this->parser->parse('incidencia/get_incidencias', $data);
        }else{
		$incidencia['incidencia'] = $this->incidencia_model->detail($id_incidencia);
               	$data = array(
		'incidencia' => $incidencia,
		'id_incidencia' => $id_incidencia
		);
		$this->parser->parse('frontend/incidencias/update_incidencia', $data);
						
		}
	}
        
        public function delete_incidencia(){ 
		$incidenciaId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach (incidenciaId as $index => $incidenciaId) {
			$deletedIncidencia = $this->incidencia_model->delete_incidencia($incidenciaId);
		}
		$incidencias['incidencias'] = $this->incidencia_model->get_incidencias();
			redirect('incidencias/get_incidencias', 'refresh');
	}
}
