<?php
include("includes/functions.php");
include("includes/class.users.php");
include("admin/class.products.php");
if(checkSession('loggedin')==true)
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to CellBay Pal!</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('a.dropdown-toggle').click(function()  {$('li.dropdown').toggleClass('open') } );
$("#settings").click(function(){
	$("#ui").load("ui.php?module=settings").hide().fadeIn(500);
});
$("#profile").click(function(){
$("#ui").load("ui.php?module=profile").hide().fadeIn(500);
});
});
</script>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">CellBay</a>
          <ul class="nav">

           
            <li class="active"><a href="dashboard.php">Home</a></li>

            <li><a href="products.php">Products</a></li>
            <li><a href="#help">Help</a></li>

          </ul>

<ul class="nav secondary-nav" >
<li class="dropdown" id="login">
<a class="dropdown-toggle" id="" href="#">Account</a>
<ul class="dropdown-menu" style="width: 300px;padding-left: 10px;padding-top: 10px;">
<li><a href="response.php?misc=logout">Log Out!</a></li>
</ul>
</li>
</ul>


        </div>
      </div>
    </div>
    <div class="container">
			<?php
				$uobj=new users();
				$uobj->view($_SESSION['uid']);
			?>
      <div class="content">
        <div class="page-header">
          <h1><?php echo "Welcome ".$uobj->getUName()."!"; ?></h1>
        </div>
        <div class="row">
          <div class="span10" id='ui'>
            <h2>Recent Activity</h2>
            <?php
            	$oid=$uobj->getLoid();
             	$num=mysql_num_rows(mysql_query("select * from orders WHERE OrderID=$oid"));
            	if($num<1){
            		echo "<br><center><h3>All Orders have been cleared. You will receive your product very soon</h3></center>";
            	}else{
            	$row2=select("orders","*","OrderID=$oid");
            	$pid=$row2['ProductID'];
            	$pobj=new products();
            	$pobj->view($pid);
							echo "<div style='width: 400px;'>
								<div class='modal-header' style='float: left;'>
								<h4>".$pobj->getBrand()." ".$pobj->getName()."(<small>Order pending...</small>)</h4>
								<h5>Order Date: ".$row2['OrderDate']."</h5>";
								echo "</div>";
								echo "<div class='modal-body'><div style='float: left;width: 300px;border:1px solid #eeeeee;padding: 	5px;'><img width='300' height='250' src='$uploads/".$pobj->getImage()."'/></div>
								";
								echo "</div>
						</div>";            
            }
            
            ?>
          </div>
          <div class="span4">
            <h3>Quick Links</h3>
            <table class="table">
            	<tr>
            		<td>&raquo; <a href="#" id="profile">Profile</a></li>
            	</tr>
            	<tr>
            		<td>&raquo; <a href="#" id="settings">Settings</a></li>
            	</tr>
            </table>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; CellBay 2012</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
<?php
}
else{
	redirect("index.php");
}
?>
