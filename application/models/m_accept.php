<?php
class m_accept extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
    public function insert($data)
    {
        
        $accept_id = $data['id'];
        $accept_datetime = $data['datetime'];
        $reserve_id = $data['reserveid'];

 
        $sql = "insert into pay values(' $accept_id','$accept_datetime','$reserve_id')";
        $qr = $this->db->query($sql);
        return true;
   }

   public function select()
   {
       $sql = "select r.reserve_id , r.reserve_svname ,r.reserve_period, r.reserve_datetime ,r.reserve_address,r.reserve_price ,c.cus_name, c.cus_tel,s.sp_name 
       FROM reserve r , customer c , service_provider s WHERE r.cus_id = c.cus_id and r.sp_id = s.sp_id  ";
       $qr = $this->db->query($sql);
       return $qr->result();
   }


}
