<!DOCTYPE html>
<html>
  <head>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');
body{
  font-family: 'Noto Sans Thai', sans-serif;
}
#welcome{
  position: absolute;
width: 275px;
height: 90px;
margin-left: 1490px;
margin-top: 10px;
color: white;
}
body {
    font-family: Arial, Helvetica, sans-serif;
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
}
    </style>
  </head>
  <body style= "background:#F5F5F5;">
 
<div class="navbar">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
<div id ="boxlogout">
<a id ="logout" href="login">ออกจากระบบ</a>
</div>

<div id = "welcome">
  <?php 
            if(isset($this->session->userdata['username'])){
            $cus_user = $this->session->userdata['username'];
            $cus_name = $this->session->userdata['name'];
            }
            ?>
            <a href="#">สวัสดีคุณ<?php echo $cus_name;?></a></a> 
</div>
  </body>
</html>