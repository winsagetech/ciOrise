<?php

class Prod_page extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category/M_category');
        $this->load->model('product/M_product');        
    }
    
    public function view_product($id)
    {        
        $data['product_id'] = $id;
        $data['product'] = $this->M_product->get_item_by_id($id)->name;
        
        $gallery_path = APPPATH . '../upload/products/' . $id;
        $data['images'] = scandir($gallery_path, 1);
        

        $data['categories'] = $this->M_category->get_all_category();
        $data['products'] = $this->M_product->get_all_items();
        
        $this->load->view('template/header', $data);
        $this->load->view('prod_page_view', $data);
        $this->load->view('template/footer', $data);
    }
    
}

?>