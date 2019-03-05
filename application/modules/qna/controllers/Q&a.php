<?php
    
    class Qanda extends MY_Controller {
    function index()
    {
        
        $this->load->view('template/header');
        $this->load->view('qanda/qanda_view');
        $this->load->view('template/footer');

    }
  }
?>