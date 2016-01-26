<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('post_model');

    if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      $data['email'] = $session_data['email'];
      $data['username'] = $session_data['username'];
      $this->load->view('header', $data);
    }else{
      redirect(base_url(), 'refresh');
    }
  }

  public function index(){
    if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
      if($session_data['username'] == "admin"){
        $this->load->view('add_post');
        $this->load->view('footer');
      }else{
        redirect(base_url(), 'refresh');
      }
    }
  }

  public function addPost(){
    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('content','Content','required');
    $title = $this->input->post('title');
    $content = $this->input->post('content');

    $config['upload_path'] = './assets/img/post_Images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['max_size']	= '100';
    $config['max_width'] = '700';
    $config['max_height'] = '300';

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if($this->form_validation->run() != FALSE && $this->upload->do_upload('image')){
        $image = $this->upload->file_name;
      if($result = $this->post_model->insertPost($title, $content, $image)){
        $data['addpost_success']="Post inserted successfully!";
        $this->load->view('header');
        $this->load->view('add_post', $data);
        $this->load->view('footer');
      }
    }else{
      $data = array('error' => $this->upload->display_errors());
      $data['addpost_fail']="Post inserted failed!";
      $this->load->view('header');
      $this->load->view('add_post', $data);
      $this->load->view('footer');
    }
  }
}

?>
