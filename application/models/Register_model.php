<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class register_model extends CI_Model {

    public function register(){
        $data = array(
            'username' => $this->input->post('username',true),
            'password' => $this->input->post('password',true),
            'refCode' => $this->input->post('refCode',true),            
            'status' => 'Not Active',
        );
        $this->db->insert('admin', $data);
    }

    public function refCode(){
      $code = $this->input->post('varRef');
      $this->db->where(array('refCode'=>$code , 'status'=> 'Active'));
      return $this->db->get('admin')->result();
    }
  
  }
  
  /* End of file register_model.php */
  
?>