<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
    //calling CI_Controller constructer
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('post_model');
    // check session
    if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      $data['email'] = $session_data['email'];
      $data['username'] = $session_data['username'];
      $this->load->view('header', $data);
    }else{
      $this->load->view('header');
    }
  }

  public function index(){
    $data['dropdownItems'] = listData('posts','id','title'); // using custom helper method listData
    $data['posts'] = $this->post_model->getPosts(); // call Post model method getPosts()
    $this->load->view('index', $data); // load the view file , pass $data array to view file
    $this->load->view('footer');
  }

	public function about(){
		$this->load->view('about');
    $this->load->view('footer');
	}

  public function contact(){
    $this->load->view('contact');
    $this->load->view('footer');
  }

  public function get_user_details(){
    $user_details = getUserDetails(1);
    $data['user_details'] = $user_details;

    $this->load->view('get_user_details', $data);
    $this->load->view('footer');
  }

  public function download_file(){
    $file_name = "issue.pdf";
    $data = file_get_contents(base_url().'assets/downloads/'.$file_name); // Read the file's contents
    $name = $file_name;

    if($this->session->has_userdata('logged_in')){
      force_download($name, $data);
    }else{
      echo "<script>alert('Please login to download the file.');</script>";
      $this->load->view('index');
      $this->load->view('footer');
    }
  }
}
