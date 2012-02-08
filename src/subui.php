<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'myphone': $pid=$_GET['pid'];
								$pobj=new products();
								$pobj->view($pid);
								echo "<div style='width: 550px;'><div class='modal-header'>
								<h3>".$pobj->getBrand()." ".$pobj->getName()."</h3>
								</div><div class='modal-body'><div style='float: left;width: 500px; height: 350px;border:1px solid #eeeeee;padding: 	5px;'><img width='500' height='350' src='$uploads/".$pobj->getImage()."'/></div>
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
									<td>
									<td>
								</tr>
								</table>
								<h4 style='margin-top: -20px;'>Sign In to buy this product</h4></center>
								</div>
								</div></div>";
break;
}
}
?>
