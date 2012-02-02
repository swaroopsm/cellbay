<?php
session_start();
$uname=$_POST['uname'];
$pass=$_POST['password'];
$_SESSION['loggedin']=true;
$_SESSION['uname']=$uname;
header("location: dashboard.php");
?>
