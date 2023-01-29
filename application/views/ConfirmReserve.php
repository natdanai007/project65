<?php
foreach ($reserve as $row) {
    $reserve_id = $row->reserve_id;
    $reserve_svname = $row->reserve_svname;
    $reserve_period = $row->reserve_period;
    $reserve_datetime = $row->reserve_datetime;
    $reserve_address = $row->reserve_address;
    $cus_name = $row->cus_name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>CSS/ConfirmReserve.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<main>

  <p>ชื่อ-นามสกุล:<?php echo $row->cus_name;?>
  <p>เบอร์โทร:<?php echo $row->cus_tel;?>
  <p>รหัสจองคิว:<?php echo $reserve_id;  ?>
  <p>ชื่อบริการ:<?php echo $row->reserve_svname;  ?>
  <p>ระยะเวลา:<?php echo $row->reserve_period;  ?>
  <p>ราคา:<?php echo $row->reserve_price;?>
  <p>วันที่และเวลา:<?php echo $row->reserve_datetime;?>
  <p>ตำแหน่งที่อยู่:<?php echo $row->reserve_address;?>
  <p>ผู้ให้บริการ:<?php echo $row->sp_name;?>


<div id = logout>
<b><a href="form_map" ' onclick="return confirm('ต้องกลับไปยังหน้าหลัก?')">กลับ</b>
</div>
<form action="pay" method="post" style="background-color:transparent">
<button type="submit" style="background-color:transparent;color:black;">ยืนยันข้อมูล</button>

</form>
</main>
</body>
</html>