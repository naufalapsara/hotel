<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Admin extends CI_Controller {

    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('admin_model');
    }
    
  
    public function index()
    {
      $data['admins'] = $this->admin_model->tampilData();
      $this->load->view('admin/template/header');
      $this->load->view('admin/template/bar');
      $this->load->view('admin/admin/index',$data);
      $this->load->view('admin/template/footer');
    }

    public function hapus($id){
      $this->admin_model->deletData($id);
      
      redirect('admin/admin','refresh');
      
    }

    public function edit($id)
    {
        $data['admin']=$this->admin_model->getDataByIdEdit($id);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('refCode', 'Reference Code', 'required');
        if ($this->form_validation->run() == FALSE) {    
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/admin/edit',$data);
            $this->load->view('admin/template/footer');
            
        } else {
            $this->admin_model->editData($id);
            redirect('admin/admin');
            }
    }


    public function changeStatus($id){
      $cek = $this->admin_model->getDataById($id);
      foreach($cek as $c){
        if($c->status == 'Active'){
          $this->admin_model->setDisactive($id);
          redirect('admin/admin','refresh');
        }else{
          $this->admin_model->setActive($id);
          redirect('admin/admin','refresh');
        }
      }
    }
  
  }
  
  /* End of file Register.php */
  
?>