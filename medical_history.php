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
if (mysqli_num_rows($result_HN) > 0) {
    while($data = mysqli_fetch_assoc($result_HN)) {
      $_SESSION['HN'] = $data['HN'];
    }
  }
?>
้<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการรักษา</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div id="browser">

<div class="header">
    <img class="logo" src="img/logo.png" width="130px" , height="130px">
    <div class="hospital">
        <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
    </div>

    <img class="user" src="img/user.png" width="90px" , height="90px">
    <center>
            <p class="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName']?></p>
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
            <a href="First page login.php">หน้าหลัก</a>
            <a href="InfoPatient.php">ดูข้อมูลส่วนตัว</a>
            <a href="medical_history.php">ประวัติการรักษา</a>
            <a href="med1_latest .php">ยาของผู้ป่วย</a>
            <a href="check_schedule.php">ตารางนัดหมายแพทย์</a>
            <a href="First page.php">ออกจากระบบ</a>
        </div>
    </div>
</div>

<div class="medical_history">
    <div id="history">
        <h1>ประวัติการรักษา</h1>
    </div>
</div>


<div class="table_history"></div>
<div>
    <?php 
            $SSN = mysqli_real_escape_string($conn, $_SESSION['SSN']);
            $sql = "SELECT * FROM treat WHERE PSSN = '$PSSN'";
            $result = mysqli_query($conn, $sql);
            

            if (mysqli_num_rows($result) > 0)  :  
                $row = mysqli_fetch_assoc($result);
                $_SESSION['Tdate'] =  $row["TreatDate"];
                $_SESSION['dose'] = $row["MedDose"];
                $_SESSION['symtptoms'] = $row["Symptoms"];
                $_SESSION['BP'] = $row["BP"];
                $_SESSION['Temp'] = $row['Temp'];
                $_SESSION['MedicineReg_No'] = $row["MedReg_No"];
                $_SESSION['MedicineName'] = $row["MedName"];
                $_SESSION['MedicineWarning'] = $row['MedWarning'];
                $_SESSION['MedMFD'] = $row['MedMFD'];
                $_SESSION['MedicineExpiredate'] = $row['MedEXD'];
                $_SESSION['MedicineInstruction'] = $row['MedInstruction'];
                $_SESSION['LabResult'] = $row['LabResult'];
                $_SESSION['TreatTime'] = $row['TreatTime']; 
                
                 
    ?>
        <table  class="a">
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr class="symand_HN">
                        <td>อุณหภูมิร่างกาย:<?php echo$_SESSION['Temp']."<br><br>ความดันโลหิต:".$_SESSION['BP']?></td>
                        <td class="hn">HN:<?php echo$_SESSION['HN']."<br>"."วันที่ได้รับการรักษา<br>".$_SESSION['Tdate'];echo"<br>เวลาทีได้รับการรักษา ".$_SESSION['TreatTime']?>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:top">อาการผู้ป่วย</th>
                        <th style="vertical-align:top">ข้อมูลยาที่ได้รับ<?php echo "<br>"?></th>
                    </tr>
                    <tr class="symtomp_and_med">
                        <td class = "detail"><?php echo $_SESSION['symtptoms']?></td>
                        <td class = "detail">
                            <?php
                                echo "ชื่อยา: ".$_SESSION['MedicineName']."<br>";
                                echo "เลขทะเบียนของยา: ".$_SESSION['MedicineReg_No']."<br>";
                                echo "จำนวนโดสของยา: ".$_SESSION['dose']."<br>";
                                echo "วันที่ผลิตยา: <br>";
                                echo "วันหมดอายุยา: ".$_SESSION['MedicineExpiredate']."<br>";
                                echo "คำแนะนำการใช้ยา: ".$_SESSION['MedicineInstruction']."<br>";
                                echo "คำเตือนการใช้ยา: ".$_SESSION['MedicineWarning']."<br>";
                                ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align:center;font-size: 18px;"> <a href="labresult.php"><button class="w3-button w3-hover-blue">คลิกดูผลแลป</button></a></td>
                    </tr>

                </table>
    <?php else :?>
        <h3 style="text-align:center;">คุณยังไม่มีประวัติการรักษา</p>

        <?php endif ?>
</div>

</body>
</html>