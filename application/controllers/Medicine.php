<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medicine extends CI_Controller {
		public function __construct() {
			parent:: __construct();
			if(!$this->session->has_userdata('memberID')) {
				return redirect('Login/login');
			}
			$this->load->model('Medicine_Model');
		}

		public function viewRecord($pet_id) {
			$this->session->set_userdata('pet_id', $pet_id);
			$this->load->view('includes/header');
			$data['meds'] = $this->Medicine_Model->getAllData($pet_id);
			$this->load->view('medicine/view',$data);
			$this->load->view('includes/footer');
		}

		public function create() {
			$this->Medicine_Model->createData();
			redirect("Medicine/viewRecord/".$this->session->userdata('pet_id'));
		}

		public function edit($id) {
			$data['med'] = $this->Medicine_Model->getData($id);
			$this->load->view('includes/header');
			$this->load->view('medicine/edit',$data);
			$this->load->view('includes/footer');
		}

		public function update($id) {
			$this->Medicine_Model->updateData($id);
			redirect("Medicine/viewRecord/".$this->session->userdata('pet_id'));
		}

		public function delete($id) {
			$this->Medicine_Model->deleteData($id);
			redirect("Medicine/viewRecord/".$this->session->userdata('pet_id'));
		}

		
	}
