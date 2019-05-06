<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class CrudController extends CI_Controller {
		public function __construct() {
			parent:: __construct();
			$this->load->model('Crud_Model');
		}
		public function index() {
			$this->load->view('includes/header');
			$data['users'] = $this->Crud_Model->getAllData();
			$this->load->view('crudView',$data);
			$this->load->view('includes/footer');
		}

		public function create() {
			$this->Crud_Model->createData();
			redirect("CrudController");
		}

		public function edit($id) {
			$data['user'] = $this->Crud_Model->getData($id);
			$this->load->view('includes/header');
			$this->load->view('crudEdit',$data);
			$this->load->view('includes/footer');
		}

		public function update($id) {
			$this->Crud_Model->updateData($id);
			redirect("CrudController");
		}

		public function delete($id) {

			$this->Crud_Model->deleteData($id);
			redirect("CrudController");
		}
	}
