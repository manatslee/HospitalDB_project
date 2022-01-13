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
    <title>ComSci Back Pain Hospital</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
</head>
<style>
.white-comtainer{
    background-color: linen;
}    
.blue-container{
    background-color: rgba(101,198,213,1);
}
.bg-cover {
    background-size: cover !important;
}

body {
    min-height: 100vh;
}    
.header{
    background-color: rgba(101,198,213,1);
    position: absolute;
    width: 100%;
	height: 136px;
	left: 0px;
	top: 0px;  
}
.logo{
    position: absolute;
    left: 0px;
    top: 0px;
   
}
.hospital{
    position: absolute;
    left:140px;
    top:20px;
    font-family: Bai Jamjuree;
    font-style: normal;
    font-weight: normal;
    font-size: 30px;
}
.user{
    position: absolute;
    top:0px;
    right: 320px;
    top: 24px;
}
.login-box{
    position: absolute;
    right:   20px;
    top: 25px;
    border: 2px solid rgb(195, 195, 6);
    background-color: rgba(243,245,231,0.878);
    border-radius: 8px;
    width : 280px;
    height : 80px;
    font-family: Bai Jamjuree;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
}
.login-box:active{
    background-color:  rgba(243, 245, 231, 0.664);
     transform: translateY(3px);
}
.search{
    position: absolute;
    top: 280px;
    left: 20%;
    width : 60%;
    height : 30px;
    border-radius: 300px;
    font-size:20px;
    padding: 12px 20px;
    display: inline-block;
    box-shadow: 3px 3px #888888;
    outline: none; 
}
.menu {      
    width:30px;
    height:30px;   
    }
.dropdown {
    position: absolute;
    top: 280px;
    right: 200px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 0px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 200px;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown a:hover {background-color: #ddd;}
.show {display: block;}
</style>
<body style="width:100%;height:100%;">  
<!--header page-->
    <div class = "container-fluid blue-container">
        <div class ="row">
            <div class = "col">
                <img src="img/logo.png" width = "120px", height = "120px">
                <div class="hospital" >
                    <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
                </div>
                <img class = "user" src="img/user.png" width = "80px", height = "80px">         
                       <center>
                            <p class ="login-box"><?php 
                                echo $_SESSION['FName'];?><br>
                            <?php 
                                echo $_SESSION['LName'];?>
                            </p>
                       </center>
             </div>  
        </div>  
    </div>  

<!-- Bootstrap Static Header -->
<div class = "white-comtainer">
<div style="background: url(https://massa.us.com/wp-content/uploads/2015/12/Al-Salam-Hospital.jpg)" class="img-fluid jumbotron bg-cover text-white">
    <div class="container py-4 text-center">
        <h1 class="display-4 font-weight-bold">ComSci Back Pain Hospital</h1>
        <p class="font-italic mb-0">โรงพยาบาลวิทยาการคอมพิวเตอร์</p>
        <form action="" method="POST" >
            <input class="search" type="search"placeholder="ค้นหาข้อมูลในเว็บไซต์" id="search">
        </form>
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
        <div class="dropdown">
            <img src = "img/menu.png" onclick="myFunction()" class="menu">
            <div id="myDropdown" class="dropdown-content">
              <a href="First page login.php">Home</a>
              <a href="InfoPatient.php">ดูข้อมูลส่วนตัว</a>
              <a href="med1_latest .php">ยาของผู้ป่วย</a>
              <a href="check_schedule.php">ตารางนัดหมายแพทย์</a>
              <a href="First page.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Menu</h2>
    <div class="row pt-4">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <a href="find_doctor2.php">
                <img src ="img/doctor.png" class = "img-fluid w-50 mx-auto d-block"/>  
                </a>
              <h5 class="card-title">ค้นหาแพทย์</h5>
              <p class="card-text">ค้นหารายชื่อแพทย์ที่เชี่ยวชาญ</p>
              <a href="find_doctor2.php" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <a href="health_plan2.php">
                <img src ="img/contact-form2.png" class = "img-fluid w-50 mx-auto d-block"/>
                </a>
              <h5 class="card-title">โปรแกรมตรวจสุขภาพ</h5>
              <p class="card-text">รายละเอียดแพ็ตเกจโปรแกรมตรวจสุขภาพ</p>
              <a href="health_plan2.php" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <a href="hospital_info2.php">  
                <img src ="img/contact.png" class = "img-fluid w-50 mx-auto d-block"/>
                </a>
                <h5 class="card-title">ข้อมูลติดต่อโรงพยาบาล</h5>
                <p class="card-text">ข้อมูลเพิ่มเติมสำหรับการติดต่อโรงพยาบาล</p>
                <a href="hospital_info2.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
      </div>
      <div class="row pt-4">
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                  <a href="doctor1.php">
                  <img src ="img/appointment.png" class = "img-fluid w-50 mx-auto d-block"/>  
                  </a>
                <h5 class="card-title">นัดหมายแพทย์</h5>
                <p class="card-text">นัดหมายแพทย์ล่วงหน้าเพื่อตรวจวินิจฉัยรักษา</p>
                <a href="doctor1.php" class="btn btn-primary">Go</a>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                  <a href="check_schedule.php">
                  <img src ="img/delete.png" class = "img-fluid w-50 mx-auto d-block"/>  
                  </a>
                <h5 class="card-title">ยกเลิกการนัดหมาย</h5>
                <p class="card-text">ยกเลิกการนัดหมายแพทย์ที่ได้นัดไว้</p>
                <a href="check_schedule.php" class="btn btn-primary">Go</a>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                  <a href="medical_history.php">
                  <img src ="img/medical-records.png" class = "img-fluid w-50 mx-auto d-block"/>  
                  </a>
                <h5 class="card-title">ประวัติการรักษา</h5>
                <p class="card-text">ดูประวัติการรักษาที่ผ่านมา</p>
                <a href="medical_history.php" class="btn btn-primary">Go</a>
              </div>
            </div>
        </div>
      </div>
</div>
</div>

</body>
</html>