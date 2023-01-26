<?php
class m_splogin extends CI_Model{
public function __construct(){
parent::__construct();
}
public function splogin($data){
$sp_user = $data['username'];
$sp_pass = $data['password'];
$sql = "select * from service_provider where sp_user='$sp_user'
and sp_pass ='$sp_pass'";
$qr = $this->db->query($sql);
return $qr->result();
}
}
?>