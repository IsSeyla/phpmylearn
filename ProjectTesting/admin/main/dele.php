<?php
include("main.php");
$con = mysqli_connect("localhost","root","","db_mysql");

$id = $_GET['id'];
//$sql = "DELETE FROM testing WHERE id = $id";
$sql = "UPDATE testing SET activity = 0 WhERE id = $id";
$result = mysqli_query($con,$sql);
$con->close();

header('Location:home.php');
?>