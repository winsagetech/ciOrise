<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_category extends CI_Model {

    var $table = 'ci_idee_category';

    public function __construct(){
        parent::__construct();
    }
    
    public function get_category_types()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_all_category() {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function get_catname_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        $row = $query->row();
        return $row->category;
    }

    public function get_catid_by_name($category) {
        $this->db->from($this->table);
        $this->db->where('category',$category);
        $query = $this->db->get();
        $row = $query->row();
        return $row->id;
    }
    
    public function category_add($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    

    public function category_update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}