<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medicine_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function createData() {
			$type = $this->input->post('type');
			$due_date = $this->getDueDate($type, date('Y/m/d'));
			
			$data = array (
				'pet_id' => $this->input->post('pet_id'),
				'type' => $type,
				'name' => $this->input->post('name'),
				'admin_date' => date('Y/m/d'),
				'due_date' => $due_date
			);
			
			$this->db->insert('medicine',$data);
		}

		public function getDueDate($type,$date) {
			if($type == "Vaccine" || $type == "Rabies") {
				$due_date = date('Y/m/d', strtotime("+1 year", strtotime($date)));
			} else {
				$due_date = date('Y/m/d', strtotime("+3 months", strtotime($date)));
			}
			var_dump($due_date);
			return $due_date;
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
			$type = $this->input->post('type');
			$date = $this->input->post('admin_date');
			$due_date = $this->getDueDate($type, $date);

			$data = array (
				'pet_id' => $this->input->post('pet_id'),
				'type' => $type,
				'name' => $this->input->post('name'),
				'admin_date' => $date,
				'due_date' => $due_date
			);
			$this->db->where('id',$id);
			$this->db->update('medicine', $data);
		}

		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('medicine');
		}
	}
