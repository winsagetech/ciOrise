<?php

class Request extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product/M_product');
        $this->load->model('category/M_category');
        $this->load->model('orders/M_orders');
    }
    
    public function catalogue($id)
    {
        $product = $this->M_product->get_item_by_id($id);
        $data['product_name'] = $product->name;
        $category = $product->category;
        $data['category_id'] = $this->M_category->get_catid_by_name($category);  
        $data['categories'] = $this->M_category->get_all_category();        
        $data['products'] = $this->M_product->get_all_items();
        $this->load->view('template/header', $data);
        $this->load->view('catalogue_request_view', $data);
        $this->load->view('template/footer', $data);
    }
    
    public function process($category_id) {        
        $data = array(            
            'item' => $this->input->post('item'),
            'date' => date('Y-m-d'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'mobile' => $this->input->post('mobile'),
            'status' => 'New'            
        );
        
        $insert = $this->M_orders->add_order($data);
        redirect('category_page/view_category/' . $category_id);        
    }
    
}
?>