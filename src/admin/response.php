<?php
include("../includes/functions.php");
include("class.products.php");
if(isset($_GET['module'])){
	$module=$_GET['module'];
	switch($module){
		case 'login': $aname=$_POST['aname'];
									$pwd=md5($_POST['apassword']);
									$where="AdminName='$aname' AND AdminPassword='$pwd'";
									$sql=frameQuery("admin","*",$where);
									$query=dbquery($sql);
									if(numRows($query)==1){
										$_SESSION['aloggedin']=true;
										$_SESSION['aname']=$aname;
										$sql2=select("admin","*",$where);
										$aid=$sql2['AdminID'];
										$_SESSION['aid']=$aid;
										header("location: index.php");
									}
									else
										header("location: login.php");
									break;
									
		case 'logout': logout('aloggedin','login.php');
									 break;	
									 
		case 'addproduct': $fields=array("ProductName","ProductBrand","ProductPrice","ProductYear","ProductVisibility");
											 $values=array("$_POST[pName]","$_POST[pBrand]","$_POST[pPrice]","$_POST[pYear]","$_POST[pVisible]");
											 $obj=new products();
											 $obj->insert($fields,$values);
											 break;
											 
		case 'viewproduct': 
												break;
	}
}
?>
