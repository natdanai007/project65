
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
<link href="<?php echo base_url();?>CSS/form_customer.css" rel="stylesheet" >
<title>หน้าเข้าสู่ระบบ</title>
</head>
<main>
    <body>
	
</div>
<script>

</script>
    <form action="form_validationcus" method="post" style="background-color:transparent" >
<h1>เพิ่มลูกค้า</h1>
<div>
<div>
<label for="id">เลขบัตรประชาชน:</label>
<input type="text" name="id" id="id">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="name">ชื่อ-นามสกุล:</label>
<input type="text" name="name" id="name">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="tel">เบอร์โทร:</label>
<input type="text" name="tel" id="tel">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="email">อีเมลล์:</label>
<input type="text" name="email" id="email">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="address">ที่อยู่</label>
<input type="text" name="address" id="address">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
<div>
<label for="username">Username:</label>
<input type="text" name="username" id="username">
<font color="red"><?php echo form_error('username'); ?></font>
</div>
<div>
<label for="password">Password:</label>
<input type="password" name="password" id="password">
<font color="red"><?php echo form_error('password'); ?></font>
</div>
<br>
<button type="submit" style="background-color:transparent;color:black;">เพิ่มลูกค้า</button>
<button type="reset">รีเซ็ต</button>

<br>
</form>
    </body>

</main>
</html>
