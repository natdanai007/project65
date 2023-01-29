<<<<<<< HEAD
<?php
foreach ($reserve as $row) {
    $reserve_id = $row->reserve_id;
    $reserve_svname = $row->reserve_svname;
    $reserve_period = $row->reserve_period;
    $reserve_datetime = $row->reserve_datetime;
    $reserve_address = $row->reserve_address;
    $reserve_price = $row->reserve_price;
    $cus_name = $row->cus_name;
    $cus_tel= $row->cus_tel;
    $sp_name= $row->sp_name;

}
?>

<?php
foreach ($system as $row) {
    $st_name = $row->st_name;
    $st_address = $row->st_address;
    $st_tel = $row->st_tel ;
    $st_email = $row->st_email;
    $st_account = $row->st_account;
    $st_bank = $row->st_bank;
   
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
  <p>ราคา:<?php echo $reserve_price;?>
  </main>


<form action="form_confrimpay" method="post" style="background-color:transparent">
        <div id="paymentinput">
            <p>เลขที่บัญชี :<input  type="text"  value="<?php echo $st_account;  ?>"  readonly ></input></p><br><br>
            <p >ธนาคาร : <input  type="text" value="<?php echo $st_bank;  ?>"  readonly ></input></p>
           <br><br>
            <p >ชื่อบัญชี : <input  type="text"    value="<?php echo $st_name;  ?>" readonly ></input></p>
           <br><br>
            <p ><span style="color:red">* </span>สลิปโอนเงิน :</p>
            <input id="slip" type="file" name="slip" accept="image/png, image/gif, image/jpeg" required />

            <input type="hidden" name="reserveid" value="<?php echo $reserve_id;  ?>"><br><br>

        </div>

<button type="submit" style="background-color:transparent;color:black;">ชำระเงิน</button>
<br><a href='reserve_delete?reserve_id=<?php echo $reserve_id; ?> ' onclick="return confirm('ต้องการยกเลิกการจองหรือไม่?')">ยกเลิก</a>

</form>

</body>
</html>
=======
<link href="<?php echo base_url();?>CSS/pay.css" rel="stylesheet" >
>>>>>>> N
