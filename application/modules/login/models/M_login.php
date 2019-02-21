<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model 
{

	var $table1 = 'ci_idee_login';
     public function log(){ 
    // $this->load->helper('url');
    // $this->load->library('table');   
    	$user = $this->input->post('user');
	$password = $this->input->post('password');
	 $this->db->from($this->table1);
        $this->db->where('user',$user);
        $query = $this->db->get();
	 if(empty($query->result()))
				echo "not a registered user!";
	else{
      $res = $query->result();
	  $row = $res[0]; 
			if(sha1($password) == $row->password)	{
		 		//adding data to session 
        		$this->load->library('session');
			 //adding data to session 
        		 $this->session->set_userdata('user',$user);
			//echo $user;
				 $this->load->helper('url'); 
         		if($this->session->userdata('user')!="admin")
         		redirect('dashboard/inventory'); 
     			else
     			redirect('dashboard'); 
	        		exit;
				} 

		}
		
	}

}