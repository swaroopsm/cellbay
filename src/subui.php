<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'myphone': $pid=$_GET['pid'];
								$pobj=new products();
								$pobj->view($pid);
								echo "<div style='width: 500px;'><div class='modal-header'>
								<h3>".$pobj->getBrand()." ".$pobj->getName()."</h3>
								</div><div class='modal-body'><div style='float: left;'><img src='$uploads/".$pobj->getImage()."' width='250' height='200'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div>
								<tr>
									<td><b>Model Name: </b><td>".$pobj->getName()."	
								</tr>
								<tr>
									<td><br>
								</tr>
								<tr>
									<b>Price: </b><td>Rs. ".$pobj->getPrice()."	
								</tr>
								</div>
								</div></div>";
break;
}
}
?>
