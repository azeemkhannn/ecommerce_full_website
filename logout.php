<?php
$con = mysqli_connect("localhost","root","","projectweb");
  session_start();
$_SESSION=[""];
session_unset();
session_destroy();
header("Location: login.php");
?>