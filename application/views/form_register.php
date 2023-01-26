<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"class="h-100">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<style>
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
     .mySlides {display:none;}
    form{
        position: absolute;
        left:43%;
        top:26%;
        
    }
	button{
		border-color:transparent;
    }
	#img{
		position: absolute;
        left:41%;
        top:8%;
	}
    h1{
		width: 305px;
        height: 60px;
        top: 359px;
        background: #726741;
        border-radius: 8px;
        text-align:center;
        padding-top: 20px;
        color: #ffffff;
	}
    #btnRegister{
    border: transparent;
    border-radius: 30px;
    background-color: #253937;
    color: white;
    width: 310px;
    height: 40px;
    font-size: 24px;
    }
    
    input{
        border: 1px solid rgba(0, 0, 0, 0.35);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 4px;
        height: 30px;
        width: 300px;
        font-size: 20px;
    }
    body{
        background-color: #F4F1EC;
    }
    #line{
        border-bottom: 1px solid;
        height: 2px;
        width: 305px;
    }
    #pic7{
        position: absolute;
        width: 735px;
        height: 240px;
        left: 636px;
        top: 57px;
    }
    
    
</style>
<title>หน้าสมัครสมาชิก</title>

</head>
<main>
    <body>
    <div class="navbar">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
	
</div>
<script>

</script>
<center>
<img id="pic7" src="<?php echo base_url(); ?>img/33.png">
</center>

    <form action="form_validation" method="post" style="background-color:transparent" >
<h1>สร้างบัญชี</h1>
<center>
<div>
<div>
<input placeholder="เลขบัตรประชาชน"type="text" name="id" id="id">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div><br>
<input placeholder="ชื่อ-นามสกุล"type="text" name="name" id="name">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div><br>
<input placeholder="เบอร์โทร"type="text" name="tel" id="tel">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div><br>
<input placeholder="อีเมลล์"type="text" name="email" id="email">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div><br>
<input placeholder="ที่อยู่"type="text" name="address" id="address">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div><br>
<input placeholder="ชื่อผู้ใช้งาน"type="text" name="username" id="username">
<font color="red"><?php echo form_error('username'); ?></font>
</div>
<div><br>
<input  placeholder="รหัสผ่าน"type="password" name="password" id="password">
<font color="red"><?php echo form_error('password'); ?></font>
</div>
<div><br>
<input placeholder="ยืนยันรหัสผ่าน"type="password" name="password2" id="password2">
<font color="red"><?php echo form_error('password2'); ?></font>
</div>
<div><br>
<button id="btnRegister" type="submit">สมัครสมาชิก</button>
<br>
<label for="agree">
<font color="red"><?php echo form_error('agree'); ?></font>
</label>
</center>
</div>
<br>
<div id="line"> </div>
<br>
<center>
<footer>เป็นสมาชิกอยู่แล้ว <a href="login">เข้าสู่ระบบ</a></footer>
</center>
</form>

    </body>

</main>
</html>
