<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .mySlides {display:none;}
    form{
        position: absolute;
        left:43%;
        top:26%;
        
    }
	button{
		border-color:transparent;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
	#img{
		position: absolute;
        left:41%;
        top:8%;
	}
    #line{
        border-bottom: 1px solid;
        height: 2px;
        width: 305px;
        color: #253937;
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
    input{
        height: 30px;
        width: 300px;
        font-size: 20px;
        border: 1px solid rgba(0, 0, 0, 0.35);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 4px;
    }
	#btnadmin{
    border: transparent;
    border-radius: 30px;
    background-color: #253937;
    color: white;
    width: 310px;
    height: 40px;
    font-size: 24px;
    }
    #pic2{
        margin-top:200px;
        margin-left: -26px;

    }
    img{
        margin-top:150px;
        margin-left: -26px;
    }
    body{
        background-color: #F4F1EC;
    }

    
</style>
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
