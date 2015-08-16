<?php

class usuario_model extends CI_Model{ 
      
        function __construct(){
            parent::__construct();
            $this->load->database();

        }
		
	public function get_usuarios(){
//		//Funcion para obtener todos los usuarios
//		$this->db->select('u.*');
//		$this->db->from('usuario u');
//		$this->db->order_by('nombre asc');
//                $query=$this->db->get();
//		return $query->result_array();
//	
        $this->db->order_by('nombre','asc');
        $usuario = $this->db->get('usuario ');
        if($usuario->num_rows() > 0)
        {
        	return $usuario->result();
        }
	}

	public function get_escuelas() {
        //Funcion para obtener todos los usuarios
        $this->db->order_by('nombre','asc');
        $escuela = $this->db->get('escuela');
        if($escuela->num_rows() > 0)
        {
        	return $escuela->result();
        }
    }
	
        public function get_cedula_usuario($cedula) {
        //Funcion para obtener todos los usuarios
        $this->db->select('u.*');
        $this->db->from('usuario u');
        $this->db->where('u.cedula', $cedula);
        $query = $this->db->get();
        return $query->row_array();
    }
    
	public function detail($id_usuario){
		//Funcion para obtener usuarios por id 
		$this->db->select('u.*');
		$this->db->from('usuario u');
		$this->db->where('u.id_usuario', $id_usuario);
		$query=$this->db->get();
		return $query->row_array();
	
	}
	
	public function delete_usuario($id_usuario){
		//Funcion para eliminar usuario
		$this->db->where('id_usuario', $id_usuario);
		
		return $query=$this->db->delete('usuario');
	
	}
	
	public function insert_usuario($values){
		//Funcion para insertar usuarios
		$query=$this->db->insert('usuario', $values);
		return  $this->db->insert_id($query);
		
	}
        public function insert_post_usuario($id_usuario,$values) {
        //Funcion para insertar usuarios
            if($this->db->where('id_usuario', $id_usuario)){
		return $query=$this->db->update('usuario', $values);
		}else {
		return FALSE;
		}
                
         }
	public function update_usuario($id_usuario, $values){
	
		if($this->db->where('id_usuario', $id_usuario)){
		return $query=$this->db->update('usuario', $values);
		}else {
			
		}
	}
        
        public function login_usuario($nombre_u, $password) {

        $this->db->where('contrasena', $password);
        $this->db->where('nombre_usu', $nombre_u);
        $query = $this->db->get('usuario');
       if ($query->num_rows() > 0){ 
           return $query->row();
        } else{
                return FALSE ;
            }
       }
}