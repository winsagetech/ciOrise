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
        
        $item = $this->input->post('item');
            $date = date('Y-m-d');
            $email = $this->input->post('email');
            $company = $this->input->post('company');
            $address = $this->input->post('address');
            $mobile = $this->input->post('mobile');


            $name  = $this->input->post('name');
            $country = $this->input->post('country');
            $subject = 'A new catalogue request';
            $message = ' Item : '.$item.' Date : '.$date.' Name : '.$name.' Email : '.$email.' Company : '.$company.' Address : '.$address.' Country :'.$country.' Mobile : '.$mobile;
            $from_email = '<' . $this->input->post('email') . '>';
            $to_email = 'sameer@orisechina.com';
            
            //error_log("Mail: " . $name . " " . $country . " " . $from_email . " " . $subject . " " . $message . " " .$to_email );
            
            $this->load->library('email');
            
            $this->email->clear();
            
            $this->email->from('info@orisechina.com', $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->reply_to($from_email, $name);
            $this->email->message($message);        
            
            $this->email->send();
        
        $insert = $this->M_orders->add_order($data);

        redirect('category_page/view_category/' . $category_id);        
    }
    
}
?>