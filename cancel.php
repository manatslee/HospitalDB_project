<?php 

session_start();
include('server.php');

  
    if(isset($_POST['delete'])) {
        $PSSN = mysqli_real_escape_string($conn, $_SESSION['SSN'] );
        $appDate = mysqli_real_escape_string($conn, $_POST['appDate']);
        $appTime = mysqli_real_escape_string($conn, $_POST['appTime']);
        $DrID = mysqli_real_escape_string($conn, $_POST['DrID']);

        $query = "DELETE FROM appoint WHERE PSSN = '$PSSN' AND appDate = '$appDate' AND appTime = '$appTime'AND DrID = '$DrID' ";
        
        $result = mysqli_query($conn,$query);


        $_SESSION['deleted'] = "ลบข้อมูลเสร็จสิ้น";
        header('location: check_schedule.php');
    }

?>