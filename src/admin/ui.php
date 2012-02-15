<?php
include("../includes/functions.php");
if(isset($_GET['ui'])){
$ui=$_GET['ui'];
switch($ui){
case 'addproduct': ?>
<div id="msg"></div>
<h3>Add Product</h3>
<form>
<table>
<tr>
<td><label>Product Brand: 
<td>
<select id="pBrand" style='background-color: #fff;'>
<option value="" selected="selected">-Select Brand-</option>
<option value="Samsung">Samsung</option>
<option value="Nokia">Nokia</option>
<option value="LG">LG</option>
<option value="Sony Ericsson">Sony Ericsson</option>
<option value="Motorola">Motorola</option>
<option value="HTC">HTC</option>
<option value="Blackberry">Blackberry</option>
<option value="Apple">Apple</option>
<option value="Micromax">Micromax</option>
<option value="Karbonn">Karbonn</option>
</select>
</td>
</tr>
<tr>
<td><label>Product Name: 
<td><input type="text" id="pName"/>
</tr>
<tr>
<td><label>Product Description: 
<td>
	<textarea rows="6" cols="40" id="pDesc" placeholder="Separate by a semicolon"></textarea>
</td>
</tr>
<tr>
<td><label>Product Price: 
<td><input type="text" id="pPrice"/>
</tr>
<tr>
<td><label>Manufactured Year: 
<td><input type="text" id="pYear"/>
</tr>
<tr>
<td><label>Product Visibility: 
<td>
<select id="pVisible" style="background-color: #fff;">
<option value="1" selected="selected">Public</option>
<option value="0">Private</option>
</select>
</td>
</tr>
<tr>
<td>
<td>
</tr>
</table>
<div style="margin-top: -20px;">
<input style="margin-left: 40px;" id="newProduct" type="button" class="btn success" value="Submit"/>
<input style="margin-left: 10px;" class="btn danger" type=reset value="Reset"/>
</div>
</form>
<?php
break;

case 'viewproduct': $row=select("products","*");
										$count=count($row);
										if($count>1){
										echo "<div class='row'>";
										for($i=0;$i<$count;$i++){
										echo "<div class='span3' id='prodRow".$row[$i]['ProductID']."'>";
										echo "<h5>".$row[$i]['ProductBrand']." ".$row[$i]['ProductName']."</h5><ul class='media-grid'><li>";
if($row[$i]['ProductImage']==''){
echo "<a rel='facebox' href='addimage.php?productID=".$row[$i]['ProductID']."'><img class='thumbnail' src='' width='140' height='40' alt=''>Add Image</a>";
}
else{
echo "<a class='productDetail' rel='facebox' href='viewproduct.php?productID=".$row[$i]['ProductID']."'><img class='thumbnail' src='../$uploads/".$row[$i]['ProductImage']."' width='150' height='120' alt=''></a>";
}
echo "</li></ul>";
										echo "<center><a href='#".$row[$i]['ProductID']."' class='removeProd'>Remove</a></center></div>";
										}
										echo "</div>";
										}
?>
<div id="modal-from-dom1" class="modal hide fade in" style="display: none;border: 8px solid #ccc;">
<?php

?>
</div>
<?php
break;

case 'viewProdByID': $pid=$_GET['pid'];
										 include_once("class.products.php");
										 $pobj=new products();
										 $pobj->view($pid);
										 echo "<div style='width: 500px;'><h5>".$pobj->getBrand()." ".$pobj->getName()."</h5><hr><div style='float: left;width: 250px;'><img class='thumbnail' src='../$uploads/".$pobj->getImage()."' style='width: 250px;height: 200px;border: 1px solid #dedede;padding:10px; '/></div>
	<div	style='float:left;margin-left: 40px;font-size: 14px;'>
	<tr>
		<td><b><u>Specifications:</u><br></b>
		<td>".str_replace(";",",<br>",$pobj->getDesc())."
	</tr>
	<tr>
		<td><br><br>
	</tr>
	<tr>
		<td><b><u>Price:</b></u><br>
		<td>Rs. ".$pobj->getPrice()."
	</tr>
	</div>";
										 break;
										 
	case 'settings': $row=select("admin","*","AdminID=$_SESSION[aid]");
	
	?>
	
	<h4>Account Settings</h4>
	<table style='font-size: 14px;'>
		<tr>
			<td>Account ID: 
			<td><?php echo $row['AdminName'] ?>
			<td>
		</tr>
		<tr>
			<td>Old Password: 
			<td><input type='password' id='oldPassword'/>
			<td>
		</tr>
		<tr>
			<td>New Password: 
			<td><input type='password' id='newPassword'/>
			<td>
		</tr>
		<tr>
			<td><td>
			<td><button id='saveAccount' class='btn success'>Save Settings</button>
		</tr>
			</table>
	
		
	<?php								 break;
}
}
?>

<script type="text/javascript">
$(document).ready(function(){
  $('a[rel*=facebox]').facebox() ;
$("#newProduct").click(function(){
var pName=$("#pName").val();
var pBrand=$("#pBrand").val();
var pPrice=$("#pPrice").val();
var pYear=$("#pYear").val();
var pVisible=$("#pVisible").val();
var pDesc=$("#pDesc").val();
if(pName=='' || pBrand=='' || pPrice=='' || pYear=='' || pVisible=='' || pDesc==''){
$("#msg").hide();
$("#msg").html("<div class='alert-message danger'><p><strong>Fill all fields!</strong></p></div>").fadeIn(500);
}else{
$.post("response.php?module=addproduct",{pName: pName,pBrand: pBrand,pPrice: pPrice,pYear:pYear,pVisible:pVisible, pDesc: pDesc},
function(data){
$("div#msg").html("<div class='alert-message success'><p><strong>Product added successfully!</strong></p></div>").hide().fadeIn(500);
setTimeout(function(){
$("#msg").fadeOut(500);
},2000);
});
}
});
$("#oldPassword").change(function(){
	
});
$(".removeProd").click(function(){
	var pid=$(this).attr("href");
	pid=pid.substring("1");
	$.post("response.php?module=delProd",{pid: pid},
	function(data){
		if(data==1){
			$("#prodRow"+pid).fadeOut(500);
		}
	});
});
$("#saveAccount").click(function(){
	
});
});
</script>
