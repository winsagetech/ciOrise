<?php

class Template extends MY_Controller {
    function __construct(){
        parent::__construct();
    }

    function sample_template($data = NULL){
        $this->load->view('template/sample_template_v.php', $data);
    }

    function admin_template($data = NULL){
        $this->load->view('template/admin_template_v.php', $data);
    }
      function login_template($data = NULL){
        $this->load->view('template/login_template_v.php', $data);
    }
}

?>