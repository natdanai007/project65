<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/form_detailsp.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<div class="navbar">
<img id="pic1" src="<?php echo base_url(); ?>img/2.png">
</div>
<main >
    
<table class="table table-blue" style="width:100%">
<tr>
    <th>เลขบัตรประชาชน</th>
    <th>ชื่อ-สกุล</th>
    <th>เบอร์โทร</th>
    <th>อีเมลล์</th>
    <th>ที่อยู่</th>
    <th>รูปภาพ</th>
    <th>ชื่อธนาคาร</th>
    <th>เลขบัญชีธนาคาร</th>
    <th>วัคซีน</th>
    <th>ความถนัด</th>
    <th>ชื่อผู้ใช้</th>
    <th>จัดการ</th>
    
</tr>
<?php
foreach($service_provider as $row){
    
?>
<tr>
    <td><?php echo $row->sp_id; ?></td>
    <td><?php echo $row->sp_name; ?></td>
    <td><?php echo $row->sp_tel; ?></td>
    <td><?php echo $row->sp_email; ?></td>
    <td><?php echo $row->sp_address; ?></td>
    <td>
        <img src="<?php echo base_url('img');?>/<?php echo $row->sp_picture;?>" width="100px">
    </td>
    <td><?php echo $row->sp_bankname; ?></td>
    <td><?php echo $row->sp_banknumber; ?></td>
    <td><?php echo $row->sp_vaccine; ?></td>
    <td><?php echo $row->sp_aptitude; ?></td>
    <td><?php echo $row->sp_user; ?></td>

   
    <td>

    <a href='sp_edit?sp_id=<?php echo $row->sp_id; ?>'>[แก้ไข]</a>
    <br><a href='sp_delete?sp_id=<?php echo $row->sp_id; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">[ลบ]</a>
    
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