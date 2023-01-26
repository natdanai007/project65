<?php
foreach ($service_provider as $row) {
    $sp_id = $row->sp_id;
    $sp_name = $row->sp_name;
    $sp_tel = $row->sp_tel;
    $sp_email = $row->sp_email;
    $sp_address = $row->sp_address;
    $sp_picture = $row->sp_picture;
    $sp_bankname = $row->sp_bankname;
    $sp_banknumber = $row->sp_banknumber;
    $sp_vaccine = $row->sp_vaccine;
    $sp_user = $row->sp_user;
    $sp_pass = $row->sp_pass;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <style>
        form {
            position: absolute;
            left: 43%;
            top: 16%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        button {
            border-color: transparent;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <title></title>
</head>

<body>
    <main>



        <form action="sp_update" method="post" style="background-color:transparent">
            <h1>แก้ไขข้อมูล</h1>
            <div>
                <label for="id">เลขบัตรประชาชน :</label>
                <input type="text" name="id" id="id" value="<?php echo $sp_id; ?>">

            </div><br>
            <div>
                <label for="name">ชื่อ-นามสกุล :</label>
                <input type="text" name="name" id="name" value="<?php echo $sp_name; ?>">
            </div><br>
            <div>
                <label for="tel">เบอร์โทร :</label>
                <input type="text" name="tel" id="tel" value="<?php echo $sp_tel; ?>">
            </div><br>
            <div>
                <label for="email">อีเมลล์:</label>
                <input type="text" name="email" id="email" value="<?php echo $sp_email; ?>">
            </div><br>
            <div>
                <input type="checkbox" name="aptitude[]" value="นวดน้ำมันอโรมา"> นวดน้ำมันอโรมา<br>
                <input type="checkbox" name="aptitude[]" value="นวดแผนไทย"> นวดแผนไทย<br>
                <input type="checkbox" name="aptitude[]" value="นวดศีรษะหลัง ไหล่ และเท้า ผ่อนคลายทั้งร่างกาย"> นวดศีรษะหลัง ไหล่ และเท้า ผ่อนคลายทั้งร่างกาย<br>
                <input type="checkbox" name="aptitude[]" value="นวดกดจุดใบหน้าและศีรษะ"> นวดกดจุดใบหน้าและศีรษะ<br>
                <input type="checkbox" name="aptitude[]" value="นวดจับเส้น"> นวดจับเส้น<br>
            </div><br>
            <div>
                <label for="address">ที่อยู่:</label>
                <input type="text" name="address" id="addresss" value="<?php echo $sp_address; ?>">
            </div><br>
            <div>
                <label for="picture">รูปภาพ:</label>
                <input type="file" name="picture" id="picture" value="<?php echo $sp_picture; ?>">
            </div><br>
          
            <div>
                <select name="bankname" id="bankname">
                    <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ:</option>
                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                    <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                    <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                    <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                </select>
            </div><br>
            <div>
                <label for="banknumber">เลขบัญชีธนาคาร:</label>
                <input type="text" name="banknumber" id="banknumber" value="<?php echo $sp_banknumber; ?>">
            </div><br>
            <div>
                <label for="vaccine">การฉีดวัคซีน:</label>
                <input type="text" name="vaccine" id="vaccine" value="<?php echo $sp_vaccine; ?>">
            </div><br>
            <div>
                <label for="username">ชื่อผู้ใช้:</label>
                <input type="text" name="username" id="username" value="<?php echo $sp_user; ?>">
            </div><br>
            <div>
                <label for="password">รหัสผ่าน:</label>
                <input type="password" name="password" id="password" value="<?php echo $sp_pass; ?>">
            </div><br>
            <div>
                <br>
                <button type="submit style=" background-color:transparent;color:black;">แก้ไขข้อมูล</button>
                <button type="reset">รีเซ็ต</button>

        </form>
    </main>
</body>

</html>