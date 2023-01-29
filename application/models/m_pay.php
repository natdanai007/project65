<?php
class m_pay extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function insert($data)
    {
        
        $pay_id = $data['id'];
        $pay_slip = $data['slip'];
        $pay_datetime = $data['datetime'];
        $pay_status = $data['status'];
        $reserve_id = $data['reserveid'];
        
 
        $sql = "insert into pay values('$pay_id','$pay_slip','$pay_datetime','$pay_status','$reserve_id')";
        $qr = $this->db->query($sql);
        return true;
   }
   public function select()
   {
       $sql = "select p.pay_id , p.pay_slip , p.pay_datetime 
       FROM pay p , reserve r  WHERE p.pay_id = r.reserve_id ";
       $qr = $this->db->query($sql);
       return $qr->result();
   }
   
}