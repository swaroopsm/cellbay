<?php
if(isset($_GET['module'])){
include("includes/functions.php");
$module=$_GET['module'];
switch($module){
case 'getPhoneBrand': $brand=$_POST['brand'];
											$where="ProductBrand='".$brand."'";
											$query=frameQuery("products","*",$where);
											$num=numRows(mysql_query($query));
											echo "<div class='row'>";
											if($num>1){
												$row=select("products","*",$where);
												echo "<div class='span-one-third'>
												<h2>".$row[$i]['ProductName']."</h2>
             						 <ul class='media-grid'>
										    <li>
									    <a href='#'>
										   <img class='thumbnail' src='".substr($uploads,3)."/".$row[$i]['ProductImage']."' width='250' height='250' alt='".$row[$i]['ProductID']."'>
								    </a>
									    </li>
							    </ul>
    
				        </div>";
											}
											else if($num==1){
												$row=select("products","*",$where);
												echo "<div class='span-one-third'>
												<h2>".$row['ProductName']."</h2>
             						 <ul class='media-grid'>
										    <li>
									    <a href='subui.php' rel='facebox'>
										   <img class='thumbnail' alt='".$row['ProductID']."' src='".substr($uploads,3)."/".$row['ProductImage']."' width='250' ' height='120' alt='".$row['ProductID']."'>
								    </a>
									    </li>
							    </ul>
    
				        </div>";
											}
											else{
											echo "<center><h1><br>There are no phones that are availbale for this brand</h1></center>";
											}
											echo "</div>";
											break;
 ?>



<?php
break;

case 'test':
echo "Hello :)";
break;
}
}
?>
<div id="modal-from-dom2"  class="modal hide fade in" style="display: none;border: 8px solid #ccc;">

</div>
<script type="text/javascript">
$('a[rel*=facebox]').facebox() ;
$(".thumbnail").click(function(){
var pid=$(this).attr("alt");
});
</script>
