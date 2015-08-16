<?php

class Escuela extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('escuela_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){
        $escuelas = $this->escuela_model->get_escuelas();
            $data=array(
                'escuelas' => $escuelas ,          
                        );
	$this->parser->parse('backend/escuelas/lista_escuelas', $data);
   
        
    }
    
    function get_escuelas(){
        $escuelas = $this->escuela_model->get_escuelas();
            $data=array(
                'escuelas' => $escuelas ,          
                        );
	$this->parser->parse('backend/escuelas/lista_escuelas', $data);
    }
    
    function insertar_escuelas() {
        $process = $this->input->post('process');
        if ($process) {
            $nombre_escuela = $this->input->post('nombre_escuela');
            $direccion = $this->input->post('direccion');
            $codigo_escuela = $this->input->post('codigo_escuela');
            $values = array('nombre' => $nombre_escuela, 'direccion' => $direccion, 'codigo_escuela' => $codigo_escuela);
            $escuelaInsertado = $this->escuela_model->insert_escuela($values);
            $data['id_escuela']=$escuelaInsertado;
            $this->parser->parse('backend/escuelas/post_escuela', $data);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('backend/escuelas/insertar_escuela', $data);
        }
    }
    
    function insertar_ano() {
        $process = $this->input->post('process');
        if ($process){
             $id_escuela = $this->input->post('id_escuela');
            $ano_escolar = $this->input->post('ano_escolar');
            $values = array( 'ano_escolar' => $ano_escolar);
            $escuelaInsertado = $this->escuela_model->insert_ano($values);
            $values1=array( 'escuela_id' => $id_escuela, 'id_ano'=>$escuelaInsertado);
            $result = $this->escuela_model->insert_rel_ano_escuela($values1);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->parser->parse('backend/escuelas/post_escuela', $data);
        }
    }

    public function detalle_escuela($id_escuela){
                $escuela_id=$id_escuela;
            	$escuela['escuela']= $this->escuela_model->detail($id_escuela);
                $escuela_join['escuela_join']=$this->escuela_model->join_detail($escuela_id);
                $id_ano= $escuela_join['escuela_join']['id_ano'];
                $dato['dato']=$this->escuela_model->detail_ano($id_ano);
                $data = array(
				'escuela' => $escuela,
				'id_escuela' => $id_escuela,
                                'escuela_join' => $escuela_join,
                                'dato'=>$dato,
		);
		$this->parser->parse('backend/escuelas/detalle_escuela', $data);
                
    }
    
    public function buscar_escuela(){
                $codigo_escuela=$this->input->post('codigo_escuela');
                $process = $this->input->post('process');
                if($process){
                 $codigo_escuela = $this->input->post('codigo_escuela');
                 $escuela['escuela']= $this->escuela_model->get_codigo_escuela($codigo_escuela);
                 $id_escuela=$escuela['escuela']['id_escuela'];
                $escuela_id=$id_escuela;
            	$escuela['escuela']= $this->escuela_model->detail($id_escuela);
                $escuela_join['escuela_join']=$this->escuela_model->join_detail($escuela_id);
                $id_ano= $escuela_join['escuela_join']['id_ano'];
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
    }
    
    public function update_escuela($id_escuela){
	$process = $this->input->post('process');
        
	if($process){
            $nombre_escuela = $this->input->post('nombre');
            $direccion = $this->input->post('direccion');
            $matricula = $this->input->post('matricula');
            $lapso_matricula = $this->input->post('lapso_matricula');
            $ano_escolar = $this->input->post('ano_escolar');
            $codigo_escuela = $this->input->post('codigo_escuela');
			
  $values = array('nombre' => $nombre_escuela, 'direccion' => $direccion,'codigo_escuela' => $codigo_escuela);
                    $escuelaInsertado = $this->escuela_model->update_escuela($id_escuela, $values);
                
        }else{
		$escuela['escuela'] = $this->escuela_model->detail($id_escuela);
                $escuela_id=$id_escuela;
            	$escuela['escuela']= $this->escuela_model->detail($id_escuela);
                $escuela_join['escuela_join']=$this->escuela_model->join_detail($escuela_id);
                $id_ano= $escuela_join['escuela_join']['id_ano'];
                $dato['dato']=$this->escuela_model->detail_ano($id_ano);
               	$data = array(
				'escuela' => $escuela,
				'id_escuela' => $id_escuela,
                                'escuela_join' => $escuela_join,
                                'dato'=>$dato,
		);
		$this->parser->parse('backend/escuelas/update_escuela', $data);
						
		}
	}
        
        public function delete_escuela($id_escuela){ 
		$deletedEscuela = $this->escuela_model->delete_escuela($id_escuela);
		$escuelas = $this->escuela_model->get_escuelas();
                $data= array(
                    'escuelas'=> $escuelas
                );
		$this->parser->parse('backend/escuelas/lista_escuelas', $data);
	}
}
