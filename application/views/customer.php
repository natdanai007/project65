<?php
foreach ($reserve as $row) {
    $reserve_id = $row->reserve_id;
    $reserve_svname = $row->reserve_svname;
    $reserve_period = $row->reserve_period;
    $reserve_datetime = $row->reserve_datetime;
    $reserve_address = $row->reserve_address;
    $reserve_price = $row->reserve_price;
    $reserve_status = $row->reserve_status;
    $cus_name = $row->cus_name;
    $cus_tel= $row->cus_tel;
    $sp_name= $row->sp_name;
    $sp_tel= $row->cus_tel;



}
?>

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
   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');

body {
  font-family: 'Noto Sans Thai', sans-serif;
}



</style>
</head>



  

<main id = "data">
    
  <p>ชื่อ-นามสกุล:<?php echo $cus_name;?>
  <p>เบอร์โทร:<?php echo $cus_tel;?>
  <p>รหัสจองคิว:<?php echo $reserve_id;  ?>
  <p>ชื่อบริการ:<?php echo $reserve_svname;  ?>
  <p>ระยะเวลา:<?php echo $reserve_period;  ?>
  <p>วันที่และเวลา:<?php echo $reserve_datetime;?>
  <p>ตำแหน่งที่อยู่:<?php echo $reserve_address;?>
  <p>ผู้ให้บริการ:<?php echo $sp_name;?>
  <p>ราคา:<?php echo $reserve_status;?>
  </main>



</body>
</html>