<?php

class Presupuesto extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('presupuesto_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_presupuestos(){
        $presupuestos = $this->presupuesto_model->get_presupuestos();
            $data=array(
                'presupuestos' => $presupuestos,          
                        );
	$this->parser->parse('frontend/presupuestos/lista_presupuestos', $data);
    }
    
    function insertar_presupuestos() {
        $process = $this->input->post('process');
        if ($process) {
            $monto_asignado = $this->input->post('monto_asignado');
            $presupuesto_trimestre = $this->input->post('presupuesto_trimestre');
            $reserva = $this->input->post('reserva');
            $fecha_asignado = $this->input->post('fecha_asignado');
			$descripcion = $this->input->post('descripcion');
            $values = array('monto_asignado' => $monto_asignado, 'presupuesto_trimestre' => $presupuesto_trimestre, 'reserva' => $reserva, 'fecha_asignado' => $fecha_asignado, 'descripcion' => $descripcion);
            $presupuestoInsertado = $this->presupuesto_model->insert_presupuesto($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/presupuestos/insertar_presupuesto', $data);
        }
    }

    public function detalle_presupuesto($id_presupuesto){
            	$presupuesto['presupuesto']= $this->presupuesto_model->detail($id_presupuesto);
                $data = array(
				'presupuesto' => $presupuesto,
				'id_presupuesto' => $id_presupuesto,
		);
		$this->parser->parse('frontend/presupuestos/detalle_presupuesto', $data);
                
    }
    
    public function update_presupuesto($id_presupuesto){
	$process = $this->input->post('process');
	if($process){
		
                    $monto_asignado = $this->input->post('monto_asignado');
            $presupuesto_trimestre = $this->input->post('presupuesto_trimestre');
            $reserva = $this->input->post('reserva');
            $fecha_asignado = $this->input->post('fecha_asignado');
			$descripcion = $this->input->post('descripcion');
            $values = array('monto_asignado' => $monto_asignado, 'presupuesto_trimestre' => $presupuesto_trimestre, 'reserva' => $reserva, 'fecha_asignado' => $fecha_asignado, 'descripcion' => $descripcion);
                    $presupuestoInsertado = $this->presupuesto_model->update_presupuesto($id_presupuesto, $values);
                    $this->parser->parse('presupuestos/get_presupuestos', $data);
        }else{
		$presupuesto['presupuesto'] = $this->presupuesto_model->detail($id_presupuesto);
               	$data = array(
		'presupuesto' => $presupuesto,
		'id_presupuesto' => $id_presupuesto
		);
		$this->parser->parse('frontend/presupuestos/update_presupuesto', $data);
						
		}
	}
        
        public function delete_presupuesto(){ 
		$presupuestoId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($presupuestoId as $index => $presupuestoId) {
			$deletedPresupuesto = $this->presupuesto_model->delete_presupuesto($presupuestoId);
		}
		$presupuestos['presupuestos'] = $this->presupuesto_model->get_presupuestos();
			redirect('presupuestos/get_presupuestos', 'refresh');
	}
}
