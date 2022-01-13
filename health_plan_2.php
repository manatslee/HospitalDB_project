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
.back{
    margin-left: 30em;
    margin-top: 13em;
}
.info{
    color: midnightblue;
}
.menu {      
    width:30px;
    height:30px;   
    }
.dropdown {
    position: absolute;
    top: 180px;
    right: 190px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 0px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 180px;
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
                   <a href="login.php" >
                       <p class ="login-box">เข้าสู่ระบบ /<br> ลงทะเบียนผู้ป่วยใหม่</p>
                   </a>
                </center>
            </div>  
        </div>  
    </div>      


<div class = "white-comtainer">
<!-- For Demo Purpose -->
<div class="container py-5">
    <div class="row pt-4">
        <div class="col sm-6 ">
                <h4 align ='center'>ใส่ใจดูแลกันด้วยแพ็กเกจคู่</h4>
                    <br><img src="img/ID1613700009.png" class = "img-fluid w-60 h-90 m-3"></a>
                
        </div>
        <div class="col-sm-6 ">
            <h4 align ='center'>แพ็กเกจพิเศษสำหรับเด็กและเยาวชน</h4>
                <br><img src="img/content_2020-01_large.png" class = "img-fluid w-60 h-90 m-3"></a>
                <a href ="health_plan.php">
                <button type="button" class="btn btn-danger back">Back</button>
                </a>
        </div>
    </div>
</div>
</div>

</body>
</html>