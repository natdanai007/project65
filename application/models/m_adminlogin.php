<?php
class m_adminlogin extends CI_Model{
public function __construct(){
parent::__construct();
}
public function adminlogin($data){
$ad_user = $data['username'];
$ad_pass = $data['password'];
$sql = "select * from admin where ad_user='$ad_user'
and ad_pass ='$ad_pass'";
$qr = $this->db->query($sql);
return $qr->result();
}
}
?>