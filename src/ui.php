<?php
if(isset($_GET['module'])){
include("includes/functions.php");
$module=$_GET['module'];
switch($module){
case 'getPhoneBrand': $brand=$_POST['brand'];
											$where="ProductBrand='".$brand."'";
											$query=frameQuery("products","*",$where);
											$num=numRows(mysql_query($query));
											if($num>1){
												$row=select("products","*",$where);
												
											}
											else{
												$row=select("products","*",$where);
											}
											break;
 ?>



<?php
break;
}
}
?>
