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
            $data['rooms'] = $this->order_model->tampilDataGroup();
            $data['roomsInput'] = $this->order_model->tampilDataGroup();
            $data['services'] = $this->order_model->getDataService();
            $this->load->view('user/template/header');
            $this->load->view('user/order/index',$data);
            $this->load->view('user/order/room',$data);
            $this->load->view('user/order/order',$data);
            $this->load->view('user/template/footer');
        }

        public function listAvailable(){
            $roomName = $this->input->post('roomName');
            $status = $this->order_model->dataKamar($roomName);
            $lists = "<option value=''>Room Number</option>";

            foreach($status as $data){
                $lists .= "<option value='".$data->id."'>".$data->id."</option>";
            }
            
            $callback = array('list_status'=>$lists);
            echo json_encode($callback);
        }

        public function tambah(){
            $this->order_model->tambahDataOrder();
                      redirect('user/order','refresh');
        }
    
    }
    /* End of file Order.php */
?>