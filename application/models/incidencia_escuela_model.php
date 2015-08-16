<?php

class incidencia_escuela_model extends CI_Model{ 

 function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
		
		public function get_incidencia_escuela(){
		//Funcion para obtener todos los usuarios
		$this->db->select('d.*');
		$this->db->from('incidencia_escuela d');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
		public function detail($id_inc_esc){
		//Funcion para obtener usuarios por id 
		$this->db->select('d.*');
		$this->db->from('incidencia_escuela d');
		$this->db->where('d.id_escuela', $id_inc_esc);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
		public function delete_incidencia_escuela($id_inc_esc){
		//Funcion para eliminar usuario
		$this->db->where('id_inc_esc', $id_inc_esc);
		
		return $query=$this->db->delete('incidencia_escuela');
	
	}
	
	
	public function insert_incidencia_escuela($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('incidencia_escuela', $values);
		return  $query;
		
	}
	
	
		public function update_incidencia_escuela($id_inc_esc, $values){
	
		if($this->db->where('id_escuela', $id_inc_esc)){
		return $query=$this->db->update('incidencia_escuela', $values);
		}else {
			
		}
	}
        
        public function join_detail_madre($usuario_id){
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('id_usuario',$usuario_id);
		$this->db->join('incidencia_escuela', 'incidencia_escuela.responsable = usuario.id_usuario');
		$query=$this->db->get();
		return $query->row_array();
    }
}