<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Chart extends CI_Controller {
        public function index()
        {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/chart/index');
            $this->load->view('admin/template/footer');
            
        }
    
    }
    
    /* End of file Chart.php */
    
?>