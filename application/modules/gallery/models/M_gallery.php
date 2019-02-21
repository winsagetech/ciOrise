<?php

class M_gallery extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function get_all_items()
    {
        $this->db->select('*');
        $this->db->order_by('category', 'asc');
        $this->db->order_by('srno', 'asc');
        $this->db->from('ci_idee_items');
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_items1()
    {
        $this->db->select('*');
        $this->db->from('ci_idee_items');
        $query = $this->db->get();
        return $query->result();
    }
}
