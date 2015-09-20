<?php

class rol_model extends CI_Model{ 
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
		
    public function get_rol(){
        $this->db->order_by('rol','asc');
        $rol= $this->db->get('rol');
        if($rol->num_rows() > 0){
            return $rol->result();
        }

    }
    
    public function detail($id_rol){
        $this->db->select('rl.*');
        $this->db->from('rol rl');
        $this->db->where('rl.id', $id_rol);
            $query=$this->db->get();
		return $query->row_array();
    }
	
    public function delete_rol($id_rol){
        $this->db->where('id', $id_rol);
	return $query=$this->db->delete('rol');	
    }
    
    public function insert_rol($values){
		$query=$this->db->insert('rol', $values);
		return  $this->db->insert_id($query);
    }
    
    public function update_rol($id_rol, $values){
	if($this->db->where('id', $id_rol)){
            return $query=$this->db->update('rol', $values);
	}else {
	}
    }
        
    
}