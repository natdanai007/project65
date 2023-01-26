<?php
class m_system extends CI_Model{
     public function __construct(){
         parent::__construct();
     }
     public function insert($data){
        $st_name=$data['name'];
        $st_address=$data['address'];
        $st_tel=$data['tel'];
        $st_email=$data['email'];
        $st_account=$data['account'];
        $st_bank=$data['bank'];
        $st_manage=$data['manage'];
        $sql = "insert into system value('$st_name','$st_address','$st_tel','$st_email','$st_account','$st_bank','$sp_manage')";
        $qr = $this->db->query($sql);
        return true;
        }
     public function all(){
        $sql = "select * from system";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function delete($st_name){
        $sql = "delete from system where st_name='$st_name'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function edit($st_name){
        $sql = "select * from system where st_name='$st_name'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function update($data){
        $st_name=$data['name'];
        $st_address=$data['address'];
        $st_tel=$data['tel'];
        $st_email=$data['email'];
        $st_account=$data['account'];
        $st_bank=$data['bank'];
        $st_manage=$data['manage'];
        $sql = "update system set st_tel='$st_tel',
        st_address='$st_address' ,st_email='$st_email',st_account='$st_account',st_bank='$st_bank',st_manage='$st_manage'
        where st_name='$st_name'";
        $qr = $this->db->query($sql);
        return true;
     } 
    }
?>