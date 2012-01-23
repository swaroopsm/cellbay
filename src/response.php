<?php
//echo $_GET['module'];
if(isset($_GET['class'])){
$class=$_GET['class'];
switch($class){
case 'users':	include("includes/class.user.php"); 
		if(isset($_GET['module'])){
		switch($_GET['module']){
		case 'signup': echo $_POST['uname'];
				break;
		}
		}
	}
	break;
}
?>
