<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Member extends CI_Controller {
		public function __construct() {
			parent:: __construct();
			if(!$this->session->has_userdata('memberID')) {
				return redirect('Login/login');
			}
			$this->load->model('Member_Model');
		}
		public function view($id) {
			$data['member'] = $this->Member_Model->getData($id);
			$this->load->view('includes/header');
			$this->load->view('member/view',$data);
			$this->load->view('includes/footer');
		}

		public function welcome() {  
           $this->load->view('includes/header'); 
           $this->load->view("member/welcome"); 
           $this->load->view('includes/footer'); 
      	}  

		public function edit($id) {
			$data['member'] = $this->Member_Model->getData($id);
			$this->load->view('includes/header');
			$this->load->view('member/edit',$data);
			$this->load->view('includes/footer');
		}

		public function update($id) {
			$this->Member_Model->updateData($id);
			redirect("Member");
		}

		public function delete($id) {
			$this->Member_Model->deleteData($id);
			redirect("Login/logout");
		}
	}
