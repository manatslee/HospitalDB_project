<?php
session_start();
include("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab_result</title>
</head>
<style>
    .browser {
        position: absolute;
        width: 1600px;
        height: 1200px;
        background-color: rgba(255, 255, 255, 1);
        overflow: hidden;
    }
    
    .lab_result {
        position: absolute;
        left: 200px;
        top: 200px;
        overflow: visible;
    }
    
    .header {
        position: absolute;
        width: 100%;
        height: 136px;
        left: 0px;
        top: 0px;
        background-color: rgba(101, 198, 213, 1);
    }
    
    .logo {
        position: absolute;
        left: 0px;
        top: 0px;
    }
    
    .hospital {
        position: absolute;
        left: 140px;
        top: 0px;
        font-family: Bai Jamjuree;
        font-style: normal;
        font-weight: normal;
        font-size: 32px;
    }
    
    .user {
        position: absolute;
        right: 420px;
        top: 24px;
    }
    
    .login-box {
        position: absolute;
        right: 120px;
        top: 0px;
        border: 2px solid rgba(195, 195, 6, 1);
        background-color: rgba(243, 245, 231, 0.878);
        border-radius: 8px;
        width: 280px;
        height: 80px;
        font-family: Bai Jamjuree;
        font-style: normal;
        font-weight: normal;
        font-size: 28px;
    }
    
    .login-box:active {
        background-color: rgba(243, 245, 231, 0.664);
        transform: translateY(3px);
    }
    
    .menu {
        width: 90px;
        height: 60px;
    }
    
    .dropdown {
        position: absolute;
        right: 20px;
        top: 40px;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 0px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        width: 500px;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    
    .dropdown a:hover {
        background-color: #ddd;
    }
    
    .show {
        display: block;
    }
    
    .back-box {
        position: absolute;
        overflow: visible;
        right: 20px;
        top: 0px;
        border: 2px solid rgb(255, 0, 0);
        background-color: rgb(255, 0, 0);
        border-radius: 8px;
        width: 100px;
        height: 20px;
        font-family: Bai Jamjuree;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        stroke: rgb(54, 52, 52);
        stroke-width: 1px;
        stroke-linejoin: miter;
        stroke-linecap: butt;
        stroke-miterlimit: 4;
        shape-rendering: auto;
    }
    
    .back-box:active {
        background-color: rgba(243, 245, 231, 0.664);
        transform: translateY(3px);
    }
</style>

<body style="width:100%;height:100%;">

    <div id="browser">

        <div class="header">
            <img class="logo" src="img/logo.png" width="130px" , height="130px">
            <div class="hospital">
                <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
            </div>

            <img class="user" src="img/user.png" width="90px" , height="90px">
            <center>
            <a href= >
                    <p class ="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName']?></p>
                </a>
            </center>
            <script>
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(event) {
                    if (!event.target.matches('.menu')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            <div class="dropdown">
                <img src="img/menu.png" onclick="myFunction()" class="menu">
                <div id="myDropdown" class="dropdown-content">
                    <a href="First page login.php">Home</a>
                    <a href="InfoPatient.php">ดูข้อมูลส่วนตัว</a>
                    <a href="med1_latest .php">ยาของผู้ป่วย</a>
                    <a href="check_schedule.php">ตารางนัดหมายแพทย์</a>
                    <a href="First page.php">Logout</a>
                </div>
            </div>
        </div>


        <div class="lab_result">
            <center><img src="img/Image_6.png" width="1259px" , height="803px" style="width:100%"></center>

            <center>
                <a href="medical_history.php">
                    <p class="back-box">ย้อนกลับ </p>
                </a>
            </center>

        </div>

    </div>

</body>

</html>