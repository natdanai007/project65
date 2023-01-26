
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css"&gt;
<title></title>
<style>
    .mySlides {display:none;}
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
    form{
        position: absolute;
        left:43%;
        top:55%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Prompt', sans-serif;
        font-size: 20px;
    }
    button{
		border-color:transparent;
      
    }

	#text{
		position: absolute;
        left:41.5%;
        top:25%;
        font-size: 20px;
	}

</style>
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
	
<form action="main" method="post" style="background-color:transparent">

<button type="submit" style="background-color:transparent;color:black;">ยืนยันข้อมูล</button>

</form>
</main>
</body>
</html>