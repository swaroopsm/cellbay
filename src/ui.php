<?php
if(isset($_GET['module'])){
include("includes/functions.php");
include("admin/class.products.php");
$module=$_GET['module'];
switch($module){
case 'getPhoneBrand': $brand=$_POST['brand'];
											$where="ProductBrand='".$brand."'";
											$query=frameQuery("products","*",$where);
											$num=numRows(mysql_query($query));
											echo "<div class='row'>";
											if($num>1){
												$row=select("products","*",$where);
												for($i=0;$i<$num;$i++){
												echo "<div class='span-one-third'>
												<h2>".$row[$i]['ProductName']."</h2>
             						 <ul class='media-grid'>
										    <li>
									    <a href='subui.php?module=myphone&pid=".$row[$i]['ProductID']."' rel='facebox'>
										   <img class='thumbnail' src='".$uploads."/".$row[$i]['ProductImage']."' width='250' height='150' alt='".$row[$i]['ProductID']."'>
								    </a>
									    </li>
							    </ul>
    
				        </div>";
				        }
											}
											else if($num==1){
												$row=select("products","*",$where);
												echo "<div class='span-one-third'>
												<h2>".$row['ProductName']."</h2>
             						 <ul class='media-grid'>
										    <li>
									    <a href='subui.php?module=myphone&pid=".$row['ProductID']."' rel='facebox'>
										   <img class='thumbnail' alt='".$row['ProductID']."' src='".$uploads."/".$row['ProductImage']."' width='250' ' height='120' alt='".$row['ProductID']."'>
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

case 'addtocart': $pid=$_POST['pid'];
									$uid=$_POST['uid'];
									$date=date("Y-m-d");
									$fields=array("ProductID","UserID","OrderDate");
									$values=array("$pid","$uid","$date");
									echo insert("orders",$fields,$values);
									break;
									
case 'viewcart': ?>
<div style='width: 500px;'>
	<div class="modal-header">
<h3>View Cart</h3>
</div>
<div class="modal-body" style='overflow: auto;'>
<?php
if(checkSession('loggedin')){
		$where="UserID=$_SESSION[uid] AND OrderStatus=0";
		$query=frameQuery("orders","*",$where);
		$num=mysql_num_rows(mysql_query($query));
		$row=select("orders","*",$where);
		echo "<table>";
		echo "<tr>
						<th>Order ID</th>
						<th>Product</th>
						<th>Action</th>
					</tr>";
		$pobj=new products();
		if($num>1){
			for($i=0;$i<$num;$i++){
				$pobj->view($row[$i]['ProductID']);
			echo "<tr>
							 <td>".$row[$i]['OrderID'].
							"<td>".$pobj->getBrand()." ".$pobj->getName().
							"<td><a href='#".$row[$i]['OrderID']."' title='Confirm Order' class='check'><img src='images/check.png' width='20' height='20'/></a>&nbsp;&nbsp<a title='Cancel Order' href='#".$row[$i]['OrderID']."' class='cross'><img src='images/cross.png' width='20' height='20'/></a>";
			}	
		}
		else if($num==1){
			$pobj->view($row['ProductID']);
			echo "<tr>
							 <td>".$row['OrderID'].
							"<td>".$pobj->getBrand()." ".$pobj->getName().
							"<td><a title='Confirm Order' class='check' href='#".$row['OrderID']."'><img src='images/check.png' width='20' height='20'/></a>&nbsp;&nbsp<a title='Cancel Order' class='cross' href='#".$row['OrderID']."'><img src='images/cross.png' width='20' height='20'/></a>"
							;
		}
		
		else{
			echo "No Orders";
		}
		echo "</table>";
	}
?>
</div>
</div>
<?php
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
