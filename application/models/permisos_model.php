<?php

class permisos_model extends CI_Model{ 
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
		
    public function get_permisos(){
        $this->db->order_by('nombre','asc');
        $permiso= $this->db->get('permisos');
        if($permiso->num_rows() > 0){
            return $permiso->result();
        }

    }
    
    public function detail($id_permisos){
        $this->db->select('pr.*');
        $this->db->from('permisos pr');
        $this->db->where('pr.id', $id_permisos);
            $query=$this->db->get();
		return $query->row_array();
    }
	
    public function delete_permisos($id_permisos){
        $this->db->where('id', $id_permisos);
	return $query=$this->db->delete('permisos');	
    }
    
    public function insert_permisos($values){
		$query=$this->db->insert('permisos', $values);
		return  $this->db->insert_id($query);
    }
    
    public function update_permisos($id_permisos, $values){
	if($this->db->where('id', $id_permisos)){
            return $query=$this->db->update('permisos', $values);
	}else {
	}
    }
        
    
}