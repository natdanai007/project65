<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserSp extends CI_Model{
    function __construct() {
        $this->primaryKey = 'id';
        $this->tableName = 'service_provider';
    }
    public function insert($data){
        // print_r($$data[""sp_id""]);
        // $sp_id = $data["sp_id"];
        // $sp_name = $data["sp_name"];
        // $sp_tel = $data["sp_tel"];
        // $sp_email = $data["sp_email"];
        // $sp_address = $data["sp_address"];
        // $sp_picture = $data["sp_picture"];
        // $sp_bankname = $data["sp_bankname"];
        // $sp_banknumber = $data["sp_banknumber"];
        // $sp_vaccine = $data["sp_vaccine"];
        // $sp_aptitude = $data["sp_aptitude"];
        // $sp_user = $data["sp_user"];
        // $sp_pass = $data["sp_pass"];
        // $aptitude = implode(",",$sp_aptitude);

        // $sql = "insert into service_provider value('$sp_id','$sp_name','$sp_tel',
        // '$sp_email','$sp_address','$sp_picture','$sp_bankname','$sp_banknumber','$sp_vaccine','$aptitude','$sp_user','$sp_pass')";
        // $qr = $this->db->query($sql);
        // return true;

        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
     }
}