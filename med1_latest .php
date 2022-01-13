<?php
  session_start();
  include('server.php');
    $SSN = mysqli_real_escape_string($conn, $_SESSION["SSN"]);
    $query = "SELECT * FROM treat WHERE PSSN = '$SSN'";
    $result = mysqli_query($conn,$query);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comsci Back Pain Hospital</title>
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

    .button{
        position: absolute;
        top: 150px;
        left: 70px;
        color: rgb(0, 0, 128);
    }
    
    .column {
  float: left;
  top: 250px;
  width: 33.33%;  
  position: relative;
  left: 200px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  
  }
}
.menu {      
    width:30px;
    height:30px;   
    }
.dropdown {
    position: absolute;
    top: 180px;
    right: 100px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 0px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 180px;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown a:hover {background-color: #ddd;}
.show {display: block;}

.picdoc{
        border-radius: 70px;
        position: relative;
        left: 20px;
        top: 0px;
        width:300px;
        height:300px;
        margin-top: auto;
        display:inline-block;
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
                    <p class ="login-box"> <?php echo $_SESSION['FName'] ?><br><?php echo $_SESSION['LName'] ?></p>
                
            </center>
            <script>
              /* When the user clicks on the button, 
              toggle between hiding and showing the dropdown content */
              function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
              }
              
              // Close the dropdown if the user clicks outside of it
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
              <img src = "img/menu.png" onclick="myFunction()" class="menu">
              <div id="myDropdown" class="dropdown-content">
                <a href="First page login.php">Home</a>
                <a href="InfoPatient.php">ดูข้อมูลส่วนตัว</a>
                <a href="med1_latest .php">ยาของผู้ป่วย</a>
                <a href="check_schedule.php">ตารางนัดหมายแพทย์</a>
                <a href="First page.php">Logout</a>
              </div>
          </div>

    <?php 
      $SSN = mysqli_real_escape_string($conn,$_SESSION['SSN']);
      $query = "SELECT * FROM treat WHERE PSSN = '$SSN'";
      $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result) > 0) :
    ?>
    <div class="button">
        <h1>ยาของผู้ป่วย</h1>
        </div>
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <div class="column" >
          
           <form class="boxx"  action="med2.php" method="POST" >
           <?php echo '<img  alt="picdoc"  class="picdoc" 
           src="data:image/jpeg;base64,'.base64_encode( $row['Med_image'] ).'"  >';?>
          <h2><?php echo $row['MedName'];?></h2>
          <form action='med2.php' method='POST'>
            <button type='submit' name='selected_med' class="btn">เลือกยา</button>
          </form>
        </div>
       <?php endwhile ?>
    <?php endif ?> 
</body>
</html>