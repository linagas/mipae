<?php

class alimento_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
			//la abreviatura del id para alimentos le puse una t
		
			public function get_alimentos(){
		//Funcion para obtener todos los usuarios
		$this->db->select('t.*');
		$this->db->from('alimento t');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_alimento){
		//Funcion para obtener usuarios por id 
		$this->db->select('t.*');
		$this->db->from('alimento t');
		$this->db->where('t.id_alimento', $id_alimento);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_alimento($id_alimento){
		//Funcion para eliminar usuario
		$this->db->where('id_alimento', $id_alimento);
		
		return $query=$this->db->delete('alimento');
	
	}
	
	
	public function insert_alimento($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('alimento', $values);
		return  $query;
		
	}
	
	
		public function update_alimento($id_alimento, $values){
	
		if($this->db->where('id_alimento', $id_alimento)){
		return $query=$this->db->update('alimento', $values);
		}else {
			
		}
	}
        
}