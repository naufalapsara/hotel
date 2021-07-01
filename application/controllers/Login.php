<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Login extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('login_model');
      
    }
    
  
    public function index()
    {
      $this->load->view('login/header');
      $this->load->view('login/index');
      $this->load->view('login/footer');
    }
    public function proses_login(){
      $username = htmlspecialchars($this->input->post('username'));
      $password = htmlspecialchars($this->input->post('password'));
      $cek_login = $this->login_model->login($username,$password);
      if ($cek_login) {
        foreach ($cek_login as $row) {
            $this->session->set_userdata('user', $row->username);
            
            if (!empty($this->session->userdata('user'))) {
              redirect('admin/room');
            } else {
              redirect('login');
            }
        }
    }else{
        $this->session->set_flashdata('message', 'Username and password not match.');
        redirect('login');
    }
    }
    public function logout(){
      $this->session->sess_destroy();
      redirect('login','refresh');
    }
  
  }
  
  /* End of file Login.php */
  
?>