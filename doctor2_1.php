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

    .button1 {background-color: rgba(234,62,62,1);
        border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
 
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;} 

    .button2 {background-color: green;
        border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
 
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;}

    * {
        box-sizing: border-box;
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
        <a href="First page login.php">
            <img class = "home" src="img/home.png" width="90px" height="55px">
        </a>  
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
        <center>
                            <p class ="login-box"><?php 
                                echo $_SESSION['FName'];?><br>
                            <?php 
                                echo $_SESSION['LName'];?>
                            </p>
                       </center>
                 
    </div>   
    <div  id= "_ga">
        <h1 style="font-size: 50px;">นัดหมายแพทย์</h1>
    </div> 
    <div class="row" style="margin-top: 260px; margin-left: 231px;">
        <div class="column">
            <h2 style="font-size: 30px; color: rgba(13,13,138,1);">กรุณาเลือกแผนก</h2>
            <form action="doctor3_1.php" method="post">
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
           
        </div>
        <div class="column">
            <h2 style="font-size: 30px; color: rgba(13,13,138,1);">กรุณาเลือกวันที่</h2>
            
             
            <input type="date" name="date" id="date" style="height: 40px; width: 250px; background-color:  rgb(225, 239, 243); color: rgba(13,13,138,1); font-size: 20px;" required>
            <div style="position:absolute;bottom: 100px;right:200px">
            
                   
                       
                  
                   
                        <button style= "" name="select_date" class="button2" type = "sumbit">ถัดไป</button>
                 
               
            </div>
        </div>
            </form>
            <div style="position:absolute;bottom: 100px;right:350px">
            <a href= "doctor1.php">
                            <button class="button1">ย้อนกลับ</button>
                        </a>    
                        </div>  </div>
    </div>
        

</body>
</html>