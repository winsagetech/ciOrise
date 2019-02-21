<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('users/M_users');
        $this->load->model('accounts/M_accounts');
    }

    public function display_users(){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
            redirect(base_url());
        } else {
        $data['header'] = 'Dealers';
        $data['page_desc'] = '';
        $data['users'] = $this->M_users->get_all_dealers();
        $data['content_view'] = 'users/users_view';

        $this->template->admin_template($data);
        }
    }

    public function user_add() {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'type' => $this->input->post('type')
        );
        $insert = $this->M_users->user_add($data);
        
        $pass =sha1( $this->input->post('password'));
        $data = array(
            'user' => $this->input->post('email'),
            'password'=> $pass,
            'Name' => $this->input->post('name')
            
        );
        $insert = $this->M_accounts->Acc_add($data);
        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->M_users->get_by_id($id);
        echo json_encode($data);
    }

    public function user_update() {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'type' => $this->input->post('type')
        );
        $this->M_users->user_update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function user_delete($id) {
        $this->M_users->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}


?>