<?php
session_start();
echo "<h1> get Session</h1>";
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
echo "User name : $user and Password : $pass";

?>