<?php

class incidencias_model extends CI_Model{ 
      
        function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
	public function get_incidencias(){
		//Funcion para obtener todos los usuarios
		$this->db->select('i.*');
		$this->db->from('incidencias i');
		$query=$this->db->get();
		return $query->result_array();
		
	}
	
         public function get_id_incidencia($tipo_incidencia) {
        //Funcion para obtener todos los usuarios
        $this->db->select('i.*');
		$this->db->from('incidencia i');
		$this->db->where('i.tipo_incidencia', $tipo_incidencia);
        $query = $this->db->get();
        return $query->row_array();
    }
    
	public function detail($id_incidencias){
		//Funcion para obtener usuarios por id 
		$this->db->select('i.*');
		$this->db->from('incidencias i');
		$this->db->where('i.id_incidencias', $id_incidencias);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
	public function delete_incidencias($id_incidencias){
		//Funcion para eliminar usuario
		$this->db->where('id_incidencias', $id_incidencias);
		
		return $query=$this->db->delete('incidencias');
	
	}
	
	public function insert_incidencias($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('incidencias', $values);
		return  $query;
		
	}
	public function update_incidencias($id_incidencias, $values){
	
		if($this->db->where('id_incidencias', $id_incidencias)){
		return $query=$this->db->update('incidencias', $values);
		}else {
			
		}
	}
        
}