<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/form_login.css" rel="stylesheet" >

<title>หน้าเข้าสู่ระบบ</title>
</head>
<main>
    <body>
	<div class="navbar">
   <a href="pagelogin">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png"></a>
      
</div><br><br><br><br><br><br><br>
<script>
    
</script>
    
<center>
<img id="pic7" src="<?php echo base_url(); ?>img/img2.png">
</center>
<form style="background-color:transparent" method="post" action="authen">

<div id="pic2">
<h1>เข้าสู่ระบบ</h1>

<br>
<div id="line"> </div>
<br>

<input placeholder="ชื่อผู้ใช้"type="text" name="username"><br><br>
<font color="red"><?php echo form_error('username'); ?></font>

<input placeholder="รหัสผ่าน"type="password" name="password"><br>
<font color="red"><?php echo form_error('password'); ?></font><br>
<center>
<button id="btnlogin" type="submit">เข้าสู่ระบบ</button>
</center>
<br>
<div id="line"> </div>
<br>
<center>
<footer>ยังไม่เป็นสมาชิก <a href="form_register">สมัครสมาชิก</a></footer>
</center>

</form>
</div>
    </body>

</main>
</html>
