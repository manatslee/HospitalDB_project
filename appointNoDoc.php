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
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    /* Create two equal columns that floats next to each other */
    .column {
    float: left;
    width: 30%;
    padding: 10px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
    .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button1 {background-color: rgba(234,62,62,1);} 
    .button2 {background-color: green;}
    .home{
        position: absolute;
        left:   20px;
		top: 145px;
        width: 90px;
        height: 55px;
    }

</style>
<body style="width:100%;height:100%;">
    
    <div class="header" >
         <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
         <div class="hospital" >
             <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <a href="First page login.html">
            <img class = "home" src="img/home.png" width="90px" height="55px">
        </a>  
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
            <center>
                <a href="" >
                    <p class ="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName'];?></p>
                </a>
                
            </center>
                 
    </div> 
    <div style="margin-top: 140px;">
        <img  src="img/logo.png" width = "70px", height = "70px" >
        <h1 style="text-align: center; line-height: 20px; font-size: 30px;">ใบนัด</h1>
        <p style="text-align: center; line-height: 5px;">โรงพยาบาลวิทยาการคอมพิวเตอร์</p>
        <p style="text-align: center; line-height: 5px;">ComSci Back Pain Hospital</p>
        <div class="row" style="line-height: 0px;">
            <div class="column" style="width: 45%; text-align: right; ">
                <!-- ดึงข้อมูลจากdatabase -->
                <p >HN: </p>
                <p>เบอร์โทรศัพท์: </p>
                <p>สิทธิการรักษา: </p>
            </div>
            <div class="column" style="width: 45%; margin-left: 50px;">
                 <!-- ดึงข้อมูลจากdatabase -->
                <p>ชื่อ-นามสกุล: </p>
                <p>วันที่ออกบัตร: </p>
            </div>
        </div>
        <center><table style="width:50%;">
            <tr>
                <th style="text-align: center;">แผนก</th>
                <th style="text-align: center;">เบอร์ภายใน</th>
                <th style="text-align: center;">วันที่นัด</th>
                <th style="text-align: center;">แพทย์ที่นัด</th>
              </tr>
              <tr>
                <!-- ดึงข้อมูลจากdatabase -->
                <td>aaa</td>
                <td>aaa</td>
                <td>aaa</td>
                <td>aaa</td>
              </tr>
        </table></center>
        <u style="font-weight: bold; margin-left: 320px; font-size: small;">หมายเหตุ</u>
        <p style="margin-left: 340px; line-height: 5px; font-size: small;">1. กรณีป่วย หรือ ไม่สามารถมาตามนัดได้ กรุณาโทรติดต่อล่วงหน้าเพื่อนัดครั้งถัดไปที่หมายเลขโทรศัพท์โรงพยาบาล</p>
        <p style="margin-left: 340px; line-height: 5px; font-size: small;">2. กรุณานำใบนัดมาตามวัน เวลาที่นัดด้วยทุกครั้ง และมาก่อนเวลาล่วงหน้า 30 นาที</p>
        <p style="margin-left: 340px; line-height: 5px; font-size: small;">3. กรณีคนไข้ใหม่ ให้มาก่อนเวลานัด 1 ชั่วโมง</p>
    
        <center><div class="row" style="width: 50%; text-align: center; margin-left: 200px;">
            <div class="column"  style="text-align: left;">
                <a href= "First page login.php">
                <button class="button button2" style="font-size: smaller;">ตกลง</button>
                </a>
            </div>
        </div></center>
    </div>
</body>
</html>