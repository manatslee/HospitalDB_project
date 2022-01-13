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
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
</head>
<style>
.white-comtainer{
    background-color: linen;
}    
.blue-container{
    background-color: rgba(101,198,213,1);
}
.bg-cover {
    background-size: cover !important;
}
body {
    min-height: 100vh;
}    
.header{
    background-color: rgba(101,198,213,1);
    position: absolute;
    width: 100%;
	height: 136px;
	left: 0px;
	top: 0px;  
}
.logo{
    position: absolute;
    left:   0px;
    top: 0px;
   
}
.hospital{
    position: absolute;
    left:140px;
    top:20px;
    font-family: Bai Jamjuree;
    font-style: normal;
    font-weight: normal;
    font-size: 30px;
}
.user{
    position: absolute;
    top:0px;
    right: 320px;
    top: 24px;
}
.login-box{
    position: absolute;
    right:   20px;
    top: 25px;
    border: 2px solid rgba(195,195,6,1);
    background-color: rgba(243,245,231,0.878);
    border-radius: 8px;
    width : 280px;
    height : 80px;
    font-family: Bai Jamjuree;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
}
.login-box:active{
    background-color:  rgba(243, 245, 231, 0.664);
     transform: translateY(3px);
}
.menu {      
    width:30px;
    height:30px;   
    }
.dropdown {
    position: absolute;
    top: 180px;
    right: 160px;
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
.back{
    margin-left: 18.5em;
    margin-top: 10em;
}
.info{
    color: midnightblue;
}
</style>
<body style="width:100%;height:100%;background-color: linen;"> 
<script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
        
<!--header page-->
    <div class = "container-fluid blue-container">
        <div class ="row">
            <div class = "col">
                <img src="img/logo.png" width = "120px", height = "120px">
                <div class="hospital" >
                    <p>โรงพยาบาลวิทยาการคอมพิวเตอร์ <br> ComSci Back Pain Hospital</p>
                </div>
                <img class = "user" src="img/user.png" width = "80px", height = "80px">         
                <center>
                            <p class ="login-box"><?php 
                                echo $_SESSION['FName'];?><br>
                            <?php 
                                echo $_SESSION['LName'];?>
                            </p>
                       </center>
            </div>  
        </div>  
    </div>      


<div class = "container-fluid white-comtainer">
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
<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold info">ตารางนัดหมายแพทย์</h2>
    <div class="row pt-4">
        <div class="col-sm-12">

            <?php if (isset($_SESSION['deleted'])) : ?>
            <script >
                Swal.fire({
                    title: ' <?php 
                                echo $_SESSION['deleted'];
                                unset($_SESSION['deleted']);
                            ?>',
                    icon: 'success',

                    })
            </script>
            <?php endif?>
            <?php 
                $SSN = mysqli_real_escape_string($conn, $_SESSION['SSN']);
                $query = "SELECT * FROM appoint WHERE PSSN = '$SSN' ";
                $result = mysqli_query($conn,$query);
                
                if (mysqli_num_rows($result) > 0)  :    
            ?>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">วัน</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">อาคาร</th>
                    <th scope="col">แพทย์</th>
                    <th scope="col">สถานะการนัดหมาย</th>
                    <th scope="col">ยกเลิกการนัดหมาย</th>
                  </tr>
                </thead>
                <tbody>
              
                <?php   while($row = mysqli_fetch_assoc($result)) :   ?>
                  <tr>
                    <form action = 'cancel.php' method="POST">
                        <th scope="row"> <?php echo $row["appDate"];?> </th>   
                        
                                <?php
                                    $DrID = mysqli_real_escape_string($conn, $row["DrID"]);
                                    $query1 = "SELECT * FROM doctor WHERE DrID = '$DrID' ";
                                    $result1 = mysqli_query($conn,$query1);
                                    $row1 = mysqli_fetch_assoc($result1);
                                ?>
                               
                     
                         
                                <td >   <?php echo $row["appTime"];?>    </td>
                                <td><?php echo $row["Building"];?></td>
                                <td><?php echo $row1["FName"]; ?>&nbsp<?php echo  $row1["LName"]?></td>
                                <td><span style="color:rgb(32, 168, 91)">นัดหมายแล้ว</span></td>     

                                <input style="display:none" name='appDate' value="<?php echo $row["appDate"];?>" >                      
                                <input style="display:none" name='appTime' value="<?php echo $row["appTime"];?>" >   
                                <input style="display:none" name='DrID' value="<?php echo $row["DrID"];?>" > 

                                <td><button type="submit" name="delete" class="btn btn-danger" 
                                    onclick="return ConfirmDelete();" >ยกเลิกนัด</button></td>

                       
                      
     
                    </form>    
                  </tr>
              

                <?php endwhile ?>
    
                <script>
                    function ConfirmDelete() {
                        var x = confirm("Are you sure you want to delete?");
                        if (x)
                            return true;
                        else
                            return false;
                    }
                </script>    
                </tbody>
              </table>
              <?php else :?>

                <p style="padding-left:30px">คุณยังไม่มีการนัดหมายเเพทย์</p>



            <?php endif ?>
        </div>
    </div>
    <div class ="container py-5 mt-3"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</div>

</body>
</html>