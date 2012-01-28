<?php
session_start();
//echo $_GET['module'];
if(isset($_GET['class'])){
include("includes/functions.php");
$class=$_GET['class'];
switch($class){
case 'users':	include("includes/class.users.php"); 
		if(isset($_GET['module'])){
		switch($_GET['module']){
		case 'signup':  $fields=array('UserName','UserEmail','UserPassword');
				$pwd=md5($_POST['upwd']);
			 	$values=array($_POST['uname'],$_POST['uemail'],$pwd);
			 	$obj=new users();
			 	$returnVal=$obj->create($fields,$values);
			 	echo $returnVal;
				break;
				
		case 'checklogin': 	$uname=$_POST['uname'];
									$pwd=md5($_POST['password']);
									
									$sql=dbquery("SELECT * FROM users WHERE UserEmail='$uname' AND UserPassword='$pwd'");
									echo mysql_num_rows($sql);
									if(mysql_num_rows($sql)==1){
										$_SESSION['loggedin']=true;
										$_SESSION['uname']=$uname;
										header("location: dashboard.php");
									}
									else
										header("location: index.php");
									break;
		}
		}
		break;
	}
	
}
?>
