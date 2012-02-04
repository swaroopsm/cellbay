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
<input type="hidden" name="pid" id="pid" value="<?php echo $pid; ?>">
</form>
<center><div id='preview'>
</div>
</center>
<?php
}
?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>
