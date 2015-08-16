<?php

class asignacion_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
		//la abreviatura para el id de asignacion le asigne la letra g
			public function get_asignaciones(){
		//Funcion para obtener todos los usuarios
		$this->db->select('g.*');
		$this->db->from('asignacion g');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_asignacion){
		//Funcion para obtener usuarios por id 
		$this->db->select('g.*');
		$this->db->from('asignacion g');
		$this->db->where('g.id_asignacion', $id_asignacion);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_asignacion($id_asignacion){
		//Funcion para eliminar usuario
		$this->db->where('id_asignacion', $id_asignacion);
		
		return $query=$this->db->delete('asignacion');
	
	}
	
	
	public function insert_asignacion($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('asignacion', $values);
		return  $query;
		
	}
	
	
		public function update_asignacion($id_asignacion, $values){
	
		if($this->db->where('id_asignacion', $id_asignacion)){
		return $query=$this->db->update('asignacion', $values);
		}else {
			
		}
	}
        
}