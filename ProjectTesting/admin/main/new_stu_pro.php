<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$acti = $_GET['activity'];
// f = a , l = b , a = c

$status = 1;
if($acti=='on'){
    $status = 1;
}else{
    $status = 0;
}


// proccess insert 
$insert = "INSERT INTO testing values('','$fname','$lname',$status)";

$result = mysqli_query($con,$insert);

if($result===true){
    ?>
    <script >
        alert("success");

    </script>
   
    <?php
      header('location:home.php');
}
?>
