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
            $fecha = date('Y-m-d');
            $evento = $this->input->post('evento');
            $cant_asistencia = $this->input->post('cant_asistencia');
			
			if($cant_asistencia == 1)
			{
				$asis = 0;
				$ina = 1;
				}
			if($cant_asistencia == 2)
			{
				$asis = 1;
				$ina = 0;
				}
            
            $values = array('fecha' => $fecha, 'evento' => $evento, 'cant_asistencia' => $asis, 'cant_inasistencia' => $ina, 'c_cedula' => $c_cedula
                    );
            $asistenciaInsertado = $this->asistencia_model->insert_asistencia($values);
            
			?>
            <script>
            alert("Se ha insertado");
            </script>
            <?php
            $data['result']="";
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

    public function detalle_asistencia($id){
            	$asistencia['asistencia']= $this->asistencia_model->detail($id);
                $data = array(
				
                                 'asistencia'=>$asistencia
		);
		$this->parser->parse('frontend/asistencias/detalle_asistencia', $data);
                
    }
    
    public function update_asistencia($id_asistencia){
	$process = $this->input->post('process');
	if($process){
            $fecha = $this->input->post('fecha');
            $evento = $this->input->post('evento');
            $cant_asistencia = $this->input->post('cant_asistencia');
            $cant_inasistencia = $this->input->post('cant_inasistencia');
            $c_cedula = $this->input->post('c_cedula');
                    $values = array('fecha' => $fecha, 'evento' => $evento, 'cant_asistencia' => $cant_asistencia, 'cant_inasistencia' => $cant_inasistencia, 'c_cedula' => $c_cedula);
                    $asistenciaInsertado = $this->asistencia_model->update_asistencia($id_asistencia, $values);
                    $this->parser->parse('asistencia/get_asistencia', $data);
        }else{
		$asistencia['asistencia'] = $this->asistencia_model->detail($id_asistencia);
               	$data = array(
		'asistencia' => $id_asistencia,
		'id' => $id
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

 /*public function buscar_asistencia(){
                $cedula=$this->input->post('cedula');
                $process = $this->input->post('process');
                if($process){
                $cedula=$this->input->post('cedula');
                $evento['evento']= $this->asistencia_model->get_asistencia($cedula);
                $id = $evento['id']['cedula'];
                $madre_id = $id;
            	$evento['evento']= $this->asistencia_model->detail($id);
                $madre_join['madre_join']=$this->asistencia_model->join_detail($madre_id);
                $id_fecha= $escuela_join['escuela_join']['id_ano'];
                $dato['dato']=$this->escuela_model->detail_ano($id_ano);
               	$data = array(
				'escuela' => $escuela,
				'id_escuela' => $id_escuela,
                                'escuela_join' => $escuela_join,
                                'dato'=>$dato,
		);
                 $this->parser->parse('backend/escuelas/detalle_escuela',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('backend/escuelas/buscar', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
    }*/
}