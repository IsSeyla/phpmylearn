<?php
session_start();

// session_destroy();
$_SESSION['logein'] = 0;
header('location:login.php');
?>