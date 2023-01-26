<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
  
    body{
        font-family: 'Prompt', sans-serif;
    }
    table{
        margin:auto;
        margin-top:240px;
        
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
</style>
</head>
<body style ="background-color: #474641;">
<div class="navbar">
<a href ="#">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</a>
<div id ="boxlogout">
<a id ="logout" href="adminlogin">ออกจากระบบ</a>
</div>
<div id = "welcome">
  <?php 
            if(isset($this->session->userdata['username'])){
            $ad_user = $this->session->userdata['username'];
            $ad_name = $this->session->userdata['name'];
            }
            ?>
            <a href="#">สวัสดีคุณ<?php echo $ad_name;?></a> 
        </div>
        <div id ="all">
      <a href="form_tablesystem">ข้อมูลระบบ</a>
      <a href="datacustomer">ข้อมูลลูกค้า</a>
      <a href="main">ข้อมูลผู้ดูแลระบบ</a>
      <a href="form_tablesp">ข้อมูลผู้ให้บริการ</a>
          </div>

<main >
<table class="table table-blue" style="width:60%">
<tr>
    <th>เลขบัตรประชาชน</th>
    <th>ชื่อ-สกุล</th>
    <th>เบอร์โทร</th>
    <th>อีเมลล์</th>
    <th>ที่อยู่</th>
    <th>ชื่อผู้ใช้</th>
    <th>จัดการ</th>
    <th><a href='insertcus'>[เพิ่มลูกค้า]</a></th>
</tr>
<?php
foreach($customer as $row){
?>
<tr>
    <td><?php echo $row->cus_id; ?></td>
    <td><?php echo $row->cus_name; ?></td>
    <td><?php echo $row->cus_tel; ?></td>
    <td><?php echo $row->cus_email; ?></td>
    <td><?php echo $row->cus_address; ?></td>
    <td><?php echo $row->cus_user; ?></td>
 
   
    <td>
        
    <a href='cus_edit?cus_id=<?php echo $row->cus_id; ?>'>[แก้ไข]</a>

    <br><a href='cus_delete?cus_id=<?php echo $row->cus_id; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">[ลบ]</a>
    </td>
    </tr>
    <?php
    }
    ?>
</table>
<div id = logout>
<b><a href="pageadmin" ' onclick="return confirm('ต้องกลับไปยังหน้าหลัก?')">กลับ</b>
</div>

</main>
</body>
</html>