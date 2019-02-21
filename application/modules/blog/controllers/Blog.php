<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('blog/M_blog'); 
         $this->load->helper('url');
        }
        function index()
        {
            
                $data['blog'] = $this->M_blog->get_all_blog();
                $this->load->view('template/header', $data);
                $this->load->view('blog_view2',$data);
                $this->load->view('template/footer', $data);
              }
    

    public function display_blog(){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
                $data['blog'] = $this->M_blog->get_all_blog();
                $this->load->view('template/header', $data);
                $this->load->view('blog_view2',$data);
                $this->load->view('template/footer', $data);
            
        } else {

            $this->load->library('ckeditor');
            $this->load->library('ckfinder');
            $this->ckeditor->basePath = base_url().'assets/ckeditor/';
            $this->ckeditor->config['toolbar'] = array(
                            array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                                                                );
            $this->ckeditor->config['language'] = 'it';
            $this->ckeditor->config['width'] = '730px';
            $this->ckeditor->config['height'] = '300px';            

            //Add Ckfinder to Ckeditor
            $this->ckfinder->SetupCKEditor($this->ckeditor,base_url().'assets/ckfinder/'); 
                $data['header'] = 'blog';
                $data['page_desc'] = 'blog List';
                $data['blogs'] = $this->M_blog->get_all_blog();
                $data['content_view'] = 'blog/blog_view';
                $this->template->admin_template($data);
        }
    }

    function upload_image($title)
    {
        if (isset($_FILES["blog_image"])) {
            $extension = explode('.', $_FILES['blog_image']['name']);
            $new_name = $title . '.' . $extension[1];
            $destination = './upload/' . $new_name;
            move_uploaded_file($_FILES['blog_image']['tmp_name'], $destination);
            return $new_name;
        }
    }

    public function blog_add() {
        $data = array(
            'title' => $this->input->post('title'),
            'date' => $this->input->post('date'),
            'image' => $this->upload_image($this->input->post('title')),
            'data' => $this->input->post('data')    
        );
        $insert = $this->M_blog->blog_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id) {
        $data = $this->M_blog->get_by_id($id);
        echo json_encode($data);
    }

    public function blog_update() {
       if (isset($_FILES['blog_image']['tmp_name'])) {
         $data = array(
             'title' => $this->input->post('title'),
            'date' => $this->input->post('date'),
            'image' => $this->upload_image($this->input->post('title')),
            'data' => $this->input->post('data')
             );
         } else {
        $data = array(
             'title' => $this->input->post('title'),
            'date' => $this->input->post('date'),
            'data' => $this->input->post('data')
             );
    }

        $this->M_blog->blog_update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function goto_blog() {
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[4];
       
        $data['blog']=$this->M_blog->get_by_id($id);
         $this->load->view('template/header', $data);
        $this->load->view('blog_individual_view',$data);
        $this->load->view('template/footer', $data);
        //echo json_encode(array("status" => TRUE));
    }

    public function blog_delete($id) {
        $this->M_blog->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}