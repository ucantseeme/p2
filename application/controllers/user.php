<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// $data['message_registration_error'] = "";

	function __construct(){
		//calling CI_Controller constructer
		parent::__construct();
		$this->load->model('user_model');
		$this->load->view('header');
	}

	public function login(){
    $this->load->view('login');
		$this->load->view('footer');
	}

	public function login_validate(){
		$this->form_validation->set_rules('log_username','Username','required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('log_password','Password','required|callback_login_post');
		if($this->form_validation->run() != FALSE){
			// $this->load->view('index');
			// $this->load->view('footer');
			redirect(base_url(),'refresh');
		}else{
			$data['message_login_error'] = "Please follow given form rules to login.";
			$this->load->view('login', $data);
			$this->load->view('footer');
		}
	}

	public function signup_validate(){

		$this->form_validation->set_rules('reg_username','Username','required|min_length[5]|max_length[15]|is_unique[users.username]');
		$this->form_validation->set_rules('reg_password','Password','required|min_length[5]|max_length[15]|matches[reg_confirm_password]');
		$this->form_validation->set_rules('reg_confirm_password','Confirm Password','required|min_length[5]|max_length[15]|matches[reg_password]');
		$this->form_validation->set_rules('reg_email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('reg_fullname','Fullname','required|min_length[5]|max_length[15]');
		if($this->form_validation->run()==FALSE){
			$data['message_registration_error'] = "Please follow given form rules to register.";
			$this->load->view('login', $data);
		}else{
			$username = $this->input->post('reg_username');
			$email = $this->input->post('reg_email');
			$password = $this->input->post('reg_password');
			if($this->user_model->registerUser($username, $email, $password)){
				$data['message_successfully_registered'] = "Congratulations, you have been successfully registered! :) ";
				$this->load->view('login', $data);
			}
			$this->load->view('footer');
		}
	}

	public function login_post(){
		$username = $this->input->post('log_username');
		$password = $this->input->post('log_password');
		$result = $this->user_model->validate_user($username, $password);

		if($result){
			$sess_array =  array();
			foreach($result as $row){
				// set session 
				$sess_array = array('username'=>$row->username, 'email'=>$row->email);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}
		else{
			$this->form_validation->set_message('login_post', 'Username/password not matching!');
			return false;
		}
	}

	public function logout(){
		//remove all session data
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$data['msg_logged_out'] = "You have successfully logged out.";
		$this->load->view('login',$data);
		$this->load->view('footer');
	}

	public function send_email_validate(){
		$this->form_validation->set_rules('sender_name','Fullname','required|max_length[20]');
		$this->form_validation->set_rules('sender_email','Email','required|valid_email');
		$this->form_validation->set_rules('email_subject','Message Subject','required|max_length[40]');
		$this->form_validation->set_rules('email_message','Message','required|min_length[15]');
		if($this->form_validation->run() == false){
			$data['msg_send_failed'] = "Please follow the form rule to send email appropriately.";
			$this->load->view('contact', $data);
		}else{
			$data['msg_send_success'] = "Your message has been sent successfully. We will get back to you ASAP!";
			$this->email->from(set_value('sender_email'), set_value('sender_name'));
			$this->email->to('iamsarthakjoshi@gmail.com');
			$this->email->subject(set_value('email_subject'));
			$this->email->message(set_value('email_message'));
			$this->email->send();
			// echo $this->email->print_debugger();
			$this->load->view('contact', $data);
		}
		$this->load->view('footer');
	}
}
