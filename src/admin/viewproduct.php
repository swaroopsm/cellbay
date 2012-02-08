<?php
if(isset($_GET['productID'])){
	include("../includes/functions.php");
	include("class.products.php");
	$id=$_GET['productID'];
	$pobj=new products();
	$pobj->view($id);
	echo "<div style='width: 550px;'><h5>".$pobj->getBrand()." ".$pobj->getName()."</h5><hr><div style='float: left;width: 250px;'><img class='thumbnail' src='../$uploads/".$pobj->getImage()."' style='width: 200px;height: 200px;border: 1px solid #dedede;padding:10px; '/></div>
	<div	style='font-size: 13px;'>
	
	<tr>
		<td>Brand: &nbsp;&nbsp;&nbsp; 
		<td><input style='color: #000;' id='pBrand' value='".$pobj->getBrand()."'/>
	</tr>
	<tr>
		<td><br><br>
	</tr>
	<tr>
		<td>Model: &nbsp;&nbsp;&nbsp;
		<input style='color: #000;' id='pName' value='".$pobj->getName()."'/>
	</tr>
		<tr>
		<td><br><br>
	</tr>
	<tr>
		<td>Price: &nbsp;&nbsp;&nbsp;&nbsp; 
		<input style='color: #000;' id='pBrand' value='".$pobj->getPrice()."'/>
	</tr>
	<tr>
		<td><br><br>
	</tr>
		<tr>
		<td>Year: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input style='color: #000;' id='pYear' value='".$pobj->getYear()."'/>
	</tr>
		<tr>
		<td><br><br>
	</tr>
	<tr>
		<td>Visibility: &nbsp; 
		<input style='color: #000;' id='pYear' value='".$pobj->getYear()."'/>
	</tr>
	<tr>
		<td><br><br>
	</tr>
	<tr>
		<td><button style='float: right;margin-right: 240px;' id='save' class='btn success'>Save</button>
	</tr>
		<tr>
		<td><br><br>
	</tr>
	</div></div>";
}
?>
<script type='text/javascript'>
$(document).ready(function(){
$("#save").click(function(){

});
});
</script>
