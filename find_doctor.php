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
    <title>find_doctor</title>
</head>
<style>
    #_ga {
		left: 107px;
		top: 150px;
		position: absolute;
		overflow: visible;
		width: 390px;
		white-space: nowrap;
		text-align: center;
		font-family: Microsoft JhengHei;
		font-style: normal;
		font-weight: bold;
		font-size: 60px;
		color: rgba(13,13,138,1);
	}
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
    .home{
        position: absolute;
        left:   20px;
		top: 145px;
        width: 60px;
        height: 40px;
    }
    .button2 {background-color: green;}
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
    <div  id= "_ga">
        <h1 style="font-size: 50px;">ค้นหาแพทย์</h1>
    </div>  
    <p></p>
    <br></br> 
    <br></br>
    <br></br>
    <br></br>
    <br></br>
            <!--div style="width: 100%; height: 200px;;" >
             <select  style="background-color: rgba(159, 204, 255, 0.822); position:relative ;left: 30px;" id="department" name="department">
                <option value="เลือกแผนก">ชื่อแผนก</option>
                <option value="แผนกผู้ป่วยนอก">แผนกผู้ป่วยนอก</option>
                <option value="แผนกผู้ป่วยใน"> แผนกผู้ป่วยใน</option>
                <option value="แผนกรังสีกรรม">แผนกรังสีกรรม</option>
                <option value="แผนกศัลยกรรม">แผนกศัลยกรรม</option>
                <option value="แผนกกุมารเวชกรรม">แผนกกุมารเวชกรรม</option>
                <option value="แผนกเวชศาสตร์ฟื้นฟู">แผนกเวชศาสตร์ฟื้นฟู</option>
                <option value="แผนกอายุรกรรม">แผนกอายุรกรรม</option>
                <option value="แผนกหู คอ จมูก">แผนกหู คอ จมูก </option>
                <option value="แผนกจิตเวช">แผนกจิตเวช</option>
             </select-->
             <div class="row" style="margin-top: 100px; margin-left: 231px;">
                <div class="column">
                    <h2 style="font-size: 30px; color: rgba(13,13,138,1);">กรุณาเลือกแผนก</h2>
                    <form action="doctor_list.php" method="post">
                        <select name="Dnum" id="department" style="height: 40px; width: 250px; background-color:  rgb(225, 239, 243); color: rgba(13,13,138,1); font-size: 20px;">
                            <option value="1">แผนกรังสีกรรม</option>
                            <option value="2">แผนกอายุรกรรม</option>
                            <option value="3">แผนกศัลยกรรม</option>
                            <option value="4">แผนกผิวหนัง</option>
                            <option value="5">แผนกสูตินรีเวช</option>
                            <option value="6">แผนกกุมารเวชกรรม</option>
                            <option value="7">แผนกเวชศาสตร์ฟื้นฟู</option>
                            <option value="8">แผนกหู คอ จมูก </option>
                            <option value="9">แผนกจิตเวช</option>
                        </select>
                        <br><br> <br><br><br></br><br></br>
                        <button class="button button2" name="findDr"type="submit"style="position:absolute; margin-bottom: 5px; right: 100px">ถัดไป</button>  
        
                    </form>
                    <a href="First page.php"><button class="button button1" style="position:absolute;margin-bottom: 5px; right: 250px">ย้อนกลับ</button></a>

                </div>
            </div>
            
            
            
         
               
            <div>
           
      
        </div>
    </div>
  
 

</body>
</html>