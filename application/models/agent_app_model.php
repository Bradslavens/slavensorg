<?php
class Agent_app_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all()
	{
		$query = $this->db->get('contact');
		return $query->result_array();
	}

	public function add_agent()
	{
		$datez="";
		$this->load->helper('url');
		$data = array(
			'source' =>$this->input->post('source'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('blue'),
			'license_status_id' => $this->input->post('license_status'),
			'license_number' => $this->input->post('license_number'),
			'mail_list' =>$this->input->post('mail_list'),
			'date'=> $datez
			);

		$this->db->insert('contact',$data);
		return $this->db->insert_id();
	}

	public function get_by_id($id)
	{
		$sql="SELECT `first_name`, `last_name`, `email`, `phone`, `license_number` FROM contact WHERE `id`=?";
		return $this->db->query($sql, array($id));
	}

}