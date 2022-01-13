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
    <title>Comsci Back Pain Hospital</title>
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

    .button{
        position: absolute;
        top: 150px;
        left: 70px;
        color: rgb(0, 0, 128);
        font-family: Bai Jamjuree;
    }

    .back_button{
        position: absolute;
        top: 670px;
        right: 60px;
        width: 150px;
        height: 50px;
        font-size: 25px;
        background-color: rgb(221, 39, 39);
        color: rgb(255,255,255);
        border-radius: 10px;
        font-family: Bai Jamjuree;
    }

    .box1{
        position: absolute;
        top: 250px;
        left: 300px;
        width: 900px;
        height: 100px;
        border: 2px solid rgba(152,208,159,1);
        padding-left: 30px;
        font-family: Bai Jamjuree;
    }

    .box2{
        position: absolute;
        top: 324px;
        left: 300px;
        width: 900px;
        height: 100px;
        border: 2px solid rgba(152,208,159,1);
        padding-left: 30px;
        background-color: rgba(152,208,159,1);
        font-family: Bai Jamjuree;
    }

    .box3{
        position: absolute;
        top: 428px;
        left: 300px;
        width: 900px;
        height: 200px;
        border: 2px solid rgba(152,208,159,1);
        padding-left: 30px;
        font-family: Bai Jamjuree;
    }
    .boxbox{
        position: absolute;
        top: 530px;
        left: 330px;
        color: rgb(218, 30, 30);
        font-family: Bai Jamjuree;
    }
    .menu {      
    width:30px;
    height:30px;   
    }
.dropdown {
    position: absolute;
    top: 180px;
    right: 100px;
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
    
    <div class="header" >
         <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
         <div class="hospital" >
             <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
            <center>
                    <p class ="login-box"><?php echo $_SESSION['FName'];?><br><?php echo $_SESSION['LName'];?></p>

            </center>
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

    <div class="button">
        <h1>รายละเอียดยา</h1>
    </div>
    <a href='med1_latest .php'>
        <button class="back_button">ย้อนกลับ</button>
    </a>
    </div>
    <?php
        $SSN = mysqli_real_escape_string($conn,$_SESSION['SSN']);
        $query = "SELECT * FROM treat WHERE PSSN = '$SSN'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) :
    ?>
    <?php 
        $row = mysqli_fetch_assoc($result);
        $Dnum = mysqli_real_escape_string($conn, $row['DrID']);
        $query1 = "SELECT * FROM doctor WHERE DrID = '$Dnum'";
        $result1 = mysqli_query($conn,$query1);
        $row1 = mysqli_fetch_assoc($result1);
    ?>
    
        <div class="box1">
            <ul style="padding-left: 0pt; list-style-type:none; width: 100%">

            <li style="float: left;font-size: 35px;"><label ><?php echo $row['PSSN'];?></label></li>
            
            <li style="float: right;padding-right: 30px;"><label> <?php echo $row['TreatDate'];?></label></li>
            <br>
            <li style="float: right;padding-right: 30px;"><label> <?php echo $row1['FName']," ",$row1['LName'];?></label></li>
            
            </ul>
        </div>

        <div class="box2">
            <ul style="padding-left: 0pt; list-style-type:none; width: 100%">

            <li style="float: left;font-size: 30px;"><label ><?php echo $row['MedName'];?><br><!--?php echo $row['MedWarning'];?--></label></li>
            
            <li style="float: right;padding-right: 30px;color: rgb(105,105,105);"><label  ><?php echo $row['MedReg_No'];?></label></li>
        </div>

        <div class="box3">
            <ul style="padding-left: 0pt; list-style-type:none; width: 100%">

            <li style="float: left;font-size: 25px;"><label ><?php echo $row['MedInstruction'];?></label></li>
            
            <li style="float: right;padding-right: 30px;color: rgb(105,105,105);"><label  > Mfg. <?php echo $row['MedMFD'];?><br>Exp. <?php echo $row['MedEXD'];?></label></li>
        </div>

        <div class="boxbox">
            <h4><?php echo $row['MedWarning'];?></h4>
        </div>
    <?php endif ?>  
</body>
</html>