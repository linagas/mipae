<?php

class madre_model extends CI_Model{ 
      
        function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
	public function get_madres(){
		//Funcion para obtener todos los usuarios
		$this->db->select('m.*');
		$this->db->from('madre m');
                $this->db->order_by('nombre asc');
		$query=$this->db->get();
		return $query->result_array();
		
	}
        
        public function get_madres_escuela($codigo_escuela){
		//Funcion para obtener todos los usuarios
		$this->db->select('m.*');
		$this->db->from('madre m');
		$this->db->where('m.codigo_escuela', $codigo_escuela);
		$query=$this->db->get();
		return $query->row_array();
		
	}
        
        public function get_simple_madres(){
		$this->db->select('m.*');
		$this->db->from('madre m');
		$query=$this->db->get();
		$result=$query->result_array();
		$data=array();
		foreach ($result as $row){
			$data[$row['id_madre']]=$row['nombre'];
		}
		return $data;
	}
	
	public function detail($id_madre){
		//Funcion para obtener usuarios por id 
		$this->db->select('m.*');
		$this->db->from('madre m');
		$this->db->where('m.id_madre', $id_madre);
		$query=$this->db->get();
		return $query->row_array();
	
	}
         public function get_cedula_madre($cedula) {
        //Funcion para obtener todos los usuario
        $this->db->select('m.*');
		$this->db->from('madre m');
		$this->db->where('m.cedula', $cedula);
        $query = $this->db->get();
       return $query->num_rows();
		
    }
         public function cedula_madre($cedula) {
        //Funcion para obtener todos los usuario
        $this->db->select('m.*');
		$this->db->from('madre m');
		$this->db->where('m.cedula', $cedula);
        $query = $this->db->get();
       return $query->row_array();
		
    }
	
	public function delete_madre($id_madre){
		//Funcion para eliminar usuario
		$this->db->where('id_madre', $id_madre);
		
		return $query=$this->db->delete('madre');
	
	}
	
	public function insert_madre($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('madre', $values);
		return  $this->db->insert_id($query);
		
	}
        public function insert_post_madre($id_madre,$values) {
        //Funcion para insertar usuarios
            if($this->db->where('id_madre', $id_madre)){
		return $query=$this->db->update('madre', $values);
		}else {
		return FALSE;
		}
        }
	public function update_madre($id_madre, $values){
	
		if($this->db->where('id_madre', $id_madre)){
		return $query=$this->db->update('madre', $values);
		}else {
			//redirect(base_url().'login','refresh');
		}
	}
        
       
        
}