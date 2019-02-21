<?php

class M_product extends CI_Model
{
    var $table = 'ci_idee_items';
    
    public function __construct()
    {
        parent::__construct();
    }

    function get_all_items()
    {
        $this->db->select('*');
        $this->db->order_by('srno', 'asc');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_cat_item_count(){
        $this->db->select('category, COUNT(*) as prod_count');
        $this->db->group_by('category');
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
    
    function get_items_count()
    {
        return $this->db->count_all('ci_idee_items');
    }
    
    public function get_item_by_id($id)
    {
        $this->db->from('ci_idee_items');
        $this->db->where('srno', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function get_items_by_category($category) {
        $this->db->from($this->table);
        $this->db->where('category', $category);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function item_add($data)
    {
        $this->db->insert($this->table, $data);
    }
    
    public function delete_item_by_id($id)
    {
        $this->db->where('srno', $id);
        $this->db->delete($this->table);
    }
    
    public function item_update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
}
