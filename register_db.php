<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])) {
        $SSN = mysqli_real_escape_string($conn, $_POST['SSN']);
        $ExpSSN = mysqli_real_escape_string($conn, $_POST['ExpSSN']);
        $Title = mysqli_real_escape_string($conn, $_POST['Title']);
        $FName = mysqli_real_escape_string($conn, $_POST['FName']);
        $LName = mysqli_real_escape_string($conn, $_POST['LName']);
        $Bdate = mysqli_real_escape_string($conn, $_POST['Bdate']);
        $underlying_disease = mysqli_real_escape_string($conn, $_POST['underlying_disease']);     
        $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
        $BloodType = mysqli_real_escape_string($conn, $_POST['BloodType']);
        $Drug_allergy = mysqli_real_escape_string($conn, $_POST['Drug_allergy']);
        $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $Address = mysqli_real_escape_string($conn, $_POST['Address']);
   
  
        $query = "SELECT * FROM patient ";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        $HN =  str_pad(strval($num), 6, "0", STR_PAD_LEFT);




        $user_check_query = "SELECT * FROM patient WHERE SSN = '$SSN'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if ($result['SSN'] == $SSN){
                    array_push($errors, "Username already exists");
            }
         

        }
        

        if (count($errors)==0){
            $null = NULL;
            $sql ="INSERT INTO patient(HN, SSN, Title , FName, LName, ExpSSN, Bdate, email, Phone, Gender, Height, Weight, BloodType, Address, Underlying_decease, Drug_allergy, HealthPlan, PatientType) 
            VALUES ('$HN','$SSN' ,'$Title','$FName','$LName','$ExpSSN','$Bdate','$email','$Phone','$Gender','$null','$null','$BloodType','$Address','$underlying_disease','$Drug_allergy','$null','$null')";
            mysqli_query($conn,$sql);

            $_SESSION['register'] = "กรุณาเข้าสู่ระบบ";            
            header('location: login.php');
        } else {
            array_push($errors, "รหัสบัตรประชาชนนี้ได้ทำการลงทะเบียนเเล้ว ");
            $_SESSION['error'] = "กรุณาลองใหม่อีกครั้ง";
            header("location: register.php");
        }

    }

?>