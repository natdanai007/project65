<?php
foreach($system as $row){
    $st_name=$row->st_name;
    $st_address=$row->st_address;
    $st_tel=$row->st_tel;
    $st_email=$row->st_email;
    $st_account=$row->st_account;
    $st_bank=$row->st_bank;
    $st_manage=$row->st_manage;
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
  

  #pic1{
  position: absolute;
  width: 275px;
  height: 90px;
  left: 35px;
  top: -8px;
  }


</style>
<title></title>
</head>

<body>
<main>



<form action="st_update" method="post"style="background-color:transparent" >
<h1>แก้ไขข้อมูล</h1>
<div>
<label for="name" >ชื่อระบบ :</label>
<input type="text" name="name" id="name"   value="<?php echo $st_name; ?>">
</div><br>
<div>
<label for="name">ที่อยู่ :</label>
<input type="text" name="address" id="address" value="<?php echo $st_address; ?>">
</div><br>
<div>
<label for="tel">เบอร์โทร :</label>
<input type="text" name="tel" id="tel" value="<?php echo $st_tel; ?>">
</div><br>
<div>
<label for="email">อีเมลล์:</label>
<input type="text" name="email" id="email" value="<?php echo $st_email; ?>">
</div><br>
<div>
<label for="account">เลขบัญชีธนาคาร:</label>
<input type="text" name="account" id="account" value="<?php echo $st_account; ?>">
</div><br>
<div>
<label for="bank">ชื่อบัญชีธนาคาร</label>
<select name="bank">
<option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ	</option>
<option value="นาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
<option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
<option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
<option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option></select>
</div><br>
<div>
<label for="manage">เปอร์เซ็นต์จัดการรายได้:</label>
<input type="int" name="manage" id="manage" value="<?php echo $st_manage; ?>">
</div><br>
<div>
<br>
<button type="submit style="background-color:transparent;color:black;">แก้ไขข้อมูล</button> 
<button type="reset"  >รีเซ็ต</button>

</form>
</main>
</body>
</html>