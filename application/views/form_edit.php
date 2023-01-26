<?php
foreach($admin as $row){
    $ad_id=$row->ad_id;
    $ad_name=$row->ad_name;
    $ad_tel=$row->ad_tel;
    $ad_email=$row->ad_email;
    $ad_address=$row->ad_address;
    $ad_user=$row->ad_user;
    $ad_pass=$row->ad_pass;
    
 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
<style>
    
    form{
        position: absolute;
        left:43%;
        top:16%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
	button{
		border-color:transparent;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }


</style>
<title></title>
</head>

<body>
<main>



<form action="admin_update" method="post"style="background-color:transparent" >
<h1>แก้ไขข้อมูล</h1>
<div>
<label for="id" >เลขบัตรประชาชน :</label>
<input type="text" name="id" id="id"   value="<?php echo $ad_id; ?>">

</div><br>
<div>
<label for="name">ชื่อ-นามสกุล :</label>
<input type="text" name="name" id="name" value="<?php echo $ad_name; ?>">
</div><br>
<div>
<label for="tel">เบอร์โทร :</label>
<input type="text" name="tel" id="tel" value="<?php echo $ad_tel; ?>">
</div><br>
<div>
<label for="email">อีเมลล์:</label>
<input type="text" name="email" id="email" value="<?php echo $ad_email; ?>">
</div><br>
<div>
<label for="address">ที่อยู่:</label>
<input type="text" name="address" id="addresss" value="<?php echo $ad_address; ?>">
</div><br>
<div>
<label for="username">ชื่อผู้ใช้:</label>
<input type="text" name="username" id="username" value="<?php echo $ad_user; ?>">
</div><br>
<div>
<label for="password">รหัสผ่าน:</label>
<input type="password" name="password" id="password" value="<?php echo $ad_pass; ?>">
</div><br>
<div>
<br>
<button type="submit style="background-color:transparent;color:black;">แก้ไขข้อมูล</button> 
<button type="reset"  >รีเซ็ต</button>

</form>
</main>
</body>
</html>