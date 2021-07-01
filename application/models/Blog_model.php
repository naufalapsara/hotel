<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog_model extends CI_Model {
    
      public function cariDataBlog(){
        $keyword = $this->input->post("keyword");
        $this->db->like('title',$keyword);
        $this->db->or_like('date',$keyword);
        $this->db->or_like('author',$keyword);
        return $this->db->get('blog') -> result();
      }

      public function tampilData(){
        $value = $this->db->get('blog')->result();
        return $value;
      }
      
      public function getDataById($id){
        return $this->db->get_where('blog',array('id'=>$id))->row_array();
      }

      public function hapusData($id){
        $this->hapusDataImage($id);
        return $this->db->delete('blog',array('id' => $id));
        
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
          'title' => $this->input->post('title',true),
          'desc' => $this->input->post('desc', true),
          'date' => $this->input->post('date', true),
          'author' => $this->input->post('author', true),
          'view' => $this->input->post('view', true),
          'image' => $uploads,
      );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('blog', $data);
      }

      public function tambahData($upload)
        {
            $data = array(
                'title' => $this->input->post('title',true),
                'desc' => $this->input->post('desc', true),
                'date' => $this->input->post('date', true),
                'author' => $this->input->post('author', true),
                'view' => $this->input->post('view', true),
                'image' => $upload['file']['file_name'],
            );

            $this->db->insert('blog', $data);
        }

        public function upload(){    
          $config['upload_path'] = './uploads/blogs/';    
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

      

    private function hapusDataImage($id)
    {
        $blog = $this->getDataById($id);
        $filename = $blog['image'];
        unlink(FCPATH."uploads/blogs/".$filename);
    }

    }
    
    /* End of file blog_model.php */
    
?>