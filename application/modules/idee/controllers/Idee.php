<?php
    class Idee extends MY_Controller
	{
        function index()
        {	
            $this->load->model('idee/M_idee');
            $this->load->model('category/M_category');
            $this->load->model('product/M_product');
            $this->load->model('blog/M_blog');
			$data['pages'] = $this->M_idee->get_all_pages();			
			$data['categories'] = $this->M_category->get_all_category();
			$data['products'] = $this->M_product->get_all_items();
			$data['cat_item_counts'] = $this->M_product->get_cat_item_count();
			$data['blog'] = $this->M_blog->get_all_blog();

			
			$this->load->view('template/header', $data);
			$this->load->view('idee_view3',$data);
			$this->load->view('template/footer', $data);		
		}
		
		public function send_mail() {	    
		    
		    $name  = $this->input->post('name');
		    $country = $this->input->post('country');
		    $subject = 'Message from Orisechina website:  ' . $this->input->post('subject');
		    $message = $this->input->post('message');
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
		    
		    redirect(base_url());
		    
		}
 	 }
?>