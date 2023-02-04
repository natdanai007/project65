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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">GREEN SPA & MASSAGM</span>
                    </a>
                </li>

                <li>
                    <a href="form_tablesystem">
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
                        <h2>ข้อมูลผู้ให้บริการ</h2>
                    </div>
                    <div class="cardHeaderend">
                   <?php
                        foreach($service_provider as $row){
                         ?>
                        <tr>
                        <td>
                        <a  class="btn1" href='sp_edit?sp_id=<?php echo $row->sp_id; ?>'>แก้ไข</a>
                        </td>
                        <td>
                        <a  class="btn1" href='sp_delete?sp_id=<?php echo $row->sp_id; ?> ' onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">ลบ</a>
                        </td>
                         </tr>
                         
                    <?php
                }
                   ?>
                   <a href="form_detailsp">ดูรายละเอียด</a>
                    </div>
                    <table>
                        <thead>

                            <tr>
                                <td>เลขบัตรประชาชน</td>
                                <td>ชื่อ-สกุล</td>
                                <td>เบอร์โทร</td>
                                <td>อีเมล์</td>
                                <td>ที่อยู่</td>
                                <td>ความถนัด</td>
                                <td>ชื่อผู้ใช้</td>
                            </tr>
                        </thead>
                <tbody>
                            <?php
                              foreach($service_provider as $row){
 
                         ?>
                            <tr>
                             <td><?php echo $row->sp_id; ?></td>
                             <td><?php echo $row->sp_name; ?></td>
                             <td><?php echo $row->sp_tel; ?></td>
                             <td><?php echo $row->sp_email; ?></td>
                             <td><?php echo $row->sp_address; ?></td>
                             <td><?php echo $row->sp_aptitude; ?></td>
                             <td><?php echo $row->sp_user; ?></td>

                            </tr>
                           <?php
                            }
                        ?>
                        
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

                <!-- =========== Scripts =========  -->
                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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