<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Service extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('service_model');
        }
        

        public function index()
        {
            $data['services'] = $this->service_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/service/index',$data);
            $this->load->view('admin/template/footer');
        }

        public function tambah()
        {
            $this->form_validation->set_rules('varName', 'Name', 'required');
            $this->form_validation->set_rules('desc', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/service/tambah');
                $this->load->view('admin/template/footer');
            } else {
                $upload = $this->service_model->upload();
                if ($upload['result'] == 'success') {
                    $this->service_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Product added');
                    redirect('admin/service');
                }else{
                    echo $upload['error'];
                }       
            }
        }

        public function detail($id){
            $data['service'] = $this->service_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/service/detail',$data);
            $this->load->view('admin/template/footer');
        }
        public function hapus($id){
            $this->service_model->hapusData($id);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('admin/service','refresh');     
        }
        public function edit($id)
        {
            $data['service']=$this->service_model->getDataById($id);
            $this->form_validation->set_rules('varName', 'Name', 'required');
            $this->form_validation->set_rules('desc', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/service/edit',$data);
                $this->load->view('admin/template/footer');
                
            } else {
                if(isset($_POST['submit'])){
                    $filename = $this->input->post('tempImg');
                    if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ''){ 
                        $oldFile = $this->service_model->getDataById($id);
                        $upload = $this->service_model->upload();
                        $this->service_model->editData($upload,$id);
                        if($oldFile->image != null){
                            $filename = $oldFile['image'];
                            unlink(FCPATH."uploads/services/".$filename);   
                        }
                    }else{
                        $this->service_model->editData($filename,$id);
                    }
                    redirect('admin/service/');
                }
            }
        }
    
    }
    
    /* End of file Service.php */
    
?>