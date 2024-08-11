<?php
session_start();
echo "<h1> Start Session</h1>";
$_SESSION['user'] = "admin";
$_SESSION['pass'] =123;

?>