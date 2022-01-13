<?php 

    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $SSN = mysqli_real_escape_string($conn, $_POST['SSN']);
        $ExpSSN = mysqli_real_escape_string($conn, $_POST['ExpSSN']);
    }

    if(count($errors)==0){
        //$ExpSSN = md5($ExpSSN);
        $query = "SELECT * FROM patient WHERE SSN = '$SSN' AND ExpSSN = '$ExpSSN' ";
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['FName'] = $row['FName'] ;
            $_SESSION['LName'] = $row['LName'] ;
            $_SESSION['SSN'] =  $row['SSN'] ;
            $_SESSION['success'] = "You are now logged in";
            header('location: First page login.php');
        } else{
            array_push($errors, "หมายเลขรหัสบัตรประจำตัวประชาชนหรือวันหมดอายุบัตรประชาชนผิดพลาด กรุณาลองใหม่อีกครั้ง");
            $_SESSION['error'] = "กรุณาลองใหม่อีกครั้ง";
            header('location: login.php');
        }
    }
?>

