<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"class="h-100">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>CSS/form_register.css" rel="stylesheet" >

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
