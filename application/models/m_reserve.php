<?php
class m_reserve extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data){
        $reserve_id = $data['id'];
        $reserve_svname = $data['svname'];
        $reserve_period = $data['period'];
        $reserve_datetime = $data['datetime'];
        $reserve_address = $data['address'];
        $reserve_price= $data['total'];
        $cus_id = $data['cusid'];
        $sp_id = $data['spid'];
        $service = implode(",",$reserve_svname);


    
      
        $sql = "insert into reserve value('$reserve_id','$service','$reserve_period','$reserve_datetime','$reserve_address','$reserve_price','$cus_id','$sp_id')";
        $qr = $this->db->query($sql);   
        return true;
    }

    public function select()
    {
        $sql = "select r.reserve_id , r.reserve_svname ,r.reserve_period, r.reserve_datetime ,r.reserve_address,r.reserve_price ,c.cus_name, c.cus_tel,s.sp_name 
        FROM reserve r , customer c , service_provider s WHERE r.cus_id = c.cus_id and r.sp_id = s.sp_id";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
}
