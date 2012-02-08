<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'myphone': $pid=$_GET['pid'];
								$pobj=new products();
								$pobj->view($pid);
								echo "<div class='modal-header'>
								<h3>".$pobj->getBrand()." ".$pobj->getName()."</h3>
								</div><div class='modal-body'><img src='$uploads/".$pobj->getImage()."' width='400' height='400'/>".$pobj->getBrand()."</div>";
break;
}
}
?>
