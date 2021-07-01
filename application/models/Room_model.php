<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class room_model extends CI_Model {
    
        public function tampilData(){
            $this->db->select('room.*,statusRoom.status');
            $this->db->from('room');
            $this->db->join('statusRoom', 'room.id = statusRoom.id_room');
            $value = $this->db->get();
            
            return $value->result();
        }

        public function tampilDataGroup(){
            $this->db->group_by('name');
            $this->db->order_by('id');
            
            return $this->db->get('room')->result();
        }    

        public function getDataById($id){ $this->db->select('room.*,statusRoom.status');
            $this->db->from('room');
            $this->db->join('statusRoom', 'room.id = statusRoom.id_room');
            $this->db->where('room.id', $id);
            
            $value = $this->db->get();
            return $value->row_array();
        }
    
        
        public function tambahData($upload)
        {
            $data = array(
                'name' => $this->input->post('varName',true),
                'people' => $this->input->post('people', true),
                'type' => $this->input->post('type', true),
                'service' => $this->input->post('service', true),
                'price' => $this->input->post('price', true),
                'desc' => $this->input->post('desc', true),
                'image' => $upload['file']['file_name'],
            );
            $this->db->insert('room', $data);
        }

        public function upload(){    
            $config['upload_path'] = './uploads/rooms/';    
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
            return $this->db->delete('room',array('id' => $id));
        }
        public function hapusstatus($id){
            return $this->db->delete('statusroom',array('id_room' => $id));
        }
        private function hapusDataImage($id)
        {
            $room = $this->getDataById($id);
            $filename = $room['image'];
            unlink(FCPATH."uploads/rooms/".$filename);
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
                'people' => $this->input->post('people', true),
                'type' => $this->input->post('type', true),
                'service' => $this->input->post('service', true),
                'price' => $this->input->post('price', true),
                'desc' => $this->input->post('desc', true),
                'image' => $uploads,
            );
            $statusEdit = array('status'=>$this->input->post('status', true));

            $this->db->where('id_Room', $this->input->post('id'));
            $this->db->update('statusRoom', $statusEdit);

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('room', $data);
            }

        
            public function getDataService(){
                $this->db->order_by('id', 'desc');
                return $this->db->get('packageservice')->result();
        
            }

    }
    
    /* End of file room_model.php */
    
?>