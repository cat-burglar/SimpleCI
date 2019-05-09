<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pet_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function createData() {
			$data = array (
				'name' => $this->input->post('name'),
				'breed' => $this->input->post('breed'),
				'birthdate' => $this->input->post('birthdate'),
				'status' => $this->input->post('status'),
				'bio' => $this->input->post('bio')
			);
			$this->db->insert('pets',$data);
			$data2 = array (
				'pet_id' => $this->db->insert_id(),
				'member_id' => $this->session->memberID
			);
			$this->db->insert('ownership',$data2);
		}

		function getAllData() {
			$query = $this->db->query('SELECT * FROM pets');
			return $query->result();
		}
		function getData($id) {
			//$sql = "SELECT * FROM users WHERE id = ?";
			//$query = $this->db->query($sql, array($id));
			$query = $this->db->query('SELECT * FROM pets WHERE `id` =' .$id);
			return $query->row();
		}

		function updateData($id) {
			$data = array (
				'name' => $this->input->post('name'),
				'breed' => $this->input->post('breed'),
				'birthdate' => $this->input->post('birthdate'),
				'status' => $this->input->post('status'),
				'bio' => $this->input->post('bio')
			);
			$this->db->where('id',$id);
			$this->db->update('pets', $data);
		}
		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('pets');
		}
	}
