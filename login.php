<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    .header{
        position: absolute;
        width: 100%;
		height: 136px;
		left: 0px;
		top: 0px;
        background-color: rgba(101,198,213,1);
		
    }
    .logo{
        position: absolute;
        left:   0px;
		top: 0px;
       
    }
    .hospital{
        position: absolute;
        left:140px;
        top:0px;
        font-family: Bai Jamjuree;
		font-style: normal;
		font-weight: normal;
		font-size: 32px;
    }
    .user{
        position: absolute;
        right: 320px;
		top: 24px;
    }
    .login-box{
        position: absolute;
        right:   20px;
		top: 0px;
        border: 2px solid rgba(195,195,6,1);
        background-color: rgba(243,245,231,0.878);
        border-radius: 8px;
        width : 280px;
        height : 80px;
        font-family: Bai Jamjuree;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
    }
    .login-box:active{
        background-color:  rgba(243, 245, 231, 0.664);
        transform: translateY(3px);
    }

    .login{       
    
        width : 600px;
        height : 40px;
        border-radius: 300px;
        font-size:30px;
        padding: 12px 20px;
        box-shadow: 3px 3px #888888;
        display: inline-block;
        outline: none; 

     
    }
    .form{
        margin-top:240px;
        width : 700px;
        height : 400px;
        text-align:center;
        font-family: Bai Jamjuree;
        font-size:40px;
        font-style: normal;
        font-weight: normal;
      
        border: 5px solid rgba(48, 48, 48, 0.76);
        border-radius: 70px;
        background-color:white;
    }
    .button{
        width: 200px;
        height: 60px;
        border-radius: 70px;
        font-family: Bai Jamjuree;
        font-size:30px;
        font-style: normal;
        font-weight: normal;
        color: azure;
        box-shadow: 3px 3px #888888;
        background-color: rgba(29,76,148,1);
    }
    .search{
        position: absolute;
        top: 160px;
        left: 8%;
        width : 84%;
        height : 60px;
        border-radius: 300px;
        font-size:30px;
        padding: 12px 20px;
        display: inline-block;
        box-shadow: 3px 3px #888888;
        outline: none; 
    }
    .home{
        position: absolute;
        top: 163px;
        left: 18px;
    }
    .menu {
        
        width:90px;
        height:60px;   
    }

    .dropdown {
        position: absolute;
        top: 160px;
        right: 15px;
        
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 0px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {background-color: #ddd;}
    .error{
        position: absolute;
        top: 130px;
        left: 8.5%;
        width : 84%;
        height : 60px;
        font-size:30px;
        text-align:center;
        color:rgb(255, 0, 0);

    }

    .show {display: block;}
</style>
<body style="width:100%;height:100%;background-color: linen;">
    
    <div class="header" >   
        <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
        <div class="hospital" >
            <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
        <center>
            <a href="login.php" >
                <p class ="login-box">เข้าสู่ระบบ /<br> ลงทะเบียนผู้ป่วยใหม่</p>
            </a>    
           
        </center>  
    </div>   

   <center>   
         
        <form  class = "form" action="login_db.php" method="POST">
            <p style="position:relative;bottom: 25px;">เข้าสู่ระบบ</p>
            <div style="position:relative;bottom : 50px;border-bottom: 2px solid gray;"></div>
            <input class = 'login' style="position:relative;bottom: 34px;" type='text' placeholder="หมายเลขบัตรประจำตัวประชาชน" name = 'SSN' maxlength="13" minlength="13"  required>
            <input class = 'login' style="position:relative;bottom: 18px;" type='password'  maxlength="10" minlength="10" placeholder="วันหมดอายุบัตรประชาชน" name = 'ExpSSN' required><br>
            <label style = 'position:relative;bottom: 15px;font-size:24px'>
                ยังไม่เป็นสมาชิก?
                <a href="register.php" >
                    <span>
                        สมัครสมาชิก
                    </span>
                </a>
            </label><br>
            <button class = 'button'type="submit" name="login_user" >
                เข้าสู่ระบบ
            </button>
        </form>        
    </center>
    <form action="" method="POST" >
        <input class="search" type="search"placeholder="ค้นหาข้อมูลในเว็บไซต์" id="search">
    </form>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

     <!-- notification message-->
     <?php if (isset($_SESSION['error'])) : ?>
        <script >
            Swal.fire({
                title: 'รหัสผ่านไม่ถูกต้อง',
                text: ' <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>',
                icon: 'error',

                })
        </script>


     <?php elseif (isset($_SESSION['register'])) : ?>
        <script >
            Swal.fire({
                title: 'บันทึกข้อมูลสำเร็จ',
                text: ' <?php 
                            echo $_SESSION['register'];
                            unset($_SESSION['register']);
                        ?>',
                icon: 'success',

                })
        </script>
            
      
            
        <?php endif ?>

    <a href="First page.php">
        <img class = "home" src="img/home.png" width="90px" height="55px">
    </a>

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
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
      
</body>
</html>