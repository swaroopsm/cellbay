<?php
//session_start();
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
									$where="UserEmail='$uname' AND UserPassword='$pwd'";
									$sql=frameQuery("users","*",$where);
									$query=dbquery($sql);
									if(numRows($query)==1){
										$_SESSION['loggedin']=true;
										$_SESSION['uname']=$uname;
										$sql2=select("users","*",$where);
										$uid=$sql2['UserID'];
										$_SESSION['uid']=$uid;
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
else{
	if(isset($_GET['misc'])){
		include("includes/functions.php");
		$module=$_GET['misc'];
		switch($module){
			case 'logout':	logout('loggedin','index.php');
									break;
									
			case 'confirmOrder': $oid=$_POST['oid'];
													 $where="OrderID=$oid";
													 $cc=update("orders",array("OrderStatus"),array(1),$where);
													 echo $cc;
													 break;
													 
			case 'cancelOrder': $oid=$_POST['oid'];
													$where="OrderID=$oid";
													$cc=delete("orders",$where);
													echo $cc;
													break;
		}
	}
}
?>
