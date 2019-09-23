<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pet_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function createData() {
			$data = array (
				'owner_id' => $this->session->memberID,
				'name' => $this->input->post('name'),
				'breed' => $this->input->post('breed'),
				'birthdate' => $this->input->post('birthdate'),
				'status' => $this->input->post('status'),
				'notes' => $this->input->post('notes')
			);
			$this->db->insert('pets',$data);
		}

		function getAllData() {
			$member_id = $this->session->memberID;
			$query = $this->db->query('SELECT * FROM pets WHERE `owner_id` =' .$member_id);
			return $query->result();
		}

		function getData($id) {
			$query = $this->db->query('SELECT * FROM pets WHERE `id` =' .$id);
			return $query->row();
		}

		function updateData($id) {
			$data = array (
				'name' => $this->input->post('name'),
				'breed' => $this->input->post('breed'),
				'birthdate' => $this->input->post('birthdate'),
				'status' => $this->input->post('status'),
				'notes' => $this->input->post('notes')
			);
			$this->db->where('id',$id);
			$this->db->update('pets', $data);
		}
		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('pets');
		}
	}
