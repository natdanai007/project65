<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php echo base_url();?>CSS/form_pageadmin.css" rel="stylesheet" >

</head>
<body style ="background-color: #474641;">
<img id="greenspa" src="<?php echo base_url(); ?>img/greenspa.png">
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
            <a href="#">สวัสดีคุณ<?php echo $ad_name;?></a></a> 
        </div>
        <div id ="all">
      <a href="form_tablesystem">ข้อมูลระบบ</a>
      <a href="datacustomer">ข้อมูลลูกค้า</a>
      <a href="main">ข้อมูลผู้ดูแลระบบ</a>
      <a href="form_tablesp">ข้อมูลผู้ให้บริการ</a>
          </div>





</body>
</html>
