<?php
class m_sp extends CI_Model{
     public function __construct(){
         parent::__construct();
         $this->sp = 'service_provider';
     }
     public function insert($data){
        $sp_id=$data['id'];
        $sp_name=$data['name'];
        $sp_tel=$data['tel'];
        $sp_email=$data['email'];
        $sp_aptitude=$data['aptitude'];
        $sp_address=$data['address'];
        $sp_picture=$data['picture'];
        $sp_bankname=$data['bankname'];
        $sp_banknumber=$data['banknumber'];
        $sp_vaccine=$data['vaccine'];
        $sp_user=$data['username'];
        $sp_pass=$data['password'];
        $aptitude = implode(",",$sp_aptitude);

        $sql = "insert into service_provider value('$sp_id','$sp_name','$sp_tel','$sp_email','$sp_aptitude',
        '$sp_address','$sp_picture','$sp_bankname','$sp_banknumber','$sp_vaccine','$aptitude',
        $sp_user,'$sp_pass')";
        $qr = $this->db->query($sql);
        return true;
        }
     public function all(){
        $sql = "select * from service_provider";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function delete($sp_id){
        $sql = "delete from service_provider where sp_id='$sp_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function edit($sp_id){
        $sql = "select * from service_provider where sp_id='$sp_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function update($data){
        $sp_id=$data['id'];
        $sp_name=$data['name'];
        $sp_tel=$data['tel'];
        $sp_email=$data['email'];
        $sp_aptitude=$data['aptitude'];
        $sp_address=$data['address'];
        $sp_picture=$data['picture'];
        $sp_bankname=$data['bankname'];
        $sp_banknumber=$data['banknumber'];
        $sp_vaccine=$data['vaccine'];
        $sp_user=$data['username'];
        $sp_pass=$data['password'];
        $aptitude = implode(",",$sp_aptitude);

        $sql = "update service_provider set sp_tel='$sp_tel',
        sp_name='$sp_name',sp_email='$sp_email', sp_address='$sp_address' ,sp_user='$sp_user',sp_pass='$sp_pass',
        sp_bankname='$sp_bankname',sp_banknumber='$sp_banknumber',sp_picture='$sp_picture',sp_vaccine='$sp_vaccine',
        sp_aptitude='$aptitude'
        where sp_id='$sp_id'";
        $qr = $this->db->query($sql);
        return true;
     } 

     public function getRows($sp_id = '')
     {
         $this->db->select('*');
         $this->db->from($this->sp);
         
 
         if ($sp_id) {
             $this->db->where('sp_id', $sp_id);
             $query = $this->db->get();
             $result = $query->row_array();
         } else {
             $this->db->order_by('sp_name', 'ASC');
             $query = $this->db->get();
             $result = $query->result_array();
         }
 
         // Return fetched data
         return !empty($result) ? $result : false;
     }
 



    }
