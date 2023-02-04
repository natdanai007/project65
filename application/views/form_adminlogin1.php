<!DOCTYPE html>
<html>
<head>
    <base target="_top">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>CSS/db.css" rel="stylesheet">
    <title>QR code Generator</title>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a id="welcome">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">GREEN SPA & MASSAGM</span>
                    </a>
                </li>

                <li>
                    <a href="dbhome">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">ข้อมูลระบบ</span>
                    </a>
                </li>

                <li>
                    <a href="datacustomer">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">ข้อมูลลูกค้า</span>
                    </a>
                </li>

                <li>
                    <a href="main">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">ข้อมูลผู้ดูแลระบบ</span>
                    </a>
                </li>

                <li>
                    <a href="form_tablesp">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">ข้อมูลผู้ให้บริการ</span>
                    </a>
                </li>
                <li>
                    <a id="logout" href="adminlogin">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">ออกจากระบบ</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div id="welcome"><?php
                                    if (isset($this->session->userdata['username'])) {
                                        $ad_user = $this->session->userdata['username'];
                                        $ad_name = $this->session->userdata['name'];
                                    }
                                    ?>
                    <a href="#">สวัสดีคุณ<?php echo $ad_name; ?></a></a>
                </div>
                <div class="user">
                    <img src="https://images.generated.photos/Gsig2ywUZwUxJW1IntJsmPQCbDZJp3EWPqRDt10u2To/rs:fit:512:512/wm:0.95:sowe:18:18:0.33/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LnBob3Rvcy92M18w/NTk1ODE5LmpwZw.jpg" alt="">
                </div>
            </div>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>ข้อมูลระบบ</h2>
                    </div>
                    
                   <div class="cardHeaderend">
                   <?php
                        foreach($system as $row){
                         ?>
                        <tr>
                        <td>
                        <a  class="btn1" href='st_edit?st_name=<?php echo $row->st_name; ?>'>แก้ไข</a>
                        </td>
                        <td>
                        <a  class="btn1" href='st_delete?st_name=<?php echo $row->st_name; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">ลบ</a>
                        </td>
                         </tr>
                         
                    <?php
                }
                   ?>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>ชื่อระบบ</td>
                                <td>ที่อยู่</td>
                                <td>เบอร์โทร</td>
                                <td>อีเมล์</td>
                                <td>ชื่อบัญชีธนาคาร</td>
                                <td>เลขบัญชีธนาคาร</td>
                                <td>เปอร์เซ็นการจัดการรายได้</td>
                            </tr>
                        </thead>

                        <tbody>
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
                         <td><?php echo $row->st_manage; ?></td>
                         </tr>
                         
                    <?php
                }
                   ?>
                        </tbody>
                    </table>
                </div>

                <!-- =========== Scripts =========  -->
                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                
</form>
</body>

</html>
<script>
    // add hovered class to selected list item
    let list = document.querySelectorAll(".navigation li");

    function activeLink() {
        list.forEach((item) => {
            item.classList.remove("hovered");
        });
        this.classList.add("hovered");
    }

    list.forEach((item) => item.addEventListener("mouseover", activeLink));

    // Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function() {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    };
</script>
