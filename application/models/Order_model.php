<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class order_model extends CI_Model {
    
      public function tampilData(){
          return $this->db->get('orders')->result();
      }
      

      public function getDataById($id){
        $this->db->select('orders.date,orders.total,customer.name as cn,customer.address,customer.telephone,packageservice.*,room.name as rn,room.type,room.id as ri');
        $this->db->from('orders');
        $this->db->join('customer', 'orders.idCust = customer.id');
        $this->db->join('packageservice', 'orders.idService = packageservice.id');
        $this->db->join('room', 'orders.idRoom = room.id');
        $this->db->where('orders.id', $id);
      
        return $this->db->get()->result();  
      }

      public function getDataByIdEdit($id){
        return $this->db->get_where('orders',array('id'=>$id))->row_array();
      }

      public function getDataService(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('packageservice')->result();
      }

      public function tampilDataGroup(){
        $this->db->group_by('name');
        $this->db->order_by('id');
        return $this->db->get('room')->result();
      }
      
      public function dataKamar($name){
        $this->db->select('room.*,statusRoom.status');
        $this->db->from('room');
        $this->db->join('statusRoom', 'room.id = statusRoom.id_room');
        $this->db->where(array('statusRoom.status'=>'Available','room.name' => $name));  
      
        $query = $this->db->get()->result();
        return $query;
    }  


    public function tambahDataOrder(){       
        $data2 = array(
          'id' => $this->input->post('custId'),
          'name' => $this->input->post('custName'),
          'address' => $this->input->post('custAdd'),
          'telephone'=> $this->input->post('custTelp')
        );
        $this->db->insert('customer', $data2);

        $data = array(
          'idCust' => $this->input->post('custId'),
          'idRoom' => $this->input->post('roomNumber'),
          'idService' => $this->input->post('service'),
          'date' => $this->input->post('dateOrder')
        );
        $this->db->insert('orders', $data);
        $dataTotal = $this->db->query(
          'SELECT t1.*,t2.price,t3.price, sum(t2.price + t3.price) as subtotal from orders t1 join room t2 on t1.idRoom = t2.id join packageservice t3 on t1.idService = t3.id  group by t1.id order by t1.id desc limit 1'
        )->result();;
          foreach($dataTotal as $st){
            $subt = $st->subtotal;
            $idOrd = $st->id; 
          }
          $this->db->where('id', $idOrd);
          $this->db->update('orders', array('total' => $subt));
          
          
          $this->db->where('id_room', $data['idRoom']);
          $this->db->update('statusRoom', array('status' => 'Not Available'));

    }



      


      public function editData($id){
        $data = array(
          'date' => $this->input->post('date',true),
      );
      $this->db->where('id',$id);
      $this->db->update('orders', $data);
      }

      public function hapusData($id){
        return $this->db->delete('orders',array('id' => $id));
    }


    }
    
    /* End of file order_model.php */
    
?>