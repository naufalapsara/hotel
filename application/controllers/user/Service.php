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
            $data['packages'] = $this->service_model->tampilDataPaket();
            $this->load->view('user/template/header');
            $this->load->view('user/service/index');
            $this->load->view('user/service/content',$data);
            $this->load->view('user/template/footer');
        }
    
    }
    
    /* End of file Service.php */
    
?>