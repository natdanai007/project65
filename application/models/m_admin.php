<?php
class m_admin extends CI_Model{
     public function __construct(){
         parent::__construct();
     }
     public function insert($data){
        $ad_id=$data['id'];
        $ad_name=$data['name'];
        $ad_tel=$data['tel'];
        $ad_email=$data['email'];
        $ad_address=$data['address'];
        $ad_user=$data['username'];
        $ad_pass=$data['password'];
        $sql = "insert into admin value('$ad_id','$ad_name','$ad_tel','$ad_email','$ad_address','$ad_user','$ad_pass')";
        $qr = $this->db->query($sql);
        return true;
    }
     public function all(){
        $sql = "select * from admin";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function delete($ad_id){
        $sql = "delete from admin where ad_id='$ad_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function edit($ad_id){
        $sql = "select * from admin where ad_id='$ad_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function update($data){
        $ad_id=$data['id'];
        $ad_name=$data['name'];
        $ad_tel=$data['tel'];
        $ad_email=$data['email'];
        $ad_address=$data['address'];
        $ad_user=$data['username'];
        $ad_pass=$data['password'];
        $sql = "update admin set ad_tel='$ad_tel',
        ad_name='$ad_name',ad_email='$ad_email' ,ad_address='$ad_address' ,ad_user='$ad_user',ad_pass='$ad_pass' 
        where ad_id='$ad_id'";
        $qr = $this->db->query($sql);
        return true;
     } 
    }
?>