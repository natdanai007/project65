<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/form_adminlogin.css" rel="stylesheet" >
<center>
<img id="pic7" src="<?php echo base_url(); ?>img/img2.png">
</center>
<title>หน้าเข้าสู่ระบบ Admin</title>
</head>
<main>
    <body>
	
</div>
<script>


</script>
    <form style="background-color:transparent" method="post" action="form_adminlogin">
<div id="pic2">
<h1>เข้าสู่ระบบ</h1>
<br>
<div id="line"> </div>
<br>
<input placeholder="ชื่อผู้ใช้"type="text" name="username"><br><br>
<font color="red"><?php echo form_error('username'); ?></font>
<input placeholder="รหัสผ่าน"type="password" name="password"><br><br>
<font color="red"><?php echo form_error('password'); ?></font>
<div id="line"> </div>
<br>
<button id="btnadmin" type="submit">เข้าสู่ระบบ</button>



</form>
</div>
    </body>

</main>
</html>
