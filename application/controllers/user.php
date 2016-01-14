<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		//calling CI_Controller constructer
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$current_url = current_url();
		// var_dump($current_url);die;
		echo "Index function of user controller";
	}

	public function login(){
		//echo "login form";
		$data['list'] = "test from user controller";
    $this->load->view('login', $data);
	}

	public function login_post(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$result = $this->user_model->validate_user($username, $password);

		if($result){
			var_dump($result);
		}
		else{
			echo "username/ password error";
		}
	}
}
