<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

    var $table = 'ci_idee_users';

    public function __construct(){
        parent::__construct();
    }

    public function get_all_users() {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
    
    public function get_all_dealers() {
        $this->db->from($this->table);
        $this->db->where('type','Dealer');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    function get_makers(){
        $this->db->where('type', 'Maker');
        $query = $this->db->get('ci_idee_users');
        return $query->result();
    }

    function get_clients(){
        $this->db->where('type', 'Dealer');
        $query = $this->db->get('ci_idee_users');
        return $query->result();
    }

    function get_makers_count(){
        $this->db->where('type', 'Maker');
        $this->db->from('ci_idee_users');
        return $this->db->count_all_results();
    }

    function get_clients_count(){
        $this->db->where('type', 'Client');
        $this->db->from('ci_idee_users');
        return $this->db->count_all_results();
    }

    public function user_add($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function user_update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}