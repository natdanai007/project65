<?php
foreach($customer as $row){
    $cus_id=$row->cus_id;
    $cus_name=$row->cus_name;
    $cus_tel=$row->cus_tel;
    $cus_email=$row->cus_email;
    $cus_address=$row->cus_address;
    $cus_user=$row->cus_user;
    $cus_pass=$row->cus_pass;
    
 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
<link href="<?php echo base_url();?>CSS/form_cusedit.css" rel="stylesheet" >
<title></title>
</head>

<body>
<main>



<form action="cus_update" method="post"style="background-color:transparent" >
<h1>แก้ไขข้อมูล</h1>
<div>
<label for="id" >เลขบัตรประชาชน :</label>
<input type="text" name="id" id="id"   value="<?php echo $cus_id; ?>">
</div><br>
<div>
<label for="name">ชื่อ-นามสกุล :</label>
<input type="text" name="name" id="name" value="<?php echo $cus_name; ?>">
</div><br>
<div>
<label for="tel">เบอร์โทร :</label>
<input type="text" name="tel" id="tel" value="<?php echo $cus_tel; ?>">
</div><br>
<div>
<label for="email">อีเมลล์:</label>
<input type="text" name="email" id="email" value="<?php echo $cus_email; ?>">
</div><br>
<div>
<label for="address">ที่อยู่:</label>
<input type="text" name="address" id="addresss" value="<?php echo $cus_address; ?>">
</div><br>
<div>
<label for="username">ชื่อผู้ใช้:</label>
<input type="text" name="username" id="username" value="<?php echo $cus_user; ?>">
</div><br>
<div>
<label for="password">รหัสผ่าน:</label>
<input type="password" name="password" id="password" value="<?php echo $cus_pass; ?>">
</div><br>
<div>
<br>
<button type="submit style="background-color:transparent;color:black;">แก้ไขข้อมูล</button> 
<button type="reset"  >รีเซ็ต</button>

</form>
</main>
</body>
</html>