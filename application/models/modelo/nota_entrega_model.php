<?php

class nota_entrega_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
		
			public function get_nota_entregas(){
		//Funcion para obtener todos los usuarios
		$this->db->select('n.*');
		$this->db->from('nota_entrega n');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_nota_entrega){
		//Funcion para obtener usuarios por id 
		$this->db->select('n.*');
		$this->db->from('nota_entrega n');
		$this->db->where('n.id_nota_entrega', $id_nota_entrega);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_nota_entrega($id_nota_entrega){
		//Funcion para eliminar usuario
		$this->db->where('id_nota_entrega', $id_nota_entrega);
		
		return $query=$this->db->delete('nota_entrega');
	
	}
	
	
	public function insert_nota_entrega($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('nota_entrega', $values);
		return  $query;
		
	}
	
	
		public function update_nota_entrega($id_escuela, $values){
	
		if($this->db->where('id_nota_entrega', $id_nota_entrega)){
		return $query=$this->db->update('nota_entrega', $values);
		}else {
			
		}
	}
        
}