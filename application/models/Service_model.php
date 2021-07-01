<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class service_model extends CI_Model {
    
        public function tampilData(){
            return $this->db->get('service')->result();
        }

        public function tampilDataPaket(){
            $this->db->order_by('id');
            
            return $this->db->get('packageservice')->result();
        }
    
        public function getDataById($id){
            return $this->db->get_where('service',array('id'=>$id))->row_array();
        }
    
        
        public function tambahData($upload)
        {
            $data = array(
                'name' => $this->input->post('varName',true),
                'desc' => $this->input->post('desc', true),
                'image' => $upload['file']['file_name'],
            );
            $this->db->insert('service', $data);
        }

        public function upload(){    
            $config['upload_path'] = './uploads/services/';    
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('image')){
                $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
                return $return;
            }else{    
                $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
                return $return;   
            }  
        }

        public function hapusData($id){
            $this->hapusDataImage($id);
            return $this->db->delete('service',array('id' => $id));
        }

        private function hapusDataImage($id)
        {
            $service = $this->getDataById($id);
            $filename = $service['image'];
            unlink(FCPATH."uploads/services/".$filename);
        }

        public function editData($upload,$id){
            $uploads;
            if($upload > 0){
                $uploads = $upload['file']['file_name'];
            }
            else{
                $uploads = $this->input->post('tempImg');
            }
            $data = array(
                'name' => $this->input->post('varName',true),
                'desc' => $this->input->post('desc', true),
                'image' => $uploads,
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('service', $data);
            }
    }
    
    /* End of file Service.php */
    
?>