<?php

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	// public function register()
	// {

	// 	$this->load->helper('form');
 //    	$this->load->library('form_validation');

 //    	$this->form_validation->set_rules('user_name', 'User Name', 'required|minlength[2]|max_lenght[12]|alpha_numeric');
 //    	$this->form_validation->set_rules('password', 'Password', 'required|minlength[2]|max_lenght[12]');

 //    	if ($this->form_validation->run() === FALSE)
	//     {
	//         $this->load->view('templates/bootstrap_top');
	//         $this->load->view('admin/registration');
	//         $this->load->view('templates/bootstrap_bottom');

	//     }
	//     else
	//     {
	//     	$pw = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
	        
	//         ;

	//         if(!$this->admin_model->register($pw))
	//         {
	//         	$this->load->view('admin/registration');
	//         }
	//         else
	//         {
	//         	$this->load->view('admin/login');
	//         }
	//     }

	// }


	// public function login()
	// {

	// 	$this->load->helper('form');
 //    	$this->load->library('form_validation');

 //    	$this->form_validation->set_rules('user_name', 'User Name', 'required|minlength[2]|max_lenght[12]|alpha_numeric');
 //    	$this->form_validation->set_rules('password', 'Password', 'required|minlength[2]|max_lenght[12]');

 //    	if ($this->form_validation->run() === FALSE)
	//     {
	//         $this->load->view('templates/bootstrap_top');
	//         $this->load->view('admin/login');
	//         $this->load->view('templates/bootstrap_bottom');

	//     }
	//     else
	//     {
	//         $user = $this->admin_model->login();

	//         if (password_verify($this->input->post('password'), $user->password)) 
	//         { 
	//         	$_SESSION['id'] = $user->id;
	// 		    $this->load->view('admin/contacts'); 
	// 		} 
	// 		else 
	// 		{ 
	// 		    echo 'Invalid password.'; 
	// 		} 
	// 	}

	// }

	public function contacts()
	{
		if(!isset($_SESSION['id']))
		{
			$this->load->helper('form');
	    	$this->load->library('form_validation');

	    	$this->form_validation->set_rules('user_name', 'User Name', 'required|minlength[2]');
	    	$this->form_validation->set_rules('password', 'Password', 'required|minlength[2]|max_lenght[12]');

	    	if ($this->form_validation->run() === FALSE)
		    {
		        $this->load->view('templates/bootstrap_top');
		        $this->load->view('admin/login');
		        $this->load->view('templates/bootstrap_bottom');

		    }
		    else
		    {
		        $user = $this->admin_model->login();

		        if (password_verify($this->input->post('password'), $user->password)) 
		        { 
		        	$_SESSION['id'] = $user->id;
		        	// get contacts
					
					$data['contacts'] = $this->admin_model->get_contacts();
		        	$this->load->view('templates/bootstrap_top');
					$this->load->view('admin/contacts', $data);
		        	$this->load->view('templates/bootstrap_bottom');

				} 
				else 
				{ 
				    echo 'Invalid password.'; 
				} 
			}
		}
	}
}
?>
