<?php
    session_start();
    include('server.php');
    if(isset($_POST['show_info'])) {
        $DrID = mysqli_real_escape_string($conn, $_POST['DrID']);
        $query = "SELECT * FROM doctor_qualification WHERE DrID = '$DrID'";
        $result = mysqli_query($conn,$query);

        $query1 = "SELECT * FROM doctor WHERE DrID = '$DrID'";
        $result1 = mysqli_query($conn,$query1);
        $row = mysqli_fetch_assoc($result);
        $row1 = mysqli_fetch_assoc($result1);
      
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find_doctor</title>
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
    .doctor{
        position: absolute;
        left: 120px;
        background-color: rgba(219, 236, 227, 0.897);
        width: 45%;
		height: 700px;
        border-radius: 25px;
        top: 160px;
      
    }
    .picdoc{
        border-radius: 70px;
        position: relative;
        left: 20px;
        top: 20px;
        width:120px;
        height:150px;
        margin-top: auto;
       
    }
    .column {
         float: left;
         width: 40%;
         padding: 10px;
         height: 150px; 
    }
    .row:after {
         content: "";
         display: table;
         clear: both;
    }
    .home{
        position: absolute;
        left:   20px;
		top: 145px;
        width: 60px;
        height: 40px;
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
            <a href="login.php" >
                <p class ="login-box">เข้าสู่ระบบ /<br> ลงทะเบียนผู้ป่วยใหม่</p>
            </a>
            
        </center>
    </div>
    <a href="First page.php" >
        <img src="img/home.png" alt="home"  class="home"  >
    </a>
    <div >
        <h1 >ข้อมูลแพทย์</h1>
    </div>    
    <p></p>
    <br></br> 

    <div style="width: 100%; height: 600px;" >
            <div class="doctor">
          
             <!--ดึงรูปกับชื่อแพทย์-->
             <div class="row">
                <div class="column">
                <?php echo '<img  alt="picdoc"  class="picdoc" src="data:image/jpeg;base64,'.base64_encode( $row1['Dr_image'] ).'"  >';?>

                </div>
                <div class="column">
                    <h3 style="color: rgb(26, 26, 187); position:relative ;  top: 30px; " >แพทย์ <?php echo $row1['FName'];?>  <?php echo $row1['LName'];?>  </h3> 
                    <p style="color: rgb(26, 26, 187); position:relative ;  top: 10px;"><?php echo $_SESSION['DName']?> </p>
                </div>
              </div>

               

                
                <h3 style="color: rgb(107, 211, 171);  position:relative ;left:20px;">ความชำนาญ</h3>
                <p style=" position:relative ;left:40px;"><?php echo $row1['Specialities']?></p>

                <br>
                <hr style="width: 90%; height: 0.2px; align:center; background-color: rgb(48, 48, 48);">


                <h3 style="color: rgb(107, 211, 171);position:relative ;left:20px;">ปริญญาบัตรและสถานศึกษา</h3>
                <p style=" position:relative ;left:40px;"><?php echo $row['Degree']?>&nbsp&nbsp <?php echo $row['Major']?> &nbsp&nbsp <?php echo $row['Year']?> </p>


                <br>
                <hr style="width: 90%; height: 0.2px; align:center; background-color: rgb(48, 48, 48);">

                <h3 style="color: rgb(107, 211, 171);position:relative ;left:20px;">ตารางเวลาตรวจของแพทย์</h3>
                <p style=" position:relative ;left:40px;"><?php echo $row1['DrDate']?></p>

                <p style=" position:relative ;left:40px;"><?php echo $row1['starttime']?> &nbsp - &nbsp <?php echo $row1['endtime']?></p>

                 <!--ดึงข้อมูล-->
                 <br>
                 <hr style="width: 90%; height: 0.2px; align:center; background-color: rgb(48, 48, 48);">
            </div>
    </div>

            
            <br><br>

         <div>
            <br></br>   
            <br></br>   
            <br></br>   
            <br></br>   
            <a href="find_doctor.php"><button class="button button1" style="position:absolute;margin-bottom: 5px; right: 100px">ย้อนกลับ</button></a>
            <br><br>
        </div>
    </div>
  
 

</body>
</html>