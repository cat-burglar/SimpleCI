<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Crud_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function createData() {
			$data = array (
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'birthDate' => $this->input->post('birthDate'),
				'contactNo' => $this->input->post('contactNo'),
				'bio' => $this->input->post('bio')
			);
			$this->db->insert('users',$data);
		}

		function getAllData() {
			$query = $this->db->query('SELECT * FROM users');
			return $query->result();
		}
		function getData($id) {
			//$sql = "SELECT * FROM users WHERE id = ?";
			//$query = $this->db->query($sql, array($id));
			$query = $this->db->query('SELECT * FROM users WHERE `id` =' .$id);
			return $query->row();
		}

		function updateData($id) {
			$data = array (
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'birthDate' => $this->input->post('birthDate'),
				'contactNo' => $this->input->post('contactNo'),
				'bio' => $this->input->post('bio')
			);
			$this->db->where('id',$id);
			$this->db->update('users', $data);
		}
		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('users');
		}
	}
