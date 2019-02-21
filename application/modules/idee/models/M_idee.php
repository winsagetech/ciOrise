<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_idee extends CI_Model 
{

    var $table1 = 'ci_idee_pages';
     public function get_all_pages() {
        $this->db->from($this->table1);
        $this->db->where('status','1');
        $query=$this->db->get();
        return $query->result();
    }

}