<?php
class m_spregister extends CI_Model{
public function __construct(){
parent::__construct();
}


public function insert($data){
$sp_id=$data['id'];
$sp_name=$data['name'];
$sp_tel=$data['tel'];
$sp_email=$data['email'];
$sp_address=$data['address'];
$sp_picture=$data['picture'];
$sp_card=$data['card'];
$sp_bankname=$data['bankname'];
$sp_banknumber=$data['banknumber'];
$sp_vaccine=$data['vaccine'];
$sp_aptitude=$data['aptitude'];
$sp_user=$data['username'];
$sp_pass=$data['password'];
$aptitude = implode(",",$sp_aptitude);


$sql = "insert into service_provider value('$sp_id','$sp_name','$sp_tel','$sp_email','$sp_address','$sp_picture'
,'$sp_card','$sp_bankname','$sp_banknumber','$sp_vaccine','$aptitude','$sp_user','$sp_pass')";
$qr = $this->db->query($sql);
return true;
}
public function select(){
    $sql = "select * from service_provider";
    $qr = $this->db->query($sql);
    return $qr->result();
    }
    
  

}
