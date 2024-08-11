<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$acti = $_GET['activity'];

$pic = $_FILES['pic']['tmp_name'];
$f_namep = $_FILES['pic']['name'];
move_uploaded_file($pic, "images/$f_namep");
$store_in = "<img src='images/$f_namep' width='400'>";
echo $store_in;

$status = 1;
if($acti=='on'){
    $status = 1;
}else{
    $status = 0;
}
$insert = "INSERT INTO testing_tbl values('','$fname','$lname','$iamge',$status)";
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
