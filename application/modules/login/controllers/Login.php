<?php
    class Login extends MY_Controller {

        function index(){
            $data['header'] = 'WELCOME';
            $data['page_desc'] = 'Please Login';
            $data['content_view'] = 'login/login_view';

            $this->template->Login_template($data);
            //$this->load->view('Login/Login_View');
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Login'])) {
                    $this->load->model('login/M_login');
                    $this->M_login->log();
            }
        }
    }