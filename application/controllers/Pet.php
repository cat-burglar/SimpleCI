<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pet extends CI_Controller {
		public function __construct() {
			parent:: __construct();
			if(!$this->session->has_userdata('memberID')) {
				return redirect('Login/login');
			}
			$this->load->model('Pet_Model');
		}
		public function index() {
			$this->load->view('includes/header');
			$data['pets'] = $this->Pet_Model->getAllData();
			$this->load->view('pet/view',$data);
			$this->load->view('includes/footer');
		}

		public function create() {
			$this->Pet_Model->createData();
			redirect("Pet");
		}

		public function editPet($id) {
			$data['pet'] = $this->Pet_Model->getData($id);
			$this->load->view('includes/header');
			$this->load->view('pet/edit',$data);
			$this->load->view('includes/footer');
		}

		public function update($id) {
			$this->Pet_Model->updateData($id);
			redirect("Pet");
		}

		public function delete($id) {

			$this->Pet_Model->deleteData($id);
			redirect("Pet");
		}
	}
