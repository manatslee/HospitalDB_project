<?php
    session_start();
    include('server.php');
    if(isset($_POST['findDr'])) {
        $Dnum = mysqli_real_escape_string($conn, $_POST['Dnum']);
        $query = "SELECT * FROM doctor WHERE Dnum = '$Dnum'";
        $result = mysqli_query($conn,$query);

        
    }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor_list</title>
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
  position: absolute;
  bottom:30px;
  right: 30px;
  }
  .button1 {background-color: rgba(234,62,62,1);}
  .button2 {background-color: green;}
    .doc{
        background-color: rgba(219, 236, 227, 0.897);
        width: 450px;
        height: 190px;
        border-radius: 25px;
        display: flex;
        
    }
    .frame{
        position:absolute;
        left:5%;
        top:160px;
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
    .column {
        float: left;
        width: 40.0%;
        padding: 15px;
    }

/* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
         clear: both;
    }
    @media screen and (max-width:600px) {
        .column {
         width: 100%;
        }
    }
    .column2 {
        float: left;
        width: 200px;
        padding: 10px;
        height: 150px; 
    }

    .row2:after {
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

    .submit{
        width: 100px;
        height: 40px;
        border-radius: 10px;
        font-family: Bai Jamjuree;
        font-size:18px;
        font-style: normal;
        font-weight: normal;
        color: azure;
        position: relative;
        left:300px;

        box-shadow: 3px 3px #888888;
        background-color: rgb(18, 40, 75);
    }
    ul {
        position: absolute;
        top:150px;
        left: 15%;
  list-style-type: none;
  margin: 0;

  width: 40%;

}

li .aa {
  display: block;
  color: #000;
border: black;
  padding: 80px 200px;
  text-decoration: none;
}
.boxx{
    background-color: rgba(219, 236, 227, 0.897);
    border-radius:20px;
    padding: 20px 40px;
}
  .column {
    float: left;
  width: 33.33%;
  padding: 35px;  
  position: relative;
  left: 10px;
  top:160px;

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

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  
  }
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
            <p class ="login-box"><?php 
                    echo $_SESSION['FName'];?><br>
                <?php 
                    echo $_SESSION['LName'];?>
            </p>
        </center>
    </div>   
    <a href="First page login.php" >
        <img src="img/home.png" alt="home"  class="home"  >
    </a>
  
    <div class="row">
             
              
       
                        <?php  while($row = mysqli_fetch_assoc($result)) :   ?>
                         <div class="column" >
                        
                                <form class="boxx"  action="doctor_info2.php" method="POST" >
                                    <?php echo '<img  alt="picdoc"  class="picdoc" src="data:image/jpeg;base64,'.base64_encode( $row['Dr_image'] ).'"  >';?>

                                    <input style="display: none;" name="DrID" value="<?php echo $row["DrID"]?>">
                                    <h3 style="color: rgb(26, 26, 187); position:relative ; left: 20px; top: 10px; " >เเพทย์         
                                        <?php echo $row["FName"]?>&nbsp&nbsp<?php echo $row["LName"]?>
                                    </h3> <?php
                                    
                                    $query1 = "SELECT * FROM department WHERE Dnum = '$Dnum'";
                                    $result1 = mysqli_query($conn,$query1);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    ?>
                                        <?php $_SESSION['DName'] = $row1["DName"] ?>
                                    <p style="color: rgb(26, 26, 187); position:relative ; left: 20px; top: 10px;"><?php echo $row1["DName"]?></p>
                                   
                                        <button class="submit" name="show_info" type="submit">ดูประวัติ</button>
                                   
                        </form>
            
                           </div>
                        <?php endwhile ?>
                        
    </div>

        </li>
        </ul>
          

  
    <br><br><br><br><br><br><br><br><br><br>
            
    

    <a href="find_doctor2.php"><button class="button button1"style="position:absolute;margin-bottom: 5px; right: 250px">ย้อนกลับ</button></a>
    <div>
    <br><br><br><br>


</body>
</html>