<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Register extends CI_Controller {

    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('register_model');
      
    }
    
  
    public function index()
    {
      $code = $this->input->post('varRef');
      $allData = $this->register_model->refCode();
      foreach($allData as $data){
        if($code == $data->refCode){          
          redirect('register/register');
        }else{    
          redirect('register');
        }
      }
      $this->load->view('register/header');
      $this->load->view('register/index');
      $this->load->view('register/footer'); 
    }

    public function register(){
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('refCode', 'Reference Code', 'required');
      if ($this->form_validation->run() == FALSE) {    
          $this->load->view('register/header');
          $this->load->view('register/register');
          $this->load->view('register/footer');
      } else {
          $this->register_model->register();
          $this->session->set_flashdata('pesan','If you want to actived your account you can call your HRD :)');
          redirect('login');
      }
    }
  
  }
  
  /* End of file Register.php */
  
?>