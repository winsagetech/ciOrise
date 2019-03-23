<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crm extends CI_Model {

    var $table = 'ci_crm_users';

    public function __construct(){
        parent::__construct();
    }

    public function user_add($data) {        
        return $this->db->insert($this->table, $data);        
    }
}