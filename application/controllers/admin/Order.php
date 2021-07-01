<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('order_model');
        }
        

        public function index()
        {
            $data['orders'] = $this->order_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/order/index',$data);
            $this->load->view('admin/template/footer');
        }
        

        public function detail($id){
            $data['orders'] = $this->order_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/order/detail',$data);
            $this->load->view('admin/template/footer');
        }

        public function edit($id)
        {
            $data['order']=$this->order_model->getDataByIdEdit($id);
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/order/edit',$data);
                $this->load->view('admin/template/footer');
                
            } else {
                $this->order_model->editData($id);
                redirect('admin/order/');
                }
        }

        public function hapus($id){
            $this->order_model->hapusData($id);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('admin/order','refresh');     
        }
    
    }
    
    /* End of file Home.php */
    
?>