<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
<link href="<?php echo base_url();?>CSS/form_serviceprovider.css" rel="stylesheet" >

<title>หน้าผู้ให้บริการ</title>
</head>
<main>
    <body>
	
</div>
<script>

</script>
    <form action="form_validationserviceprovider" method="post" style="background-color:transparent" >
<h1>Sign Up</h1>
<div>
<div>
<label for="id">เลขบัตรประชาชน:</label>
<input type="text" name="id" id="id">
<font color="red"><?php echo form_error('id'); ?></font>
</div>
<div>
<label for="name">ชื่อ-นามสกุล:</label>
<input type="text" name="name" id="name">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="tel">เบอร์โทร:</label>
<input type="text" name="tel" id="tel">
<font color="red"><?php echo form_error('tel'); ?></font>
</div>
<div>
<label for="email">อีเมลล์:</label>
<input type="text" name="email" id="email">
<font color="red"><?php echo form_error('email'); ?></font>
</div>
<div>
<label for="address">ที่อยู่</label>
<input type="text" name="address" id="address">
<font color="red"><?php echo form_error('address'); ?></font>
</div>
<div>
<label for="picture">รูปภาพ:</label>
<input type="file" name="picture" id="picture">
<font color="red"><?php echo form_error('picture'); ?></font>
</div>
<div>
<label for="card">สำเนาบัตร:</label>
<input type="file" name="card" id="card">
<font color="red"><?php echo form_error('card'); ?></font>
</div>
<div>
<label for="vaccine">วัคซีน:</label>
<input type="text" name="vaccine" id="vaccine">
<font color="red"><?php echo form_error('vaccine'); ?></font>
</div>
<div>
<label for="banknumber">เลขบัญชีธนาคาร:</label>
<input type="text" name="banknumber" id="banknumber">
<font color="red"><?php echo form_error('banknumber'); ?></font>
</div>
<div>
<label for="username">ชื่อผู้ใช้:</label>
<input type="text" name="username" id="username">
<font color="red"><?php echo form_error('username'); ?></font>
</div>
<div>
<label for="password">รหัสผ่าน:</label>
<input type="password" name="password" id="password">
<font color="red"><?php echo form_error('password'); ?></font>
</div>
<div>
<label for="password2">ยืนยันรหัสผ่าน:</label>
<input type="password" name="password2" id="password2">
<font color="red"><?php echo form_error('password2'); ?></font>
</div>
<div>
<br>

<font color="red"><?php echo form_error('agree'); ?></font>
</label>
</div>
<br>
<button type="submit" style="background-color:transparent;color:black;">สมัครงาน</button>
<br>
<footer>มีบัญชีผู้ใช้อยู่แล้ว? <a href="splogin">ล็อคอิน</a></footer>

</form>
    </body>

</main>
</html>
