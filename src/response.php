<?php
//echo $_GET['module'];
include("includes/config.php");
if(isset($_GET['class'])){
$class=$_GET['class'];
switch($class){
case 'users':	include("includes/class.users.php"); 
		if(isset($_GET['module'])){
		switch($_GET['module']){
		case 'signup':  $fields=array('UserName','UserEmail','UserPassword');
			 	$values=array($_POST['uname'],$_POST['uemail'],md5($_POST['upassword']));
			 	$obj=new users();
			 	$returnVal=$obj->create($fields,$values);
			 	echo $returnVal;
				break;
		}
		}
	}
	break;
}
?>
