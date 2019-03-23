<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crm extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('crm/M_crm');        
    }

    public function user_add() {
        $data = array(
            'f_name' => $this->input->post('name'), 
            'l_name' => $this->input->post('company'),           
            's1_address' => $this->input->post('address'),            
            'pno' => $this->input->post('mobile'),             
            'country' => $this->input->post('country'),            
            'email' => $this->input->post('email')
           );
        $insert = $this->M_crm->user_add($data);       
        
        if ($insert == true)
            echo json_encode(array("status" => TRUE));
        else 
            echo json_encode(array("status" => FALSE));
    }

}
?>