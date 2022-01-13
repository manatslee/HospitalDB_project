<?php
    session_start();
    include 'server.php';

    if (isset($_SESSION['register'])){}
    else {
        echo "Edit Again!!!.";
        echo "location: InfoPatient_In.php";
    }


    $PSSN = $_SESSION['SSN'];
    $query = "SELECT * FROM PATIENT WHERE SSN = '$PSSN'";
    $result_HN = mysqli_query($conn, $query);   
    if (mysqli_num_rows($result_HN) == 1) {
        while($data = mysqli_fetch_assoc($result_HN)) {
          $_SESSION['HN'] = $data['HN'];
          $_SESSION['Title'] = $data['Title'];
          $_SESSION['FName'] = $data['FName'];
          $_SESSION['LName'] = $data['LName'];
          $_SESSION['Bdate'] = $data['Bdate'];
          $_SESSION['email'] = $data['email'];
          $_SESSION['Phone'] = $data['Phone'];
          $_SESSION['Gender'] = $data['Gender'];
          $_SESSION['Height'] = $data['Height'];
          $_SESSION['Weight'] = $data['Weight'];
          $_SESSION['BloodType'] = $data['BloodType'];
          $_SESSION['Address'] = $data['Address'];
          $_SESSION['decease'] = $data['Underlying_decease'];
          $_SESSION['Drug_allergy'] = $data['Drug_allergy'];
          $_SESSION['HealthPlan'] = $data['HealthPlan'];
          $_SESSION['PatientType'] = $data['PatientType'];
         }
      }
    if($_SESSION['Gender']=='F'){
        $Gender = "หญิง";
    }
    else{
        $Gender = "ชาย";
    }
    
    if($_SESSION['PatientType']=='IPD'){
        $Type = "IPD";
    }
    else{
        $Type = "OPD";
    }
    
    
    $queryAge = "SELECT Bdate, (YEAR(CURDATE())-YEAR(Bdate)) AS age FROM Patient WHERE SSN = '$PSSN'";
    $ageresult = mysqli_query($conn,$queryAge);
    if (mysqli_num_rows($ageresult) > 0){
        while($agerow = mysqli_fetch_assoc($ageresult)){
            $_SESSION['age'] = $agerow['age'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoPatient_Out</title>
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
    body{
        font-weight: 700;
        font-size: xx-large;
    }
    .form{
        width: 82%;
        font-weight: 500;
        font-size: 20.5px;
        border: 3px solid #f1f1f1;
        line-height: 80px;
        margin-left: 5%;
        grid-area: form;
        background-color:hsl(0, 61%, 86%);
        height: 250px;
    }
    .form2{
        width: 35%;
        font-weight: 500;
        font-size: 20.5px;
        border: 3px solid #f1f1f1;
        line-height: 80px;
        margin-left: 5%;
        grid-area: form;
        background-color:hsl(157, 44%, 78%);
        height: 320px;
        float: left;
    }
    .form3{
        width: 46.5%;
        font-weight: 500;
        font-size: 18.5px;
        border: 3px solid #f1f1f1;
        line-height: 80px;
        margin-right: 12.5%;
        grid-area: form;
        background-color:hsl(273, 74%, 85%);
        height: 320px;
        float: right;
    }
    .form4{
        width: 23%;
        font-weight: 500;
        font-size: 20.5px;
        border: 3px solid #f1f1f1;
        line-height: 80px;
        margin-left: 17%;
        grid-area: form;
        background-color:hsl(183, 66%, 78%);
        height: 160px;
        float: left;
    }
    .footer{
        grid-area: main;
        margin-left: 5%;
        font-size: xxx-large;
        line-height: 20px;
    }
    main{
        grid-area: main;
        height: 100px;

    }
    button {   
        background-color: #f3dc98;
        color: black;
        font-size: 25px;
        font-weight: 600;
        line-height: 15px;
        padding: 20px 20px;
        margin: 5px 0;
        border: 2px black;
        cursor: pointer;
        width: 100%;
        border-radius: 6px;
        text-align: center;
        width: auto;
    } 
    button:hover {   
        opacity: 1;
    }
    select{
        font-size: 32px;
        font-weight: 700;
    }
    select:focus{
        background-color: rgb(222, 234, 238);
    }
    input{  
        box-sizing: border-box;
        border: 1px solid #b4b4b4;
        font-weight: 700;
        text-align: center;
        font-size: 19px;
        background-color: #EFEFEF;
        color: #016a9e
    }  
    input:focus {
        background-color: rgb(222, 234, 238);
    }
    .menu {
        width:70px;
        height:40px;   
    }
    .dropdown-content {
        position: absolute;
        display: none;
        background-color: #f1f1f1;
        min-width: 0px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        width: 200px;
        right: 30px;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        font-size: 25px;
        text-decoration: none;
        display: block;
    }
    .dropdown a:hover {
        background-color: #ddd;
    }
    .show {
        display: block;
    }
    
</style>
<body style="width:100%;height:100%;">
    
    <div class="header" >
         <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
         <div class="hospital" >
             <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
            <center>
                <a href="" >
                    <p class ="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName']?></p>
                </a>
                
            </center>
                 
    </div>
    <div class="main">
        <br>
    </div>
    <div  class="footer">
        <br><br><br><br><br><br><br><br>
        <FONT COLOR = "#1E4BA1" style="font-size: 50px;">&emsp;&emsp;ข้อมูลส่วนตัวผู้ป่วย</FONT>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href='check_schedule.php'><button width="220px" height="auto">ตารางนัดหมาย</button></a>
        <img src = "img/menu.png" onclick="toggleUp()" class="menu">
            <div id="myDropdown" class="dropdown-content">
            <a href="First page login.php">Home</a>
            <a href="InfoPatient.php">ดูข้อมูลส่วนตัว</a>
            <a href="med1_latest .php">ยาของผู้ป่วย</a>
            <a href="check_schedule.php">ตารางนัดหมายแพทย์</a>
            <a href="First page.php">Logout</a>
            </div>

        <script>
            function toggleUp() {
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

        <br><br>

        <form id='InfoPatient_In'action = "edit_Patient_data.php">
            <div class = 'form'>
            &ensp;<b>คำนำหน้า</b>&ensp;<Input Type="text" name="Title" size="7" value="<?php echo $_SESSION['Title']?>" readonly>
                &ensp;<b>ชื่อ</b> &nbsp;<Input Type="text" name="FName" size="12" value="<?php echo $_SESSION['FName']?>" readonly>
                &ensp;<b>นามสกุล</b> &nbsp;<Input Type="text" name="LName"size="12" value="<?php echo $_SESSION['LName']?>"  readonly>
                &ensp;<b>HN</b> &nbsp;<Input Type="text" name="HN"size="6" value="<?php echo $_SESSION['HN']?>"readonly>
                &ensp;<b>ประเภทผู้ป่วย</b> &nbsp;<Input Type="PatientType" name="ประเภทผู้ป่วย"size="6" value="<?php echo $_SESSION['PatientType']?>"readonly><br>
                &ensp;<b>รหัสประจำตัวประชาชน</b> &nbsp;<Input Type="SSN" name="รหัสประจำตัวประชาชน"size="19" value="<?php echo $_SESSION['SSN']?>"readonly>
                &ensp;<b>วัน/เดือน/ปีเกิด</b> &nbsp;<Input Type="Bdate" name="วันเดือนปีเกิด"size="13" value="<?php echo $_SESSION['Bdate']?>"readonly>
                &ensp;<b>อายุ</b> &nbsp;<Input Type="text" name="Age"size="5" value="<?php echo $_SESSION['age']?>"readonly>
                &ensp;<b>เพศ</b> &nbsp;<Input Type="text" name="Gender"size="6" value="<?php echo $Gender?>"readonly><br>
                &ensp;<b>อีเมลล์</b> &nbsp;<Input Type="text" name="email"size="20" value="<?php echo $_SESSION['email']?>"readonly>
                &ensp;<b>เบอร์ติดต่อ</b> &nbsp;<Input Type="text" name="Phone"size="12" value="<?php echo $_SESSION['Phone']?>"readonly>
                &ensp;<b>ที่อยู่</b> &nbsp;<Input Type="text" name="Address"size="40" value="<?php echo $_SESSION['Address']?>"readonly>
            </div>
            <div class ='form2'>
                &ensp;<b>ส่วนสูง</b> &nbsp;<Input Type="text" name="Height" size="3" value="<?php echo $_SESSION['Height']?>"readonly>
                &nbsp;<b>น้ำหนัก</b> &nbsp;<Input Type="text" name="Weight" size="3" value="<?php echo $_SESSION['Weight']?>"readonly>
                &nbsp;<b>หมู่เลือด</b> &nbsp;<Input Type="text" name="BloodType" size="3" value="<?php echo $_SESSION['BloodType']?>"readonly><br>
                &ensp;<b>โรคประจำตัว</b> &nbsp;<Input Type="text" name="Underlying-decease" size="30" value="<?php echo $_SESSION['decease']?>"readonly><br>
                &ensp;<b>ประวัติการแพ้ยา</b> &nbsp;<Input Type="text" name="Drug-allergy" size="27" value="<?php echo $_SESSION['Drug_allergy']?>"readonly><br>
                &ensp;<b>ประกันสุขภาพ</b> &nbsp;<Input Type="text" name="HealthPlan" size="29" value="<?php echo $_SESSION['HealthPlan']?>"readonly><br>    
            </div>


            <?php 
            $sql = "SELECT * FROM Contact_Person WHERE PSSN = '$PSSN'";
            $result2 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result2) > 0)  :  
            ?>
            <div class='form3'>
                <center><FONT style="font-size:30px;"><b><u>ข้อมูลบุคคลที่ติดต่อฉุกเฉิน</u></b></FONT></center>
                <?php   while($row = mysqli_fetch_assoc($result2)) :   ?>
                            <form id='ติดต่อ1'>
                            &ensp;<b>ชื่อ</b>&nbsp;<Input Type="text" name="ชื่อ" size="14" value="<?php echo $row['CName']?>"readonly>
                            &nbsp;<b>เบอร์</b>&nbsp;<Input Type="text" name="เบอร์" size="10" value="<?php echo $row['Ctel']?>"readonly>
                            &nbsp;<b>ความสัมพันธ์</b>&nbsp;<Input Type="text" name="ความสัมพันธ์" size="6" value="<?php echo $row['RelationShip']?>"readonly><br>
                            </form>
                <?php endwhile ?>         
            </div>
            <?php else :?>
                <p style="padding-left:30px">คุณยังไม่มีบุลคนติดต่อฉุกเฉิน</p>
            <?php endif ?>

            <?php 
            $sql = "SELECT * FROM ipd_admits WHERE PSSN = '$PSSN'";
            $result3 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result3) > 0)  :  
                $row2 = mysqli_fetch_assoc($result3);
                $_SESSION['Room'] = $row2['RoomNo'];
                $_SESSION['Building'] = $row2['PBuildng'];
            ?>
            <div class ='form4'>
            &ensp;<b>อาคารที่พัก</b> &nbsp;<Input Type="text" name="อาคารที่พัก" size="14" value="<?php echo $_SESSION['Room']?>"readonly><br>
                &ensp;<b>เลขห้องพัก</b> &nbsp;<Input Type="text" name="เลขห้องพัก" size="14" value="<?php echo $_SESSION['Building']?>"readonly>
            </div>
            <?php endif ?>
            &emsp;&emsp;&emsp;&emsp;&emsp;
        </form>
    </div>


</body>