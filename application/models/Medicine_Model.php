<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medicine_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function getDueDate($type,$date) {
			if($type == "vaccine") {
				$due_date = date('m-d-Y', strtotime("+1 year", strtotime($date)));
			} else {
				$due_date = date('m/d/Y', strtotime("+3 months", strtotime($date)));
			}
			return $due_date;
		}

		public function createData() {
			$type = $this->input->post('type');
			$due_date = $this->getDueDate($type, date('m/d/Y'));
			
			$data = array (
				'pet_id' => $this->input->post('pet_id'),
				'type' => $type,
				'name' => $this->input->post('name'),
				'due_date' => $due_date
			);
			
			$this->db->insert('medicine',$data);
		}

		function getAllData($pet_id) {
			$query = $this->db->query('SELECT * FROM medicine WHERE `pet_id` = ' .$pet_id);
			return $query->result();
		}

		function getData($id) {
			$query = $this->db->query('SELECT * FROM medicine WHERE `id` = ' .$id);
			return $query->row();
		}

		function updateData($id) {
			$date = $this->input->post('admin_date');
			$due_date = $this->getDueDate($type, $date);

			$data = array (
				'pet_id' => $this->input->post('pet_id'),
				'name' => $this->input->post('name'),
				'admin_date' => $date,
				'due_date' => $due_date
			);

			if($data['name'] == "vaccine") {
				$data['due_date'] = $this->input->post('administered')->add(new DateInterval('P1Y'));
			} else {
				$data['due_date'] = $this->input->post('administered')->add(new DateInterval('P3M'));
			}

			$this->db->where('id',$id);
			$this->db->update('medicine', $data);
		}

		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('medicine');
		}
	}
