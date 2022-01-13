<?php 

    session_start();
    session_destroy();
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
    left:   0px;
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
.hospital_pic{
    position: absolute;
    left: 50px;
    top: 200px;
    bottom: 400px;
}
.icon_tel{
    position: absolute;
    top: 300px;
    bottom: 400px;
}
.icon_search{
    position: absolute;
    top: 300px;
    bottom: 400px;
}

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
                   <a href="login.php" >
                       <p class ="login-box">เข้าสู่ระบบ /<br> ลงทะเบียนผู้ป่วยใหม่</p>
                   </a>
                </center>
            </div>  
        </div>  
    </div>      

<!-- Bootstrap Static Header -->
<div class = "white-comtainer">
<div style="background: url(https://massa.us.com/wp-content/uploads/2015/12/Al-Salam-Hospital.jpg)" class="img-fluid jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">ComSci Back Pain Hospital</h1>
        <p class="font-italic mb-0">โรงพยาบาลวิทยาการคอมพิวเตอร์</p>
    </div>
</div>


<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Menu</h2>
    <div class="row pt-4">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <a href="find_doctor.php">
                <img src ="img/doctor.png" class = "img-fluid w-50 mx-auto d-block"/>  
                </a>
              <h5 class="card-title">ค้นหาแพทย์</h5>
              <p class="card-text">ค้นหารายชื่อแพทย์ที่เชี่ยวชาญ</p>
              <a href="find_doctor.php" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
                <a href="health_plan.php">
                <img src ="img/contact-form2.png" class = "img-fluid w-50 mx-auto d-block"/>
                </a>
              <h5 class="card-title">โปรแกรมตรวจสุขภาพ</h5>
              <p class="card-text">รายละเอียดแพ็ตเกจโปรแกรมตรวจสุขภาพ</p>
              <a href="health_plan.php" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <a href="hospital_info.php">  
                <img src ="img/contact.png" class = "img-fluid w-50 mx-auto d-block"/>
                </a>
                <h5 class="card-title">ข้อมูลติดต่อโรงพยาบาล</h5>
                <p class="card-text">ข้อมูลเพิ่มเติมสำหรับการติดต่อโรงพยาบาล</p>
                <a href="hospital_info.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
      </div>
</div>
</div>

</body>
</html>