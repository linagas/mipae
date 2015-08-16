<?php

class Incidencia_Escuela extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('incidencia_escuela_model');
        $this->load->model('usuario_model');
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
	$this->parser->parse('backend/incidenciasescuelas/lista_incidencia_escuelas', $data);
    }
    
  public function buscar_incidencia_escuela(){
             $process = $this->input->post('process');
                if($process){
                 $id_escuela= $this->input->post('id_escuela');
                 $tipo_incidencia['tipo_incidencia']= $this->incidencia_escuela_model->get_incidencia_escuela($id_escuela);
                 $data = array(
				//'tipo_incidencia' => $tipo_incidencia,
                                'id_escuela' => $id_escuela,
                                //'fecha_incidencia' => $fecha_incidencia,
                                //'responsable' => $responsable,
                                //'grado' => $grado
		);
               $this->parser->parse('backend/incidenciasescuelas/detalle_incidencia_escuela',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('backend/incidenciasescuelas/buscar_incidencias', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }   
        }
        
    function insertar_incidencia_escuelas(){
           $process = $this->input->post('process');
        if ($process) {
            $tipo_incidencia = $this->input->post('tipo_incidencia');
            //$consultar_c = $this->incidencia_escuela_model-> get_incidencia_escuela($id_incidencias);
            //if($consultar_c){
            $id_escuela = $this->input->post('codigo_escuela');
            $fecha_incidencia = $this->input->post('fecha_incidencia');
            $responsable = $this->input->post('responsable');
            $grado = $this->input->post('grado');
            $descripcion= $this->input->post('descripcion');
            $values = array('tipo_incidencia' => $tipo_incidencia, 'id_escuela' =>  $id_escuela,  'fecha_incidencia' => $fecha_incidencia, 'responsable' => $responsable, 'grado' => $grado, 'descripcion'=>$descripcion);
            
            $incidencia_escuelaInsertado = $this->incidencia_escuela_model->insert_incidencia_escuela($values);
             ?>
            <script>
                     alert("Se ha insertado el registro");
                     
            </script>
            <?php
        //}else{
          //  $data['result']="error";
            //$this->parser->parse('frontend/incidenciasescuelas/insertar_incidencia_escuelas', $data);
            
        }else {
            $data['resultado']= '';
            $data['escuela']= $this->usuario_model->get_escuelas();
            $data['usuario']= $this->usuario_model->get_usuarios();
            $this->parser->parse('backend/incidenciasescuelas/insertar_incidencia_escuelas', $data);
        }
    }
    
    public function detalle_incidencia_escuela($id_inc_esc){
        print_r($id_inc_esc);die;
            	$incidencia['incidencia']= $this->incidencia_escuela_model->detail($id_inc_esc);
                $data = array(
				'incidencia' => $incidencia,
				'id_inc_esc' => $id_inc_esc,
		);
               
		$this->parser->parse('backend/incidenciasescuelas/detalle_incidencia_escuela', $data);
                
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
		$this->parser->parse('backend/incidenciasescuelas/update_incidencia_escuelas', $data);
						
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
