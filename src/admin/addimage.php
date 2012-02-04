<?php
if(isset($_GET['productID'])){
$pid=$_GET['productID'];
?>
<h5>Add Image</h5>
<table>
<tr><td>
</tr>
</table>
<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload image <input type="file" name="photoimg" id="photoimg" />
<input type="hidden" value="<?php echo $pid; ?>">
</form>
<center><div id='preview'>
</div>
</center>
<?php
}
?>
