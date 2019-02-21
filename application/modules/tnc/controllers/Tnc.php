<?php
class Tnc extends MY_Controller {
    function index()
    {
        
        $this->load->view('template/header');
        $this->load->view('tnc/tnc_view');
        $this->load->view('template/footer');
        
    }
}
?>