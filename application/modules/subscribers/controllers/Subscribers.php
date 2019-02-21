<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('subscribers/M_subscribers');
    }

    public function display_subscribers(){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
            redirect(base_url());
        } else {
        $data['header'] = 'Subscribers';
        $data['page_desc'] = '';
        $data['subscribers'] = $this->M_subscribers->get_all_subscribers();
        $data['content_view'] = 'subscribers/subscribers_view';

        $this->template->admin_template($data);
        }
    }

    public function subscriber_add() {
        $data = array(
            'email' => $this->input->post('email')
        );
        $insert = $this->M_subscribers->subscriber_add($data);
        
        echo json_encode(array("status" => TRUE));
    }

    public function subscriber_delete($email) {
        $this->M_subscribers->delete_by_email($email);
        echo json_encode(array("status" => TRUE));
    }
}


?>