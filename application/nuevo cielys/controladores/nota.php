<?php

class Nota extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //Modelos
        $this->load->model('nota_entrega_model');
        //Librerias
        $this->load->library('parser');
        $this->load->library('encrypt');
        //Helpers
        $this->load->helper('form');
    }
    
    function index(){}
    
    function get_nota_entrega(){
        $fecha_nota = $this->nota_entrega_model->get_nota_entregas();
            $data=array(
                'fecha_nota' => $fecha_nota          
                        );
	
            $this->parser->parse('backend/notaentrega/lista_nota_entrega', $data);
    }
    
    public function buscar_nota(){
             $process = $this->input->post('process');
                if($process){
                 $fecha_nota= $this->input->post('fecha_nota');
                 $recibido['recibido']= $this->nota_entrega_model->get_nota_entregas($recibido);
                 $data = array(
				'fecha_nota' => $fecha_nota,
                                'recibido' => $recibido,
                                'monto_total' => $monto_total,
                                'cantidad_entrega' => $cantidad_entrega
		);
               $this->parser->parse('backend/notaentrega/detalle_nota_entrega',$data);
//                   $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                   $this->output->set_output(json_encode($data));
                    }  else {
                    $data['result']='Este codigo no existe';
                    $this->parser->parse('backend/notaentrega/buscar_nota', $data);
//                    $this->output->set_header('Content-Type: application/javascript; charset=UTF-8');
//                    $this->output->set_output(json_encode($data));
//                    print_r($data);
                }  
    }
    function insertar_nota_entregas() {
        $process = $this->input->post('process');
        if ($process) {
            $fecha_nota = $this->input->post('fecha_nota');
            $recibido = $this->input->post('recibido');
            $monto_total = $this->input->post('monto_total');
            $cantidad_entrega = $this->input->post('cantidad_entrega');
            $values = array('fecha_nota' => $fecha_nota, 'recibido' => $recibido, 'monto_total' => $monto_total, 'cantidad_entrega' => $cantidad_entrega);
            $notaInsertado = $this->nota_entrega_model->insert_nota_entrega($values);
         }else {
            $data['result']="Debe LLenar los campos";
            $this->load->view('backend/notaentrega/insertar_nota', $data);
        }
    }

    public function detalle_nota_entrega($id_nota_entrega){
            	$id_nota_entrega['id_nota_entrega']= $this->nota_entrega_model->detail($id_nota_entrega);
                $data = array(
				'id_nota_entrega' => $id_nota_entrega,
				'fecha_nota' => $fecha_nota
		);
		$this->parser->parse('backend/notaentrega/detalle_nota_entrega', $data);
                
    }
    
    public function update_nota_entrega($id_nota_entrega){
	$process = $this->input->post('process');
	if($process){
                   $fecha_nota = $this->input->post('fecha_nota');
            $recibido = $this->input->post('recibido');
            $monto_total = $this->input->post('monto_total');
            $cantidad_entrega = $this->input->post('cantidad_entrega');
                   $values = array('fecha_nota' => $fecha_nota, 'recibido' => $recibido, 'monto_total' => $monto_total, 'cantidad_entrega' => $cantidad_entrega);
                    $notaInsertado = $this->nota_entrega_model->update_nota_entrega($id_nota_entrega, $values);
                    $this->parser->parse('nota/get_nota_entrega', $data);
        }else{
		$id_nota_entrega['id_nota_entrega'] = $this->nota_entrega_model->detail($id_nota_entrega);
               	$data = array(
		'id_nota_entrega' => $id_nota_entrega,
		'fecha_nota' => $fecha_nota
		);
		$this->parser->parse('backend/notaentrega/update_nota_entrega', $data);
						
		}
	}
        
        public function delete_nota_entrega(){ 
		$id_nota_entrega = $this->input->post('check');
		//index es una variable cualquiera que cree porque no tenia idea de que ponerle
		foreach ($id_nota_entrega as $index => $id_nota_entrega) {
			$deletedNota = $this->nota_entrega_model->delete_nota_entrega($id_nota_entrega);
		}
		$nota['fecha_nota'] = $this->nota_entrega_model->get_nota_entregas();
			redirect('nota/get_nota_entrega', 'refresh');
	}
}
