<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
  body{
        font-family: 'Prompt', sans-serif;
    }
#welcome{
  position: absolute;
width: 275px;
height: 90px;
margin-left: 1490px;
margin-top: 10px;
color: white;
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

#all{
  position: absolute;
  margin-left: 280px;
  margin-top: 10px;
}
#logout{
position: absolute;
width: 100px;
height: 19px;
margin-left: -12px;
margin-top: -4px;
font-family: 'Roboto';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 19px;
/* identical to box height */
color: #726741;
}
#boxlogout{
box-sizing: border-box;
position: absolute;
width: 110px;
height: 41px;
margin-left: 1750px;
top: 15px;

background: #FFFFFF;
border: 1px solid rgba(0, 0, 0, 0.25);
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
}
#greenspa{
  position: absolute;
width: 986px;
height: 500px;
margin-top:250px;
margin-left:450px;


}
</style>
</head>
<body style ="background-color: #474641;">
<img id="greenspa" src="<?php echo base_url(); ?>img/greenspa.png">
<div class="navbar">
<a href ="#">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</a>
<div id ="boxlogout">
<a id ="logout" href="adminlogin">ออกจากระบบ</a>
</div>
<div id = "welcome">
  <?php 
            if(isset($this->session->userdata['username'])){
            $ad_user = $this->session->userdata['username'];
            $ad_name = $this->session->userdata['name'];
            }
            ?>
            <a href="#">สวัสดีคุณ<?php echo $ad_name;?></a></a> 
        </div>
        <div id ="all">
      <a href="form_tablesystem">ข้อมูลระบบ</a>
      <a href="datacustomer">ข้อมูลลูกค้า</a>
      <a href="main">ข้อมูลผู้ดูแลระบบ</a>
      <a href="form_tablesp">ข้อมูลผู้ให้บริการ</a>
          </div>





</body>
</html>
