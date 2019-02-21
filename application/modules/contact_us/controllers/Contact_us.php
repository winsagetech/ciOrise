<?php
    class Contact_us extends MY_Controller {
    function index()
    {
        $this->load->model('category/M_category');
        $this->load->model('product/M_product');
        $data['categories'] = $this->M_category->get_all_category();
        $data['products'] = $this->M_product->get_all_items();
        
        $this->load->view('template/header', $data);
        $this->load->view('contact_us/contact_us_view');
        $this->load->view('template/footer', $data);

    }
    
    public function send_mail() {
        $name  = $this->input->post('Name');
        $subject = 'Contact from ideeinteriors.com' . $this->input->post('Subject');
        $message = $this->input->post('Comment');
        $from_email = $this->input->post('Email');
        $to_email = 'sourabh.kumar.c@gmail.com';  
        
        
        $this->load->library('email');
        
        $this->email->from($from_email, $name);
        $this->email->to($to_email);        
        $this->email->subject($subject);
        $this->email->message($message);
        
        $this->email->send();
        
        echo json_encode(array("status" => TRUE));      
        
    }
  }
?>