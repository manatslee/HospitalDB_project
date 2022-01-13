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
    margin-left: 18.5em;
    margin-top: 10em;
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


<div class = "white-comtainer">
<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold info">ข้อมูลติดต่อโรงพยาบาล</h2>
    <div class="row pt-4">
        <div class="col sm-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1521.1514412733334!2d100.60619019084739!3d14.074036282634923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27fed23555be9%3A0x5f1ee655507f8b44!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZIOC4oOC4suC4hOC4p-C4tOC4iuC4suC4p-C4tOC4l-C4ouC4suC4geC4suC4o-C4hOC4reC4oeC4nuC4tOC4p-C5gOC4leC4reC4o-C5jA!5e0!3m2!1sth!2sth!4v1620662764362!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-5 p-0">
            <div class="card bg-light mb-3" style="max-width: 22rem;">
                <div class="card-header">Phone:02-880-9900 ต่อ 1446-1449</div>
                <div class="card-body">
                  <h5 class="card-title">โรงพยาบาลวิทยาการคอมพิวเตอร์</h5>
                  <p class="card-text">อาคารบรรยายรวม 2 คณะวิทยาศาสตร์และเทคโนโลยี
                    มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต ปทุมธานี 12120</p>
                </div>
            </div>
                <a href ="First page login.php">
                <button type="button" class="btn btn-danger back">Back</button>
                </a>
        </div>
    </div>
</div>
</div>

</body>
</html>