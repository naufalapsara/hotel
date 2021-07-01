<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class admin_model extends CI_Model {
  
    public function tampilData(){
      return $this->db->get('admin')->result();
    }

    public function setActive($id){
      $data=array('status' => 'Active');
      $this->db->where('id', $id);
      $this->db->update('admin', $data);  
    }

    public function setDisactive($id){
      $data=array('status' => 'Not Active');
      $this->db->where('id', $id);
      $this->db->update('admin', $data);  
    }

    public function editData($id){
      $data = array(
        'username' => $this->input->post('username',true),
        'password' => $this->input->post('password',true),
        'refCode' => $this->input->post('refCode',true),  
      );
      $this->db->where('id', $id);
      $this->db->update('admin', $data);      
    }

    public function getDataByIdEdit($id){
      return $this->db->get_where('admin',array('id'=>$id))->row_array();
    }
  
    public function getDataById($id){
      return $this->db->get_where('admin',array('id'=>$id))->result();
    }

    public function deletData($id){
      $this->db->where('id', $id);
      return $this->db->delete('admin');
      
    }
  }
  
  /* End of file admin_model.php */
  
?>