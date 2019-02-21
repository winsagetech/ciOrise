<?php
class M_Logout extends CI_Model {
     public function sess()
    {    
       
			 if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
 $this->load->library('session');
			
         //removing session data 
         $this->session->unset_userdata('username'); 
         redirect('login');
    }
}