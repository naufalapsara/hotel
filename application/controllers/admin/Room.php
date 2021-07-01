<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Room extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('room_model');            
        }
        

        public function index()
        {
            $data['rooms'] = $this->room_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/room/index',$data);
            $this->load->view('admin/template/footer');
        }

        public function tambah()
        {
            $this->form_validation->set_rules('varName', 'Name', 'required');
            $this->form_validation->set_rules('people', 'People', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('service', 'Service', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            $this->form_validation->set_rules('desc', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/room/tambah');
                $this->load->view('admin/template/footer');
            } else {
                $upload = $this->room_model->upload();
                if ($upload['result'] == 'success') {
                    $this->room_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Product added');
                    redirect('admin/room');
                }else{
                    echo $upload['error'];
                }       
            }
        }

        public function details($id){
            $data['room'] = $this->room_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/room/detail',$data);
            $this->load->view('admin/template/footer');
        }

        public function hapus($id){
            $this->room_model->hapusstatus($id);
            $this->room_model->hapusData($id);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('admin/room','refresh');     
        }

        public function edit($id)
        {
            $data['room']=$this->room_model->getDataById($id);
            $this->form_validation->set_rules('varName', 'Name', 'required');
            $this->form_validation->set_rules('people', 'People', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('service', 'Service', 'required');
            $this->form_validation->set_rules('desc', 'Description', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/room/edit',$data);
                $this->load->view('admin/template/footer');
                
            } else {
                if(isset($_POST['submit'])){
                    $filename = $this->input->post('tempImg');
                    if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ''){ 
                        $oldFile = $this->room_model->getDataById($id);
                        $upload = $this->room_model->upload();
                        $this->room_model->editData($upload,$id);
                        if($oldFile->image != null){
                            $filename = $oldFile['image'];
                            unlink(FCPATH."uploads/rooms/".$filename);   
                        }
                    }else{
                        $this->room_model->editData($filename,$id);
                    }
                    redirect('admin/room/');
                }
            }
        }

    }
    
    /* End of file Room.php */
    
?>