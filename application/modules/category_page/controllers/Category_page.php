<?php

class Category_page extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product/M_product');
        $this->load->model('category/M_category');
    }   
    
    public function view_category($id)
    {        
        $cat = $this->M_category->get_catname_by_id($id);
        $data['prods'] = $this->M_product->get_items_by_category($cat);
        
        $data['categories'] = $this->M_category->get_all_category();
        $data['products'] = $this->M_product->get_all_items();
        $this->load->view('template/header', $data);
        $this->load->view('category_page_view', $data);
        $this->load->view('template/footer', $data);
    }
}
?>