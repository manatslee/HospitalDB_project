<?php
    include "server.php";

session_start();
if (isset($_SESSION['success'])) {} 
else {
    echo "Please log in first to see this page.";
    echo "location: login.php";
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
      $_SESSION['Drug_allergy'] = $data['Drug-allergy'];
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
    <title>ประวัติคนไข้</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="width:100%;height:100%;">
    
    <div class="header" >
         <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
         <div class="hospital" >
             <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
            <center>
                <a href= >
                    <p class ="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName']?></p>
                </a>
                
            </center
                 
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

        <br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href='InfoPatient_In.php' style="font-size: 25px;">แก้ไขข้อมูลส่วนตัวผู้ป่วย</a><br><br>
            
        <form id='new_InfoPatient_1'>
            <div class = 'form'>
                &ensp;<b>คำนำหน้า</b>&ensp;<Input Type="text" name="คำนำหน้า" size="7" value="<?php echo $_SESSION['Title']?>" readonly>
                &ensp;<b>ชื่อ</b> &nbsp;<Input Type="text" name="ชื่อ" size="12" value="<?php echo $_SESSION['FName']?>" readonly>
                &ensp;<b>นามสกุล</b> &nbsp;<Input Type="text" name="นามสกุล"size="12" value="<?php echo $_SESSION['LName']?>"readonly>
                &ensp;<b>HN</b> &nbsp;<Input Type="text" name="HN"size="6" value="<?php echo $_SESSION['HN']?>"readonly>
                &ensp;<b>ประเภทผู้ป่วย</b> &nbsp;<Input Type="text" name="ประเภทผู้ป่วย"size="6" value="<?php echo $_SESSION['PatientType']?>"readonly><br>
                &ensp;<b>รหัสประจำตัวประชาชน</b> &nbsp;<Input Type="text" name="รหัสประจำตัวประชาชน"size="19" value="<?php echo $_SESSION['SSN']?>"readonly>
                &ensp;<b>วัน/เดือน/ปีเกิด</b> &nbsp;<Input Type="text" name="วันเดือนปีเกิด"size="13" value="<?php echo $_SESSION['Bdate']?>"readonly>
                &ensp;<b>อายุ</b> &nbsp;<Input Type="text" name="อายุ"size="5" value="<?php echo $_SESSION['age']?>"readonly>
                &ensp;<b>เพศ</b> &nbsp;<Input Type="text" name="เพศ"size="6" value="<?php echo $Gender?>"readonly><br>
                &ensp;<b>อีเมลล์</b> &nbsp;<Input Type="text" name="อีเมลล์"size="20" value="<?php echo $_SESSION['email']?>"readonly>
                &ensp;<b>เบอร์ติดต่อ</b> &nbsp;<Input Type="text" name="เบอร์ติดต่อ"size="12" value="<?php echo $_SESSION['Phone']?>"readonly>
                &ensp;<b>ที่อยู่</b> &nbsp;<Input Type="text" name="ที่อยู่"size="40" value="<?php echo $_SESSION['Address']?>"readonly>
            </div>
            <div class ='form2'>
            &ensp;<b>ส่วนสูง</b> &nbsp;<Input Type="text" name="ส่วนสูง" size="3" value="<?php echo $_SESSION['Height']?>"readonly>
                &nbsp;<b>น้ำหนัก</b> &nbsp;<Input Type="text" name="น้ำหนัก" size="3" value="<?php echo $_SESSION['Weight']?>"readonly>
                &nbsp;<b>หมู่เลือด</b> &nbsp;<Input Type="text" name="หมู่เลือด" size="3" value="<?php echo $_SESSION['BloodType']?>"readonly><br>
                &ensp;<b>โรคประจำตัว</b> &nbsp;<Input Type="text" name="ส่วนสูง" size="30" value="<?php echo $_SESSION['decease']?>"readonly><br>
                &ensp;<b>ประวัติการแพ้ยา</b> &nbsp;<Input Type="text" name="ส่วนสูง" size="27" value="<?php echo $_SESSION['Drug_allergy']?>"readonly><br>
                &ensp;<b>ประกันสุขภาพ</b> &nbsp;<Input Type="text" name="ส่วนสูง" size="29" value="<?php echo $_SESSION['HealthPlan']?>"readonly><br>      
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
                <p style="padding-left:30px">คุณยังไม่มีบุคคลติดต่อฉุกเฉิน</p>
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
    <br><br><br><br>

</body>