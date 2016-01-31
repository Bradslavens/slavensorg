<?php

class Admin_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	// public function register($pw)
	// {
	// 	$data = array(
	// 		'first_name'=>$this->input->post('user_name'),
	// 		'password'=>$pw
	// 		);

	// 	$this->db->insert('contact', $data);
	// 	return $this->db->insert_id();
	// }

	public function login()
	{
		$query = $this->db->get_where('contacts', array('email' => $this->input->post('user_name')));
		return $query->row();

	}

	public function get_contacts()
	{
		$query = $this->db->get('contacts');
		return $query->result_array();
	}
}