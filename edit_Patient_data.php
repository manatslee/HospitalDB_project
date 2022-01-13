<?php 
    session_start();
    include "server.php" ;
    $errors = array();
    $PSSN = $_SESSION['SSN'];
    if(isset($_POST['edit_data'])) {
        $Title = mysqli_real_escape_string($conn, $_POST['Title']);
        $FName = mysqli_real_escape_string($conn, $_POST['FName']);
        $LName = mysqli_real_escape_string($conn, $_POST['LName']);
        $underlying_disease = mysqli_real_escape_string($conn, $_POST['Underlying-decease']);     
        $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
        $BloodType = mysqli_real_escape_string($conn, $_POST['BloodType']);
        $Drug_allergy = mysqli_real_escape_string($conn, $_POST['Drug-allergy']);
        $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $Address = mysqli_real_escape_string($conn, $_POST['Address']);
        $Height = mysqli_real_escape_string($conn, $_POST['Height']);
        $Weight = mysqli_real_escape_string($conn, $_POST['Weight']);
        $PatientType = mysqli_real_escape_string($conn, $_POST['PatientType']);
        $BloodType = mysqli_real_escape_string($conn, $_POST['BloodType']);
        $HealthPlan = mysqli_real_escape_string($conn, $_POST['HealthPlan']);




        $user_check_query = "SELECT * FROM patient WHERE SSN = '$PSSN'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

         if (count($errors)==0){
            $null = NULL;
            $sql ="UPDATE Patient SET Title ='$Title',FName='$FName',LName='$LName',email='$email',
            Phone='$Phone',Gender='$Gender',Height='$Height',Weight='$Weight',
            Address='$Address',Underlying_decease='$underlying_disease',Drug_allergy='$Drug_allergy',HealthPlan='$HealthPlan',
            PatientType='$PatientType' WHERE SSN = '$PSSN'";
            mysqli_query($conn,$sql);

            $_SESSION['edited'] = 'แก้ไขข้อมูล';            
            header('location: InfoPatient_Out.php');
        } 
        else {
            array_push($errors, 'กรุณาลองใหม่อีกครั้ง');
            $_SESSION['error'] = 'กรุณาลองใหม่อีกครั้ง';
            header('location: InfoPatient_In.php');
        }

       

    }

?>