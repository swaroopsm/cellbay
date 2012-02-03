<?php
if(isset($_GET['ui'])){
$ui=$_GET['ui'];
switch($ui){
case 'addproduct': ?>
<h3>Add Product</h3>
<form>
<table>
<tr>
<td><label>Product Name: 
<td><input type="text" id="pName"/>
</tr>
<tr>
<td><label>Product Brand: 
<td><input type="text" id="pBrand"/>
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
<input style="margin-left: 40px;" class="btn success" type=submit value="Submit"/>
<input style="margin-left: 10px;" class="btn danger" type=reset value="Reset"/>
</div>
</form>
<?php
}
}
?>

