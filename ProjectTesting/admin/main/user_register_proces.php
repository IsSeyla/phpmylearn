<?php
    $con = mysqli_connect("localhost","root","","db_mysql");
    $user_name = $_GET['userName'];
    $password = $_GET['pwd'];
    $comfirm_pwd = $_GET['comfirm_pwd'];
    if($password !=$comfirm_pwd){
        echo 'Password mismatched';
        echo '<a href=register.php> Go to register again!!';
    }
    else{
        // password_hash for convert to number cannot read 
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO client_tbl VALUES (null,'$user_name','$password') ";
        $result = mysqli_query($con,$sql);
        if($result=true){
            echo"<script> alert('Login Success'); </script>";
            header('location:login.php');
            
        }else{
            echo "register not successfull";
        }
    }

?>