<?php
if(isset($_GET['productID'])){
	include("../includes/functions.php");
	include("class.products.php");
	$id=$_GET['productID'];
	$pobj=new products();
	$pobj->view($id);
	echo "<h5>".$pobj->getBrand()." ".$pobj->getName()."</h5><hr><img class='thumbnail' src='$uploads/".$pobj->getImage()."' style='width: 200px;height: 200px;border: 1px solid #dedede;padding:10px; '/>";
}
?>
