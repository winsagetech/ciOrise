<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('orders/M_orders'); 
    }
    
    public function display_orders(){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
            echo" please log in";
        } else {
            $data['header'] = 'Orders';
            $data['page_desc'] = 'Recent Orders';
            $data['orders'] = $this->M_orders->get_all_orders();
            $data['content_view'] = 'orders/orders_view';
            
            $this->template->admin_template($data);
        }
    }

    public function add_order() {
        $data = array(
            'id' => $this->input->post('id'),
            'item' => $this->input->post('item'),
            'date' => $this->input->post('date'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'mobile' => $this->input->post('mobile'),
            'status' => 'New'
            
        );
        $insert = $this->M_orders->add_order($data);        
        echo json_encode(array("status" => TRUE));
    }

    public function edit_order()
    {
        $data = array();
        $data = $this->M_orders->get_order($id);
        echo json_encode($data);
    }


    public function cancel_order() {
         {
            $data = array(
            
            'id' => $this->input->post('id'),
            'item' => $this->input->post('item'),
            'date' => $this->input->post('date'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'company' => $this->input->post('company'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'mobile' => $this->input->post('mobile'),
            'status' => $this->input->post('status')
                
            );
        }
        
        $this->M_category->cancel_order(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function delete_order($id) {
        $this->M_orders->delete_order($id);
        echo json_encode(array("status" => TRUE));
    }
}