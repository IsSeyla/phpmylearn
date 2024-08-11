<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");

$id = $_GET['id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$img = $_GET['pic'];
$acti = $_GET['activity'];
$status = 1;
if($acti=='on'){
    $status = 1;
}else{
    $status = 0;
}
 $up = "UPDATE testing set fname='$fname',lname='$lname','$img',activity= $status WHERE id =$id";
$result = mysqli_query($con,$up);
if($result === true){
    header('location:home.php');

}else{
    echo "Error";
}
?>