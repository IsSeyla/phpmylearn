<?php
    session_start();
    $ch = $_SESSION['logein'];
    if($ch != 1){
        header('location:login.php');
    }

    
    $con = mysqli_connect("localhost","root","","db_mysql");
    session_start();
    $user_name = $_GET['userName'];
    $password = $_GET['pwd'];
    $sqlstr = "SELECT * FROM client_tbl where user_name ='$user_name' ";
    
    $result = $con -> query($sqlstr);
    $row = mysqli_fetch_assoc($result);
    $db_password =$row['user_pwd'];


    if(password_verify($password,$db_password)){
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_pwd'] = $password;
        $_SESSION['logein'] = 1;
  
        header('location:home.php');
    }
    else{
        header('location:login.php');
    }
        

?>