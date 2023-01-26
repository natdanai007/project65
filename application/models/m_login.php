<?php
class m_login extends CI_Model{
public function __construct(){
parent::__construct();
}
public function login($data){
$cus_user = $data['username'];
$cus_pass = $data['password'];
$sql = "select * from customer where cus_user='$cus_user'
and cus_pass ='$cus_pass'";
$qr = $this->db->query($sql);
return $qr->result();
}
}
?>