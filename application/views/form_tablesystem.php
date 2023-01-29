<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');
    form{
        position: absolute;
        left:43%;
        top:55%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Prompt', sans-serif;
        font-size: 20px;
    }
 
    body{
        font-family: 'Prompt', sans-serif;
        
      
    }
    #img{
		position: absolute;
        left:40%;
        top:3%;
	}
    table{
        margin:auto;
        margin-top:240px;
        
    }
    #logout{
        position: absolute;
		top:3%;
        left:95%;
      
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
</head>
<body>
<div class="navbar">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</div>

<main >
    
<table class="table table-blue" style="width:100%">
<tr>
    <th>ชื่อระบบ</th>
    <th>ที่อยู่</th>
    <th>เบอร์โทร</th>
    <th>อีเมลล์</th>
    <th>เลขบัญชีธนาคาร</th>
    <th>ชื่อบัญชีธนาคาร</th>
    <th>จัดการ</th>
    
    
    


</tr>
<?php
foreach($system as $row){
?>
<tr>
    <td><?php echo $row->st_name; ?></td>
    <td><?php echo $row->st_address; ?></td>
    <td><?php echo $row->st_tel; ?></td>
    <td><?php echo $row->st_email; ?></td>
    <td><?php echo $row->st_account; ?></td>
    <td><?php echo $row->st_bank; ?></td>
 
   
    <td>
    <a href='st_edit?st_name=<?php echo $row->st_name; ?>'>[แก้ไข]</a>
    <br><a href='st_delete?st_name=<?php echo $row->st_name; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">[ลบ]</a>
  
    </td>
    </tr>
    <?php
    }
    ?>
</table>
<div id = logout>
<b><a href="pageadmin" ' onclick="return confirm('ต้องกลับไปยังหน้าหลัก?')">กลับ</b>
</div>

</main>
</body>
</html>