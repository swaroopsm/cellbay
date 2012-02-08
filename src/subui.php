<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'myphone': $pid=$_GET['pid'];
								$pobj=new products();
								$pobj->view($pid);
								echo "<div style='width: 550px;'>
								<div class='modal-header' style='float: left;'>
								<h3>".$pobj->getBrand()." ".$pobj->getName()."</h3>";
								echo "</div>";
								if(isset($_SESSION['loggedin'])){
									echo "<a href='#' title='Add to Cart'><img style='//float: right;' src='images/cart.jpg' width='40' height='40'/></a>";
								}
								else{
									echo "<a href='#' title='Sign in to buy'><img src='images/cart.jpg' width='40' height='40'/></a>";
								}
								echo "<div class='modal-body'><div style='float: left;width: 500px; height: 350px;border:1px solid #eeeeee;padding: 	5px;'><img width='500' height='350' src='$uploads/".$pobj->getImage()."'/></div>
								<div>
								<center><table style='width: 400px;'>
								<tr>
									<td><b>Model Name: </b>
									<td>".$pobj->getName()."	
								</tr>
									
								<tr>
									<td><b>Price: </b><td>Rs. ".$pobj->getPrice()."	
								</tr>
								
								<tr>
									<td><b>Manufactured Year: </b><td>Rs. ".$pobj->getYear()."	
								</tr>
								<tr>
									<td><b>Specification: </b>
									<td>".str_replace(";",",<br>",$pobj->getDesc())."
								</tr>
								<tr>
									<td>
									<td>
								</tr>
								</table>";
								echo "</div>
								</div></div>";
break;
}
}
?>
