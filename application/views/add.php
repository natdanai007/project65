<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: #F4F1EC;
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

        .mySlides {
            display: none;
        }

        form {
            position: absolute;
            left: 43%;
            top: 26%;

        }

        button {
            border-color: transparent;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #img {
            position: absolute;
            left: 41%;
            margin-left: center;

        }

        h1 {
            width: 320px;
            height: 60px;
            margin-top: 100px;
            background: #726741;
            border-radius: 8px;
            text-align: center;
            padding-top: 20px;
            color: #ffffff;
            margin-left: -10px;
            font-size: 30px;
        }

      

        #hd1 {
            margin-top: 100px;
            margin-left: -300px;

        }

        #hd2 {
            margin-top: -310px;
            margin-left: 600px;
        }

        #btnsp {
            border: transparent;
            border-radius: 30px;
            background-color: #253937;
            color: white;
            width: 310px;
            height: 40px;
            font-size: 24px;

        }

        #line {
            border-bottom: 1px solid;
            height: 2px;
            width: 305px;
            color: #253937;
        }
        
    </style>
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
        <form role="form" method="post" enctype="multipart/form-data">
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
                    <label for="card"></label>
                    <input placeholder="สำเนาบัตร" type="file" name="card" id="card" accept="image/*">
                    <font color="red"><?php echo form_error('card'); ?></font>
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
                        name="userSubmit" value="สมัครงาน"></input>
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