<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'myphone': $pid=$_GET['pid'];
								$pobj=new products();
								$pobj->view($pid);
								echo "<div style='width: 600px;'><div class='modal-header'>
								<h3>".$pobj->getBrand()." ".$pobj->getName()."</h3>
								</div><div class='modal-body'><div style='float: left; style='width: 300px; height: 250px;border:1px solid red;'><img src='$uploads/".$pobj->getImage()."' width='250' height='200'/></div>
								<div>
								<table style='width: 300px;'>
								<tr>
									<td><b>Model Name: </b>
									<td>".$pobj->getName()."	
								</tr>
									
								<tr>
									<td><b>Price: </b><td>Rs. ".$pobj->getPrice()."	
								</tr>
								
								<tr>
									<td><b>Manf. Year: </b><td>Rs. ".$pobj->getYear()."	
								</tr>
								<tr>
									<td>
									<td>
								</tr>
								</table>
								</div>
								</div></div>";
break;
}
}
?>
