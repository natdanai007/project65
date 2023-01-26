<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
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
    .mySlides {display:none;}
    form{
        position: absolute;
        left:43%;
        top:26%;
	}
    h1{
        width: 305px;
        height: 60px;
        top: 400px;
        background: #726741;
        border-radius: 8px;
        text-align:center;
        padding-top: 20px;
        color: #ffffff;
    }
    #btnlogin{
    border: transparent;
    border-radius: 30px;
    background-color: #253937;
    color: white;
    width: 310px;
    height: 40px;
    font-size: 24px;
    }
    #line{
        border-bottom: 1px solid;
        height: 2px;
        width: 305px;
        color: #253937;
    }
    

    input{
        height: 30px;
        width: 300px;
        font-size: 20px;
        border: 1px solid rgba(0, 0, 0, 0.35);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 4px;
    }
    
    #pic7{
        position: absolute;
        width: 439px;
        height: 239px;
        left: 741px;
        top: 144px;
    }
    #pic2{
        margin-top:200px;
        margin-left: -26px;
    }
    body{
        background-color: #F4F1EC;
    }
    #pic1{
        position: absolute;
        width: 275px;
        height: 90px;
        margin-top:-20px;

    }


    
</style>

<title>หน้าเข้าสู่ระบบ</title>
</head>
<main>
    <body>
	<div class="navbar">
   <a href="pagelogin">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png"></a>
      
</div><br><br><br><br><br><br><br>
<script>
    
</script>
    
<center>
<img id="pic7" src="<?php echo base_url(); ?>img/img2.png">
</center>
<form style="background-color:transparent" method="post" action="authen">

<div id="pic2">
<h1>เข้าสู่ระบบ</h1>

<br>
<div id="line"> </div>
<br>

<input placeholder="ชื่อผู้ใช้"type="text" name="username"><br><br>
<font color="red"><?php echo form_error('username'); ?></font>

<input placeholder="รหัสผ่าน"type="password" name="password"><br>
<font color="red"><?php echo form_error('password'); ?></font><br>
<center>
<button id="btnlogin" type="submit">เข้าสู่ระบบ</button>
</center>
<br>
<div id="line"> </div>
<br>
<center>
<footer>ยังไม่เป็นสมาชิก <a href="form_register">สมัครสมาชิก</a></footer>
</center>

</form>
</div>
    </body>

</main>
</html>
