<?php

class menu_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
		//en la abreviatura del id de menu le puse una c 
			public function get_menus(){
		//Funcion para obtener todos los usuarios
		$this->db->select('c.*');
		$this->db->from('menu c');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_menu){
		//Funcion para obtener usuarios por id 
		$this->db->select('c.*');
		$this->db->from('menu c');
		$this->db->where('c.id_menu', $id_menu);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_menu($id_menu){
		//Funcion para eliminar usuario
		$this->db->where('id_escuela', $id_menu);
		
		return $query=$this->db->delete('menu');
	
	}
	
	
	public function insert_menu($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('menu', $values);
		return  $query;
		
	}
	
	
		public function update_menu($id_menu, $values){
	
		if($this->db->where('id_menu', $id_menu)){
		return $query=$this->db->update('menu', $values);
		}else {
			
		}
	}
        
}