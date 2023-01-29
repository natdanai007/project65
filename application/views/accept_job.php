<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
  body{
        font-family: 'Prompt', sans-serif;
    }
#welcome{
  position: absolute;
width: 275px;
height: 90px;
margin-left: 1490px;
margin-top: 10px;
color: white;
}

  .navbar {
  position: absolute;
  width: 1920px;
  height: 70px;
  left: 0px;
  top: 0px;
  background: #726741; 
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  }
  
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  

  #pic1{
  position: absolute;
  width: 275px;
  height: 90px;
  left: 35px;
  top: -8px;
  }

#all{
  position: absolute;
  margin-left: 280px;
  margin-top: 10px;
}
#logout{
position: absolute;
width: 100px;
height: 19px;
margin-left: -12px;
margin-top: -4px;
font-family: 'Roboto';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 19px;
/* identical to box height */
color: #726741;
}
#boxlogout{
box-sizing: border-box;
position: absolute;
width: 110px;
height: 41px;
margin-left: 1750px;
top: 15px;

background: #FFFFFF;
border: 1px solid rgba(0, 0, 0, 0.25);
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
}
#greenspa{
  position: absolute;
width: 986px;
height: 500px;
margin-top:250px;
margin-left:450px;


}
table{
        margin:auto;
        margin-top:240px;
        
    }
</style>
</head>
<body >
<div class="navbar">
<a href ="#">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</a>
<div id ="boxlogout">
<a id ="logout" href="splogin">ออกจากระบบ</a>
</div>
<div id="welcome">
      <?php
      if (isset($this->session->userdata['spusername'])) {
        $sp_user = $this->session->userdata['spusername'];
        $sp_name = $this->session->userdata['spname'];
      }
      ?>
      <a href="#">สวัสดีคุณ<?php echo $sp_name; ?></a></a>
        </div>
        <div id ="all">
      <a href="accept_job">การจองของลูกค้า</a>
     
          </div>


          <main >
    
    <table class="table table-blue" style="width:100%">
    <tr>
        <th>รหัสจองคิว</th>
        <th>ชื่อบริการ</th>
        <th>ระยะเวลา</th>
        <th>วันที่/เวลา</th>
        <th>ที่อยู่</th>
        <th>ชื่อลูกค้า</th>
        <th>เบอร์โทร</th>
        <th>ชื่อผู้ให้บริการ</th>

        <th>จัดการ</th>
        
    </tr>
    <?php
foreach ($reserve as $row) {
    $reserve_id = $row->reserve_id;
    $reserve_svname = $row->reserve_svname;
    $reserve_period = $row->reserve_period;
    $reserve_datetime = $row->reserve_datetime;
    $reserve_address = $row->reserve_address;
    $cus_name = $row->cus_name;
    $cus_tel= $row->cus_tel;
    $sp_name= $row->sp_name;
}
?>        
    <tr>
        <td><?php echo $row->reserve_id; ?></td>
        <td><?php echo $row->reserve_svname ; ?></td>
        <td><?php echo $row->reserve_period; ?></td>
        <td><?php echo $row->reserve_datetime; ?></td>
        <td><?php echo $row->reserve_address; ?></td>
        <td><?php echo $row->cus_name; ?></td>
        <td><?php echo $row->cus_tel; ?></td>

        <td><?php echo $row->sp_name; ?></td>

        <td>
    
        <a href='sp_edit?sp_id=<?php echo $row->sp_id; ?>'>[รับงาน]</a>
        <br><a href='sp_delete?sp_id=<?php echo $row->sp_id; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">[ลบ]</a>
        
        </td>
        </tr>
      
    </table>
    <div id = logout>
    <b><a href="pageadmin" ' onclick="return confirm('ต้องกลับไปยังหน้าหลัก?')">กลับ</b>
    </div>
    
    </main>


</body>
</html>
