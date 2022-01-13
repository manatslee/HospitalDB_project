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
    #Component_5__1 {
		position: absolute;
		/* width: 622px;
		height: 200px; */
		left: 231px; 
		top: 260px;
		overflow: visible;
	}
    #_gb {
		position: absolute;
		width: 622px;
		height: 100px;
		left: 0px;
		overflow: visible;
	}
    #_gc {
		left: 141px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 342px;
		white-space: nowrap;
		text-align: center;
		font-family: Microsoft JhengHei;
		font-style: normal;
		font-weight: normal;
		font-size: 40px;
		color: rgba(13,13,138,1);
	}
    #myCheckBox{
        width: 40px;
		height: 40px;
        margin-left: 20px;
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
    <div id="Component_5__1" class="Component_5__1">
        <div >
            <br>
      
                <!--a href= "doctor2.html">
                <input id="myCheckBox" type="checkbox"  name="้haveName" value="Have">
                กดตรงนี้
                </a-->
                <a href>
                    <br>
                    <a href= "doctor2_1.php"><label for="haveName" style="font-size: 40px; color: rgba(13,13,138,1); margin-left: 20px;"> นัดหมายแบบระบุแพทย์</label></a>
                </a>
                <a href>
                <br><br><br>
                    <a href= "doctor2_2.php"><label for="haveName" style="font-size: 40px; color: rgba(13,13,138,1); margin-left: 20px;"> นัดหมายแบบไม่ระบุแพทย์</label></a>
                </a>
        
        </div>
        <br><br><br><br><br>
        <div>
            <a href= "First page login.php">
            <button class="button button1" style="margin-bottom: 5px; margin-left: 850px;">ย้อนกลับ</button>
            </a>
        </div>
    </div>  
</body>
</html>