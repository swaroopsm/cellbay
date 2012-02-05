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
										echo "<div class='span3'>";
										echo "<h5>".$row[$i]['ProductBrand']." ".$row[$i]['ProductName']."</h5><ul class='media-grid'><li>";
if($row[$i]['ProductImage']==''){
echo "<a rel='facebox' href='addimage.php?productID=".$row[$i]['ProductID']."'><img class='thumbnail' src='' width='140' height='40' alt=''>Add Image</a>";
}
else{
echo "<a class='productDetail' rel='facebox' href='viewproduct.php?productID=".$row[$i]['ProductID']."'><img class='thumbnail' src='$uploads/".$row[$i]['ProductImage']."' width='150' height='120' alt=''></a>";
}
echo "</li></ul>";
										echo "</div>";
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
if(pName=='' || pBrand=='' || pPrice=='' || pYear=='' || pVisible==''){
$("#msg").hide();
$("#msg").html("<div class='alert-message danger'><p><strong>Fill all fields!</strong></p></div>").fadeIn(500);
}else{
$.post("response.php?module=addproduct",{pName: pName,pBrand: pBrand,pPrice: pPrice,pYear:pYear,pVisible:pVisible},
function(data){
$("div#msg").html("<div class='alert-message success'><p><strong>Product added successfully!</strong></p></div>").hide().fadeIn(500);
setTimeout(function(){
$("#msg").fadeOut(500);
},2000);
});
}
});
});
</script>
