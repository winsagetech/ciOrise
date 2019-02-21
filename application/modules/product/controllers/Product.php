<?php
    class Product extends MY_Controller
	{
		 public function __construct() {
        parent::__construct();
        $this->load->model('product/M_product');
    }

        function index()
        {
			//$this->load->helper('url');
			 $data['gallery'] = $this->M_product->get_all_items();
			$this->load->view('product_view',$data);

		}

 	 }

?>