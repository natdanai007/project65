
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/show_cusoutput.css" rel="stylesheet" >
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css"&gt;
<title></title>
</head>
<body>
    <main>
<div id=text>
<?php
echo "เลขบัตรประชาชน: ";
echo $id;
echo "<br>";
echo "ชื่อ-สกุล: ";
echo $name;
echo "<br>";
echo "เบอร์โทร: ";
echo $tel;
echo "<br>";
echo "ที่อยู่: ";
echo $address;
echo "<br>";
echo "อีเมลล์: ";
echo $email;
echo "<br>";
echo "ชื่อผู้ใช้: ";
echo $username;
echo "<br>";
echo "รหัสผ่าน: ";
echo $password;
echo "<br>";

echo "ข้อมูลได้รับการบันทึกเรียบร้อยแล้ว";
echo "<br>";
?>
</div>

<body>


<script>

</script>
	
<form action="datacustomer" method="post" style="background-color:transparent">

<button type="submit"style="background-color:transparent;color:black;">ยืนยันข้อมูล</button>

</form>
</main>
</body>
</html>