<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('agent_app_model');
	}

	public function view($ad = 'craigs')
	{

		// load bootstrap header includes top body tag
		$data['source']=$ad;
		$data['title'] = "Welome to Slavens Realty";
		$this->load->view('templates/bootstrap_top.php',$data);
		// add google analytics
		$this->load->view('templates/analytics_tracking_script.php');


		// load agent app
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		// validate form
		$this->form_validation->set_rules('first_name','First Name','trim|required|alpha|max_length[50]|xss_clean');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|alpha|max_length[50]|xss_clean');
		$this->form_validation->set_rules('phone','Phone','trim|required|alpha_dash|max_length[13]|xss_clean');
		$this->form_validation->set_rules('blue','Email','trim|required|valid_email|max_length[50]|xss_clean');
		$this->form_validation->set_rules('license_status','License Status','trim|required|max_length[1]|xss_clean');
		$this->form_validation->set_rules('license_number','License Number','alpha_numeric|max_length[15]');
		$this->form_validation->set_rules('email','error','max_length[0]');
		$this->form_validation->set_rules('source','source', 'alpha_numeric|max_length[15]');


		if($this->form_validation->run() === FALSE)
		{
			//load the top nav
			$this->load->view('nav.php');

			// load picture form
			$this->load->view('picture_form.php');


			// load get started info
			//$this->load->view('get_started.php');
			// load form
			//$this->load->view('agent_app', $data);

			
			// load join
			//$this->load->view('join.php');
		}
		else
		{
			// add contact
			$contact=$this->agent_app_model->add_agent();

			// get the new contact's info
			$first_name=$this->agent_app_model->get_by_id($contact);

			if ($first_name->num_rows() > 0)
			 {
			    $row = $first_name->row(); 

			    $data['first_name']= $row->first_name;
			    $data['last_name']= $row->last_name;
			    $data['email']= $row->email;
			    $data['phone']= $row->phone;
			    $data['license_number']= $row->bre_license_number;
			 } 

			// // send response email
			 $this->load->library('email');

			 $this->email->from('agents_wanted@srsample.us', 'Bradley Slavens');
			 $this->email->to($data['email'], $data['first_name']. '&nbsp;' . $data['last_name']); 
			 $this->email->cc('bradslavens@gmail.com'); 
			 //$this->email->bcc('them@their-example.com'); 

			 $message=$this->load->view('templates/email_1.php',$data,TRUE);
			 $this->email->subject('Slavens Realty Information Request');
			 $this->email->message($message); 
			 // $this->email->send();
			 echo $message;
			 //echo $this->email->print_debugger();



			$this->load->view('form_success',$data);

			

			
		}

		

		// load footer
		$this->load->view('footer.php');

		// load bootsrap footer includes js and end body tag
		$this->load->view('templates/bootstrap_bottom.php');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */