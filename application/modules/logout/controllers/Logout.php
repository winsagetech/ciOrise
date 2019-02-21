<?php
    class Logout extends MY_Controller
	{
        function index()
        {
			$this->load->helper('url');
			$this->load->model('logout/M_logout');
    		$this->M_logout->sess();
		}

 	 }

?>