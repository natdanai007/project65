<!DOCTYPE html>
<html>
  <head>
    <link href="<?php echo base_url();?>CSS/form_selectsp.css" rel="stylesheet" >
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