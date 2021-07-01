<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class About extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/template/header');
            $this->load->view('user/about/index');
            $this->load->view('user/about/video');
            $this->load->view('user/about/text');
            $this->load->view('user/template/footer');
        }
    }
    
    /* End of file About.php */
    
?>