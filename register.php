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
    <title>ลงทะเบียนผู้ป่วยใหม่</title>
</head>
<style>
   
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

    .login{       
    
        width : 600px;
        height : 40px;
        border-radius: 300px;
        font-size:30px;
        padding: 12px 20px;
        box-shadow: 3px 3px #888888;
        display: inline-block;

     
    }
    .form{
        margin-top:240px;
        width : 700px;
        height : 400px;
        text-align:center;
        font-family: Bai Jamjuree;
        font-size:40px;
        font-style: normal;
        font-weight: normal;
      
        border: 5px solid rgba(48, 48, 48, 0.76);
        border-radius: 70px;
    }
    .button{
        width: 200px;
        height: 60px;
        border-radius: 70px;
        font-family: Bai Jamjuree;
        font-size:30px;
        font-style: normal;
        font-weight: normal;
        color: azure;
        box-shadow: 3px 3px #888888;
        background-color: rgba(29,76,148,1);
    }
    .search{
        position: fixed;
        top: 160px;
        left: 8%;
        width : 84%;
        height : 60px;
        border-radius: 300px;
        font-size:30px;
        padding: 12px 20px;
        display: inline-block;
        box-shadow: 3px 3px #888888;
    }
    .home{
        position: fixed;
        top: 163px;
        left: 18px;
    }
    .menu {
        
        width:90px;
        height:60px;   
    }


    .dropdown {
        position: fixed;
        top: 160px;
        right: 15px;
        
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 0px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {background-color: #ddd;}

    .show {display: block;}

    .box{
    
        position: relative;
        background-color: floralwhite;
        border: 3px solid rgba(48, 48, 48, 0.76);
        left:20%;
        bottom: 25px;
        width: 60%;
        height: 360px;
    }

    input{
        width : 150px;
        height : 15px;
       
        padding:4px 4px;
        display: inline-block;
    }
    select{
        width : 40px;
        height : 30px;
        border-radius: 1px;
     
        display: inline-block;
        
    }
    textarea{
        border-radius: 1px;
        padding:4px 4px;
        display: inline-block;
        
    }
    button{
        width: 14%;
        position: relative;
        left: 39%;
        top: 30px;
        background-color:rgba(46,174,19,1) ;
        border: 1px solid rgba(112,112,112,1);
        font-family: Bai Jamjuree;
        font-size:18px;
        font-style: normal;
        font-weight: normal;
        color: honeydew;
        height: 40px;
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body style="  background-color: rgba(101,198,213,1);width:100%;height:100%;">
    <a href="First page.php">
        <img style="position: absolute;top:15px" src="img/home.png" width="90px" height="55px">
    </a>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <center>
        <div>
            <img src="img/head.jpg" width="420px" height="103px">
            <h1 style="font-family: Bai Jamjuree;font-style: normal;font-weight: normal;position: relative;bottom:10px ">
                แบบฟอร์มกรอกข้อมูลสำหรับผู้ป่วยใหม่</h1>
            <h2  style="font-family: Bai Jamjuree;font-style: normal;
            font-weight: normal;position: relative;bottom:25px;color: rgba(255, 0, 0, 0.788);" >
               <u >
              
                <!-- notification message-->
                <?php if (isset($_SESSION['error'])) : ?>
                   
                <script >
                  
                    Swal.fire({
                        title: 'รหัสบัตรประชาชนนี้ได้ทำการลงทะเบียนเเล้ว',
                        text: ' <?php 
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>',
                        icon: 'error',
                        

                        })
        </script>
                            
                <?php endif ?>
               </u>
            </h2>
        </div>
    </center>
   
    <form class="box" action="register_db.php" method="post">
        <div style="position:relative;top: 20px;left: 30px;" >
       
        <label >เลขบัตรประชาชน : </label> <input type = "text" name='SSN' maxlength="13" minlength="13" required>
        <label> &nbsp&nbsp&nbsp&nbsp&nbsp วันหมดอายุบัตรประชาชน (วว/ดด/ปปปป) : </label> </label> <input type = "text" maxlength="10" minlength="10" name='ExpSSN' required><br><br>
        <label>คำนำหน้า : </label>  <input style="width: 80px;"list="Title" id="Title" name="Title" required>
        <datalist id="Title">
            <option value="เด็กชาย">เด็กชาย</option>
            <option value="เด็กหญิง">เด็กหญิง</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
          </select>
        </datalist>
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp ชื่อ : </label><input type = "text" name='FName' required>
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp นามสกุล : </label><input type = "text" name='LName' required><br><br>
        <label>วัน/เดือน/ปีเกิด : </label><input type = "date" name='Bdate' required>
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp เพศ : </label><select style="width: 80px;"  name="Gender"  required>
            <option value="M">ชาย</option>
            <option value="F">หญิง</option>

          </select>
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp หมู่เลือด : </label><select name="BloodType"  required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="O">O</option>
            <option value="AB">AB</option>
          </select><br><br>
          <label>โรคประจำตัว (ถ้ามี) : </label><input type = "text" name='underlying_disease' >
          <label>&nbsp&nbsp&nbsp&nbsp&nbsp ยาที่เเพ้ (ถ้ามี) : </label><input type = "text" name='Drug_allergy' ><br><br>


        <label>เบอร์โทรติดต่อ : </label><input type = "tel" name='Phone' required>
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp E-Mail : </label><input  style="width: 240px;" type = "email" name='email' required><br><br>
        <label style="position:relative;bottom: 70px;">ที่อยู่ : </label><textarea type = "text" name='Address' rows="5" cols="60" required></textarea><br><br>
       
             <button type = 'submit'  name ="reg_user" >บันทึก</button>
       
       
     </div>


        
       
        
    </form>
  

    
        
      
        
      
</body>
</html>