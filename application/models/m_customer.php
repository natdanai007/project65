<?php
class m_customer extends CI_Model{
     public function __construct(){
         parent::__construct();
     }
     public function insert($data){
        $cus_id=$data['id'];
        $cus_name=$data['name'];
        $cus_tel=$data['tel'];
        $cus_email=$data['email'];
        $cus_address=$data['address'];
        $cus_user=$data['username'];
        $cus_pass=$data['password'];
        $sql = "insert into customer value('$cus_id','$cus_name','$cus_tel','$cus_email','$cus_address','$cus_user','$cus_pass')";
        $qr = $this->db->query($sql);
        return true;
    }
     public function all(){
        $sql = "select * from customer";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function delete($cus_id){
        $sql = "delete from customer where cus_id='$cus_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function edit($cus_id){
        $sql = "select * from customer where cus_id='$cus_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function update($data){
        $cus_id=$data['id'];
        $cus_name=$data['name'];
        $cus_tel=$data['tel'];
        $cus_email=$data['email'];
        $cus_address=$data['address'];
        $cus_user=$data['username'];
        $cus_pass=$data['password'];
        $sql = "update customer set cus_tel='$cus_tel',
        cus_name='$cus_name',cus_email='$cus_email' ,cus_address='$cus_address' ,cus_user='$cus_user',cus_pass='$cus_pass' 
        where cus_id='$cus_id'";
        $qr = $this->db->query($sql);
        return true;
     } 
    }
?>