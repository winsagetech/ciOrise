<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subscribers extends CI_Model {

    var $table = 'ci_idee_subscribers';

    public function __construct(){
        parent::__construct();
    }

    public function get_all_subscribers() {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
    
    public function subscriber_add($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete_by_email($email) {
        $this->db->where('id', $email);
        $this->db->delete($this->table);
    }
}