<?php

class presupuesto_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		//la abreviatura del id de presupuesto es una letra d 
		
			public function get_presupuesto(){
		//Funcion para obtener todos los usuarios
		$this->db->select('d.*');
		$this->db->from('presupuesto d');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_presupuesto){
		//Funcion para obtener usuarios por id 
		$this->db->select('d.*');
		$this->db->from('presupuesto d');
		$this->db->where('d.id_presupuesto', $id_presupuesto);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_presupuesto($id_presupuesto){
		//Funcion para eliminar usuario
		$this->db->where('id_presupuesto', $id_presupuesto);
		
		return $query=$this->db->delete('presupuesto');
	
	}
	
	
	public function insert_presupuesto($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('presupuesto', $values);
		return  $query;
		
	}
	
	
		public function update_presupuesto($id_presupuesto, $values){
	
		if($this->db->where('id_presupuesto', $id_presupuesto)){
		return $query=$this->db->update('presupuesto', $values);
		}else {
			
		}
	}
        
}