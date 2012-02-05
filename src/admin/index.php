<?php
include("../includes/functions.php");
if(checkSession('aloggedin')==true)
{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CellBay - Admin Control Panel!</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/facebox.css" rel="stylesheet" media="screen" type="text/css"/>
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
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.modal.js"></script>
<script type="text/javascript" src="../js/facebox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#loader").hide();
$("#productsSub").hide();
$("#productsMenu").click(function(){
$("#productsSub").slideToggle(500);
return false;
});
$("#addProd").click(function(){
$("#loader").html("<img src='../images/loading.gif'></img>");
$("#ui").load("ui.php?ui=addproduct").hide().fadeIn(500);
$("#loader").hide();
return false;
})
$("#viewProd").click(function(){
$("#loader").show();
$("#ui").load("ui.php?ui=viewproduct").hide().fadeIn(500);
$("#loader").hide(100);
return false;
})
$('a.dropdown-toggle').click(function()  {$('li.dropdown').toggleClass('open') } );
});
</script>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">CellBay</a>
          <ul class="nav">

           
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#help">Help</a></li>

          </ul>

<ul class="nav secondary-nav" >
<li class="dropdown" id="login">
<a class="dropdown-toggle" id="" href="#">Account</a>
<ul class="dropdown-menu" style="width: 300px;padding-left: 10px;padding-top: 10px;">
<li><a href="response.php?module=logout">Log Out!</a></li>
</ul>
</li>
</ul>


        </div>
      </div>
    </div>
    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1><?php echo "Welcome ".$_SESSION['aname']."!"; ?></h1>
        </div>
        <div class="row">
          <div class="span10">
          <center><div id="loader"><img src='../images/loading.gif'/></div></center>
            <div id="ui">
            
            </div>
          </div>
          <div class="span4">
            <h3>Secondary content</h3>
            <table class="table">
            	<tr>
            		<td><a href="#" id="home">Home</a>
            	</tr>
            	<tr>
            		<td><a href="#a" id="productsMenu">Products</a>
            	</tr>
            	<tr id="productsSub">
            		<td style="list-style-type: none;">
            			<li>&raquo; <a href="#" id="addProd">Add Products</a></li>
            			<li>&nbsp;</li>
            			<li>&raquo; <a href="#" id="viewProd">View Products</a></li>
            		</td>
            	</tr>
            	<tr>
            		<td><a href="#a" id="productsMenu">Orders</a>
            	</tr>
            	<tr>
            		<td>
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
redirect("login.php");
}
?>
