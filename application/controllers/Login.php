<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		public function __construct() {
			parent:: __construct();
			$this->load->model('Member_Model');
		}

		public function login() {  
           $this->load->view('includes/header'); 
           $this->load->view("member/login"); 
           $this->load->view('includes/footer'); 
      	}  

      	public function login_validation() {  
	       $this->load->library('form_validation');  
	       $this->form_validation->set_rules('email', 'Email', 'required');  
	       $this->form_validation->set_rules('password', 'Password', 'required');  
	       if($this->form_validation->run()) {  
	            //true  
	            $email = $this->input->post('email');  
	            $password = $this->input->post('password');   
	            $member = $this->Member_Model->can_login($email, $password);
	            if(isset($member)) {  
	                 $session_data = array(  
	                      'email'     =>    $email, 
	                      'memberID'  =>	$member->id,	  
	                      'type'  =>	$member->type
	                 );  
	                 $this->session->set_userdata($session_data);  
	                 redirect(site_url() . '/Login/enter');  
	            }  
	            else  
	            {  
	                 $this->session->set_flashdata('error', 'Invalid email and Password');  
	                 redirect('login');  
	            }  
	       }  
	       else  
	       {  
	            //false  
	            $this->login();  
	       }  
      	}  

      	public function signup() {
			$this->load->view('includes/header');
			$this->load->view('member/signup');
			$this->load->view('includes/footer');
		}

		public function signup_validation() {  
	       $this->load->library('form_validation');  
	       $this->form_validation->set_rules('email', 'Email', 'required');  
	       $this->form_validation->set_rules('password', 'Password', 'required');  
	       if($this->form_validation->run()) {  
	            //true  
	            $email = $this->input->post('email');  
	            $password = $this->input->post('password');  
	            //model function  
	            $this->load->model('Member_Model');  
	            $emailExists = $this->Member_Model->getEmailData($email);
	            if(isset($emailExists)) {  
	                 $this->session->set_flashdata('error', 'Email already exists');  
	                 redirect('signup');  
	            }  
	            else  
	            {  
	            	$this->Member_Model->createData();
	                redirect('login');  
	            
	            }  
	       }  
	       else  
	       {  
	            //false  
	            $this->signup();  
	       }  
      	}  
      	public function enter(){  
           if($this->session->userdata('email') != '') {   
                 redirect(site_url() . 'Member/welcome');  
           }  
           else {  
                redirect(site_url() . '/Login/login');  
           }  
      	}  
      	public function logout() {  
      	   $data = ['email','memberID','type'];
           $this->session->unset_userdata($data);  
           redirect('login');  
      	}  
	}
