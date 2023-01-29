<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <link href="<?php echo base_url();?>CSS/form_spregister.css" rel="stylesheet" >
    <title>หน้าผู้ให้บริการ</title>
</head>
<link href="./css/bootstrap.min.css" rel="stylesheet">
<main>

<body>
    <div class="navbar">
        <img id="pic1" src="<?php echo base_url(); ?>img/2.png">

    </div>
    </div>
    <script>

        </script>
        <center>
            <img id="pic7" src="<?php echo base_url(); ?>img/33.png"style="margin-top:100px;">
        </center>
        <form  action="form_validationsp" role="form" method="post" enctype="multipart/form-data">

            <h1>กรอกข้อมูลสมัครงาน</h1>

            <div class="row mt-4">
                <div class="col-md-12 mt-3">
                    <img src="<?php echo base_url(); ?>img/noimg.png" class="img-thumbnail" id="c_image_preview" style="width:200px; max-height:200px; border:1px solid; margin-left: 50px"/>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="card" class="form-label"></label>
                    <input class="form-control" id="c_image" name="picture" type="file" onchange="loadFile(event) "style="margin-left: 52px;width:200px;height:24px;font-size: 15px;">
                </div>
            </div>

            <div id="hd1">
                <div>
                    <div>
                        <label for="id"></label>
                        <input placeholder="เลขบัตรประชาชน" type="text" name="id" id="id">
                        <font color="red"><?php echo form_error('name'); ?></font>
                    </div><br>
                </div><br>
                <div>
                    <label for="name"></label>
                    <input placeholder="ชื่อ-นามสกุล" type="text" name="name" id="name">
                    <font color="red"><?php echo form_error('name'); ?></font>
                </div><br>
                <div>
                    <label for="address"></label>
                    <input placeholder="ที่อยู่" type="text" name="address" id="address">
                    <font color="red"><?php echo form_error('name'); ?></font>
                </div><br>
                <div>
                    <label for="tel"></label>
                    <input placeholder="เบอร์โทร" type="text" name="tel" id="tel">
                    <font color="red"><?php echo form_error('name'); ?></font>
                </div><br>
                <div>
                    <label for="email"></label>
                    <input placeholder="อีเมลล์" type="text" name="email" id="email">
                    <font color="red"><?php echo form_error('name'); ?></font>
                </div><br>
                <div>
                <input type="checkbox" name="aptitude[]" value="นวดน้ำมันอโรมา"> นวดน้ำมันอโรมา<br>
                <input type="checkbox" name="aptitude[]" value="นวดแผนไทย"> นวดแผนไทย<br>
                <input type="checkbox" name="aptitude[]" value="นวดศีรษะหลัง ไหล่ และเท้า ผ่อนคลายทั้งร่างกาย"> นวดศีรษะหลัง ไหล่ และเท้า ผ่อนคลายทั้งร่างกาย<br>
                <input type="checkbox" name="aptitude[]" value="นวดกดจุดใบหน้าและศีรษะ"> นวดกดจุดใบหน้าและศีรษะ<br>
                <input type="checkbox" name="aptitude[]" value="นวดจับเส้น"> นวดจับเส้น
                <br>
                </div>
                <div>
                    <div>
                    </div>
                    <div id="hd2">
                        <div>
                            <label for="vaccine"></label>
                            <input placeholder="วัคซีน" type="text" name="vaccine" id="vaccine">
                            <font color="red"><?php echo form_error('vaccine'); ?></font>
                        </div><br>
                        
                        <div>
                        <select name ="bankname" id="bankname">
                            <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ:</option>
                            <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                            <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                            <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                            <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                        </select>
                        </div><br>
                        <div>
                            <label for="banknumber"></label>
                            <input placeholder="เลขบัญชีธนาคาร" type="text" name="banknumber" id="banknumber">
                            <font color="red"><?php echo form_error('banknumber'); ?></font>
                        </div><br>
                        <div>
                            <label for="username"></label>
                            <input placeholder="ชื่อผู้ใช้" type="text" name="username" id="username">
                            <font color="red"><?php echo form_error('username'); ?></font>
                        </div><br>
                        <div>
                            <label for="password"></label>
                            <input placeholder="รหัสผ่าน" type="password" name="password" id="password">
                            <font color="red"><?php echo form_error('password'); ?></font>
                        </div><br>
                        <div>
                            <label for="password2"></label>
                            <input placeholder="ยืนยันรหัสผ่าน" type="password" name="password2" id="password2">
                            <font color="red"><?php echo form_error('password2'); ?></font>
                        </div>
                        <div>
                            <br>
                            <label for="agree">
                                <font color="red"><?php echo form_error('agree'); ?></font>
                            </label>
                        </div>
                    </div>
                    <br>
                    <br><br>
                    <center>
                        <br>
                        <input id="btnsp" type="submit" class="btn btn-warning"
                        name="userspSubmit" value="สมัครงาน"></input>
                        <br>
                        <br>
                    </center>
                    <center>
                        <div id="line"> </div>
                        <br>
                    </center>
                    <center>
                        <footer>เป็นสมาชิกอยู่แล้ว <a href="splogin">เข้าสู่ระบบเลย <br></a></footer>
                    </center>

                    <script src="./js/bootstrap.bundle.min.js"></script>
                    <script src="./js/script.js"></script>
                    <script>
                        var loadFile = function(event) {
                            var reader = new FileReader();
                            reader.onload = function() {
                                var output = document.getElementById('c_image_preview');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        }
                    </script>
        </form>
    </body>
</main>

</html>