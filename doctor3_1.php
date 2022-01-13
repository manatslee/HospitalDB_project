<?php
    session_start();
    include('server.php');
   
    
    if(isset($_POST['select_date'])) {
        $Dnum = mysqli_real_escape_string($conn, $_POST['Dnum']);
        $nameOfDay = date('D', strtotime($_POST['date']));
        $day;
        if($nameOfDay == 'Mon')
            $day='จันทร์';
        else if($nameOfDay == 'Tue')
            $day='อังคาร';
        else if($nameOfDay == 'Wed')
            $day='พุธ';
        else if($nameOfDay == 'Thu')
            $day='พฤหัส';
        else if($nameOfDay == 'Fri')
            $day='ศุกร์';
        else if($nameOfDay == 'Sat')
            $day='เสาร์';
        else if($nameOfDay == 'Sun')
            $day='อาทิตย์';
        $day1 = mysqli_real_escape_string($conn, $day);
        $query = "SELECT * FROM doctor WHERE Dnum = '$Dnum' and DrDate LIKE '%$day1%'";
        $result = mysqli_query($conn,$query);


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
    * {
        box-sizing: border-box;
    }
    .noti{
        
        margin-top:350px;
      

    }

    .column {
    float: left;
  width: 33.33%;
  padding: 35px;  
  position: relative;
  left: 30px;
  top:200px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

  color: #000;
border: black;
  padding: 80px 200px;
  text-decoration: none;
}

.picdoc{
        border-radius: 70px;
        position: relative;
        left: 20px;
        top: 0px;
        width:100px;
        height:120px;
        margin-top: auto;
        display:inline-block;
    }
    .button {
  background-color: rgba(234,62,62,1);
  border: none;
  color: white;
  width: 130px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: absolute;
  bottom:30px;
  right: 30px;
  }

    .boxx{
    background-color: rgba(219, 236, 227, 0.897);
    border-radius:20px;
    padding: 20px 20px;
}
.submit{
    width: 170px;
        height: 40px;
        border-radius: 10px;
        font-family: Bai Jamjuree;
        font-size:18px;
        font-style: normal;
        font-weight: normal;
        color: azure;
        position: relative;
        left:200px;

        box-shadow: 3px 3px #888888;
        background-color: rgb(18, 40, 75);
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  
  }


}
</style>
<body style="width:100%;height:100%;">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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
    <?php
                                    
                                    $query1 = "SELECT * FROM department WHERE Dnum = '$Dnum'";
                                    $result1 = mysqli_query($conn,$query1);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    ?>
        <h1 style="font-size: 40px;">นัดหมายแพทย์ <?php echo $row1['DName'] ?> วัน<?php echo $day1 ?>ที่ <?php echo date("d/m/Y",strtotime($_POST['date'])) ?></h1>

    </div>    

    <?php   if (mysqli_num_rows($result) > 0):  ?>
        <div class="row">

            <?php while($row = mysqli_fetch_assoc($result)) :   ?>
              <div class="column" >
                        
                        <form class="boxx"  action="appoint_doc.php" method="POST" >
                        <?php echo '<img  alt="picdoc"  class="picdoc" src="data:image/jpeg;base64,'.base64_encode( $row['Dr_image'] ).'"  >';?>
                           
                            <input style="display: none;"  name="date" value="<?php echo date("d/m/Y",strtotime($_POST['date']))?>">
                            <input style="display: none;"  type = 'date' name="date1" value="<?php echo $_POST['date'] ?>">
                            <input style="display: none;" name="DName" value="<?php echo $row1["DName"]?>">
                            <input style="display: none;" name="DrID" value="<?php echo $row["DrID"]?>">
                            <input style="display: none;" name="FName" value="<?php echo $row["FName"]?>">
                            <input style="display: none;" name="LName" value="<?php echo $row["LName"]?>">
                            <input style="display: none;" name="starttime" value="<?php echo $row["starttime"]?>">
                            <input style="display: none;" name="endtime" value="<?php echo $row["endtime"]?>">


                            <h3 style="color: rgb(26, 26, 187); position:relative ; left: 20px; top: 10px; " >เเพทย์         
                                <?php echo $row["FName"]?>&nbsp&nbsp<?php echo $row["LName"]?>
                            </h3> 
                            <u style="position:relative ;left:20px;"><h4 >ตารางเวลาตรวจของแพทย์</h4></u>
                            <p style=" position:relative ;left:40px;"><?php echo $row['DrDate']?></p>    
                <p style=" position:relative ;left:40px;">เเพทย์ <?php echo $row['starttime']?>  -  <?php echo $row['endtime']?></p>

                            <button class="submit" name="appoint" type="submit">นัดหมายเเพทย์</button>
                                   
                        </form>
            
                           </div>
                        <?php endwhile ?>
                       </div>

                  

    <?php else :?>
        <center>
        <h2 class = "noti">ขออภัย ไม่พบเเพทย์ในวันดังกล่าว</h2>
    </center>
    <?php endif ?>
    <div style="position:absolute;bottom: 30px;right:30px">
                <a href= "doctor2_1.php">
                            <button class="button">ย้อนกลับ</button>
                        </a>    
                        </div>
</body>
</html>