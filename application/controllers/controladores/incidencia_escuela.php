<?php

class Incidencia_Escuela extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('incidencia_escuela_model');
         $this->load->model('incidencias_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_incidencia_escuelas(){
        $incidencia_escuelas = $this->incidencia_escuela_model->get_incidencia_escuela();
            $data=array(
                'incidencia_escuelas' => $incidencia_escuelas          
                        );
	$this->parser->parse('frontend/incidenciasescuelas/lista_incidencia_escuelas', $data);
    }
    
   /*  public function buscar_incidencia_escuelas(){
                
                $process = $this->input->post('process');
                if($process){
                 $id_incescuela= $this->input->post('tipo_incidencia');
                 $descripcion['descripcion']= $this->incidencias_model->get_id_incidencia($id_incescuela);
                  if($descripcion['descripcion']['tipo_incidencia'] ==0){
                        $descripcion['descripcion']['sexo']='Mujer';
                        }else{
                        $usuario['usuario']['sexo']='Hombre'; 
                        }
                 $data = array(
				'usuario' => $usuario
		);
               $this->parser->parse('frontend/usuarios/detalle_usuario',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('frontend/usuarios/buscar', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
    }*/
    function insertar_incidencia_escuelas() {
           $process = $this->input->post('process');
        if ($process) {
            $id_incidencias = $this->input->post('id_incidencias');
            //$consultar_c = $this->incidencia_escuela_model-> get_incidencia_escuela($id_incidencias);
            //if($consultar_c){
            $id_escuela = $this->input->post('id_escuela');
            $fecha_incidencia = $this->input->post('fecha_incidencia');
            $responsable = $this->input->post('responsable');
            $grado = $this->input->post('grado');
            $values = array('id_incidencias' => $id_incidencias, 'id_escuela' =>  $id_escuela,  'fecha_incidencia' => $fecha_incidencia, 'responsable' => $responsable, 'grado' => $grado);
            $incidencia_escuelaInsertado = $this->incidencia_escuela_model->insert_incidencia_escuela($values);
        //}else{
          //  $data['result']="error";
            //$this->parser->parse('frontend/incidenciasescuelas/insertar_incidencia_escuelas', $data);
            }
        else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('frontend/incidenciasescuelas/insertar_incidencia_escuelas', $data);
        }
    }
    
    public function detalle_incidencia_escuela($id_inc_esc){
            	$incidencia_escuela['incidencia_escuela']= $this->incidencia_escuela_model->detail($id_inc_esc);
                $data = array(
				'incidencia_escuela' => $incidencia_escuela,
				'id_inc_esc' => $id_inc_esc,
		);
		$this->parser->parse('frontend/incidenciasescuelas/detalle_incidencia_escuela', $data);
                
    }
    
    public function update_incidencia_escuela($id_inc_esc){
	$process = $this->input->post('process');
	if($process){
            $id_incidencias = $this->input->post('id_incidencias');
            $id_escuela = $this->input->post('id_escuela');
            $fecha_incidencia = $this->input->post('fecha_incidencia');
            $responsable = $this->input->post('responsable');
            $grado = $this->input->post('grado');
            $values = array('id_incidencias' => $id_incidencias, 'id_escuela' =>  $id_escuela, 'fecha_incidencia' => $fecha_incidencia, 'responsable' => $responsable, 'grado' => $grado);
                    $incidencia_escuelaInsertado = $this->incidencia_escuela_model->update_incidencia_escuela($id_inc_esc, $values);
                    $this->parser->parse('incidencia_escuela/get_incidencia_escuelas', $data);
        }else{
		$id_escuela['id_escuela'] = $this->incidencia_escuela_model->detail($id_inc_esc);
               	$data = array(
		'id_escuela' => $id_escuela,
		'id_inc_esc' => $id_inc_esc
		);
		$this->parser->parse('frontend/incidenciasescuelas/update_incidencia_escuelas', $data);
						
		}
	}
        
        public function delete_incidencia_escuela(){ 
		$inc_escId = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($inc_escId as $index => $inc_escId) {
			$deletedIncidencia_Escuela = $this->incidencia_escuela_model->delete_incidencia_escuela($inc_escId);
		}
		$incidencia_escuela['id_escuelas'] = $this->incidencia_escuela_model->get_incidencia_escuelas();
			redirect('incidencia_escuela/get_incidencia_escuelas', 'refresh');
	}
}
