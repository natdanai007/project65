<?php
class m_register extends CI_Model{
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
public function select(){
$sql = "select * from customer";
$qr = $this->db->query($sql);
return $qr->result();
}
}
?>