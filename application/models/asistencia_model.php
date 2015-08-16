<?php

class asistencia_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
		
		public function get_asistencia(){
		//Funcion para obtener todos los usuarios
		$this->db->select('a.*');
		$this->db->from('asistencia a');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
                public function get_cedula_madre($cedula_madre){
            //Funcion para obtener todos los usuarios
                $this->db->select('a.*');
		$this->db->from('asistencia a');
                 $this->db->where('a.cedula', $cedula_madre);
                 $query = $this->db->get();
                 return $query->row_array();
        }
		public function detail($id_asistencia){
		//Funcion para obtener usuarios por id 
		$this->db->select('a.*');
		$this->db->from('asistencia a');
		$this->db->where('a.id', $id_asistencia);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_asistencia($id_asistencia){
		//Funcion para eliminar usuario
		$this->db->where('id', $id_asistencia);
		
		return $query=$this->db->delete('asistencia');
	
	}
	
	
	public function insert_asistencia($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('asistencia', $values);
		return  $query;
		
	}
	
	
		public function update_asistencia($id_asistencia, $values){
	
		if($this->db->where('id', $id_asistencia)){
		return $query=$this->db->update('asistencia', $values);
		}else {
			
		}
	}
        
}