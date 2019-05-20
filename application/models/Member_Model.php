<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Member_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		function can_login($email, $password)  
      	{  
           $this->db->where('email', $email);  
           $this->db->where('password', $password);  
           $query = $this->db->get('members');   
           return $query->row();
      	}  

		public function createData() {
			$data = array (
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$this->db->insert('members',$data);
		}

		function getAllData() {
			$query = $this->db->query('SELECT * FROM members');
			return $query->result();
		}

		function getEmailData($email) {
			$query = $this->db->query('SELECT * FROM members WHERE `email` = "' .$email .'"');
			return $query->row();
		}

		function getData($id) {
			$query = $this->db->query('SELECT * FROM members WHERE `id` =' .$id);
			return $query->row();
		}

		function updateData($id) {
			$data = array (
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'email' => $this->input->post('email'),
				'birthdate' => $this->input->post('birthdate'),
				'contactNo' => $this->input->post('contactNo'),
				'bio' => $this->input->post('bio'),
				'password' => $this->input->post('password')
			);
			$this->db->where('id',$id);
			$this->db->update('members', $data);
		}
		function deleteData($id) {
			$this->db->where('id',$id);
			$this->db->delete('members');
		}
	}
