<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_orders extends CI_Model {
    
    var $table = 'ci_idee_orders';
    
    public function __construct(){
        parent::__construct();
    }
    
    public function add_order($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
	
	public function get_all_orders() {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }

    public function get_order($id) {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }    

    public function get_orders($email) {
        $this->db->from($this->table);
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query->result();
    }

    // REWRITE
    public function update_order($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_order($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}