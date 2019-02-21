<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('category/M_category'); }

    public function display_category(){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
            echo" please log in";
        } else {
        $data['header'] = 'Category';
        $data['page_desc'] = 'Category List';
        $data['models'] = $this->M_category->get_all_category();
        $data['content_view'] = 'category/category_view';

        $this->template->admin_template($data);
        }
    }
    
    function upload_image($srno)
    {
        if (isset($_FILES["image"])) {
            $extension = explode('.', $_FILES['image']['name']);
            $new_name = $srno . '.' . $extension[1];
            $destination = './upload/cats/' . $new_name;
            unlink($destination);
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            return $new_name;
        }
    }

    public function category_add() {
        $data = array(
            'id' => $this->input->post('sr_num'),
            'category' => $this->input->post('category'),
            'image' => $this->upload_image($this->input->post('sr_num'))
            
        );
        $insert = $this->M_category->category_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->M_category->get_by_id($id);
        echo json_encode($data);
    }

    public function category_update() {
        
        if (($_FILES['image']['tmp_name']!='')) {
            $data = array(
                'id' => $this->input->post('sr_num'),
                'category' => $this->input->post('category'),
                'image' => $this->upload_image($this->input->post('sr_num'))                
            );
        } else {
            $data = array(
                'id' => $this->input->post('sr_num'),
                'category' => $this->input->post('category')
                
            );
        }
        
        $this->M_category->category_update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function category_delete($id) {
        $this->M_category->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}