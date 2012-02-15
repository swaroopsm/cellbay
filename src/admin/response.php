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
									 
		case 'addproduct': $fields=array("ProductName","ProductBrand","ProductPrice","ProductYear","ProductVisibility","ProductDesc");
											 $values=array("$_POST[pName]","$_POST[pBrand]","$_POST[pPrice]","$_POST[pYear]","$_POST[pVisible]","$_POST[pDesc]");
											 $obj=new products();
											 $obj->insert($fields,$values);
											 break;
											 
		case 'clearOrder': $oid=$_POST['oid'];
											 $cc=delete("orders","OrderID=$oid");
											 echo $cc;
											 break;
											 
		case 'delProd': $pid=$_POST['pid'];
										$pobj=new products();
										$pobj->view($pid);
										$loc=$pobj->getImage();
										$cc=delete("products","ProductID=$pid");
										if($cc){
											unlink("../uploads/".$loc);
										}
										echo $cc;
										break;
										
		case 'updateProduct': $pName=$_POST['pName'];
													$pBrand=$_POST['pBrand'];
													$pPrice=$_POST['pPrice'];
													$pYear=$_POST['pYear'];
													$pVisible=$_POST['pVisible'];
													$pID=$_POST['pID'];
													echo update("products",array("ProductName","ProductBrand","ProductPrice","ProductYear","ProductVisibility"),array($pName,$pBrand,$pPrice,$pYear,$pVisible),"ProductID=$pID");
													break;
													
		case 'checkPwd': $old=$_POST['oldPassword'];
										 $old=md5($old);
										 $row=select("admin","*","AdminID = $_SESSION[aid]");
										 if($row['AdminPassword']==$old){
										 	echo 1;
										 }
										 else{
										 	echo 2;
										 }
										 break;
	}
}
?>
