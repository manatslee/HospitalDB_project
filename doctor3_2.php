<?php
    session_start();
    include 'server.php';
    $Dnum = "";
    if(isset($_POST['Dno'])){
        $_SESSION['Dno'] = $_POST['Dno'];
        $Dnum = $_SESSION['Dno'];   
    }

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
</style>
<body style="width:100%;height:100%;">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <div class="header" >
         <img class = "logo" src="img/logo.png" width = "130px", height = "130px">
         <div class="hospital" >
             <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
        </div>
        <img class = "user" src="img/user.png" width = "90px", height = "90px">         
            <center>
                <a href="" >
                    <p class ="login-box"><?php echo $_SESSION['FName']."<br>".$_SESSION['LName'];?></p>
                </a>
                
            </center>
    </div>
    <div  id= "_ga">
        <h1 style="font-size: 50px;">นัดหมายแพทย์</h1>
    </div>    
    <div class="row" style="margin-top: 260px; margin-left: 200px; width: 750px;">
        <div class="column" style="width: 40%;">
            <h2 style="font-size: 20px; color: rgba(13,13,138,1);">กรุณาเลือกวันที่</h2>
            <form action="/action_page.php">
                <input type="date" id="birthday" name="birthday" style="height: 40px; width: 250px; background-color: rgb(225, 239, 243); color: rgba(13,13,138,1); font-size: 20px;">
              </form>
        </div>
        <div class="column">
            <h2 style="font-size: 20px; color: rgba(13,13,138,1);">กรุณาเลือกช่วงเวลา</h2>
            <form action="/action_page.php">
                <select name="time" id="time" style="height: 40px; width: 250px; background-color: rgb(225, 239, 243); color: rgba(13,13,138,1); font-size: 20px;">
                    <option value="time0">ช่วงเวลาที่สะดวกนัดหมาย</option>
                    <option value="time1">09:00-10:00น.</option>
                    <option value="time2">10:00-11:00น.</option>
                    <option value="time3">13:00-14:00น.</option>
                    <option value="time4">14:00-15:00น.</option>
                    <option value="time5">15:00-16:00น.</option>
                </select>
            </form>
        </div> 
    </div>
    <div style="margin-left: 650px;">
        <div class="row"></div>
        <br><br><br><br>
            <div class="column" style="width: 60%; text-align: right">
                <a href= "doctor2_2.php">
                <button class="button button1">ย้อนกลับ</button>
                </a>
            </div>
            <div class="column"  style="width: 40%;">
                <a href= "appointNoDoc.php">
                <button class="button button2">ถัดไป</button>
                </a>
            </div>
        </div>          
</body>
</html>