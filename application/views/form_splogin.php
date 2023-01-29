<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/form_splogin.css" rel="stylesheet" >
<title>หน้าเข้าสู่ระบบ</title>
</head>
<main>
    <body>
	<div class="navbar">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</div><br><br><br><br><br><br><br>
<script>
    
</script>
    
<center>
<img id="pic7" src="<?php echo base_url(); ?>img/img2.png">
</center>
<form style="background-color:transparent" method="post" action="form_splogin">

<div id="pic2">
	
<h1>เข้าสู่ระบบผู้ให้บริการ</h1>

<br>
<div id="line"> </div>
<br>
<input placeholder="ชื่อผู้ใช้"type="text" name="username"><br><br>
<font color="red"><?php echo form_error('username'); ?></font>
<input placeholder="รหัสผ่าน"type="password" name="password"><br><br>
<font color="red"><?php echo form_error('password'); ?></font><br>
<center>
<button id="btnsp"type="submit">เข้าสู่ระบบ</button>
</center>
<br>
<div id="line"> </div>
<br>
<center>
<footer>ยังไม่มีบัญชี <a href="form_spregister">สมัครงาน</a></footer>
</center>
</form>
    </body>

</main>
</html>
