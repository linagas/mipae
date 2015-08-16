<?php

class escuela_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_escuelas() {
        //Funcion para obtener todos los usuarios
        $this->db->select('e.*');
        $this->db->from('escuela e');
        $this->db->order_by('nombre asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_codigo_escuela($codigo_escuela) {
        //Funcion para obtener todos los usuarios
        $this->db->select('e.*');
        $this->db->from('escuela e');
        $this->db->where('e.codigo_escuela', $codigo_escuela);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function detail($id_escuela) {
        //Funcion para obtener usuarios por id 
        $this->db->select('e.*');
        $this->db->from('escuela e');
        $this->db->where('e.id_escuela', $id_escuela);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_escuela($id_escuela) {
        //Funcion para eliminar usuario
        $this->db->where('id_escuela', $id_escuela);

        return $query = $this->db->delete('escuela');
    }

    public function insert_escuela($values) {
        //Funcion para insertar usuarios
        $query = $this->db->insert('escuela', $values);
        return $this->db->insert_id($query);
    }
    public function insert_ano($values) {
        //Funcion para insertar usuarios
        $query = $this->db->insert('ano_escolar', $values);
        return $this->db->insert_id($query);
    }
    public function insert_rel_ano_escuela($values) {
        //Funcion para insertar usuarios
        $query = $this->db->insert('escuela_ano', $values);
        return $query;
    }

    public function update_escuela($id_escuela, $values) {

        if ($this->db->where('id_escuela', $id_escuela)) {
            return $query = $this->db->update('escuela', $values);
        } else {
            
        }
    }
    public function join_detail($escuela_id){
		$this->db->select('*');
		$this->db->from('escuela');
		$this->db->where('id_escuela',$escuela_id);
		$this->db->join('escuela_ano', 'escuela_ano.escuela_id = escuela.id_escuela');
		$query=$this->db->get();
		return $query->row_array();
    }

    public function detail_ano($id_ano) {
        //Funcion para obtener usuarios por id 
        $this->db->select('a.*');
        $this->db->from('ano_escolar a');
        $this->db->where('a.id', $id_ano);
        $query = $this->db->get();
        return $query->row_array();
    }
}
