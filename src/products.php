<?php
include("includes/functions.php");
include("admin/class.products.php");
include("includes/class.users.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CellBay - Your Online Mobile Store</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">	
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/facebox.css" type="text/css">
    <script src="js/jquery.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/bootstrap.modal.js"></script>
   <script src="js/facebox.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
  	  $('a[rel2*=facebox]').facebox() ;
    $('.flexslider').flexslider();
    $(".thumbnail").click(function(){
var brand=$(this).attr("alt");
$("#popBrands").html("<u>"+brand+" Mobile Phones</u>").hide().fadeIn(500);
$("#mobilePhone").html("<center><img src='images/loading.gif'/></center>").hide().show();
$.post("ui.php?module=getPhoneBrand", {brand: brand},
function(data){
$("#mobilePhone").html(data).hide().fadeIn(500);
});
});
$('a.dropdown-toggle').click(function()  {$('li.dropdown').toggleClass('open') } );
$('#formClose').click(function(){
$('#modal-from-dom').modal('hide');
});
$('#joinBtn').click(function(){
$("div#loader").append("<img src='images/loader.gif' width='30' height='30'/>");
var uname=$("#uname").val();
var uemail=$("#uemail").val();
var upwd=$("#upassword").val();
$.post("response.php?class=users&module=signup",{uname: uname, uemail: uemail, upwd: upwd},
function(data){
$("div#loader").hide()
$("div#msg").html("<div class='alert-message success'><p><strong>You have successfully signed up! Login to continue...</p></div>").hide().slideDown(1000);
});

$("#uname").val('');
$("#uemail").val('');
$("#upassword").val('');
$("div#msg").html();
setTimeout(function(){
$("div#msg").slideUp(500);
},2500);
});
});
</script>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="index.php">CellBay</a>
          <ul class="nav">
						<?php
							if(checkSession('loggedin')){ ?>
								<li><a href="dashboard.php">Home</a></li>	
							<?php }else{
						?>
            <li><a href="index.php">Home</a></li>
            <?php
            	}
            ?>
				<li class="active"><a href="products.php">Products</a></li>
           

            <li><a href="about.php">About</a></li>
             <li><a  data-keyboard="true"  data-backdrop="true" data-controls-modal="modal-contact" href="#contact">Contact</a></li>
	    
          </ul>
<tr>

</tr>
<ul class="nav secondary-nav" >
<li class="dropdown" id="login">
<?php
if(checkSession('loggedin')){
?>
<a class="dropdown-toggle" id="" href="#">Account</a>
<ul class="dropdown-menu" style="width: 300px;padding-left: 10px;padding-top: 10px;">
<li><a href="response.php?misc=logout">Log Out!</a></li>
</ul>
<?php
}else{
?>
<a class="dropdown-toggle" id="" href="#">Login</a>
<ul class="dropdown-menu" style="width: 300px;padding-left: 10px;padding-top: 20px;">
<form action="response.php?class=users&module=checklogin" method="post">
<li><input type="text" style="width: 180px;" name="uname" placeholder="Username"/></li>
<br>
<li><input type="password" style="width: 180px;" name="password" placeholder="Password"/></li>
<li class="divider"></li>
<li>
<button class="btn">Login &raquo</button>
</li>
</form>
</ul>
<?php
}
?>
</li>
</ul>


        </div>
      </div>
    </div>
    <div class="container">
    
<ul style="float: right;list-style-type: none;margin-right: 10px;">
<?php
if(!checkSession('loggedin')){
?>
<li>
		<button style="margin-top: 5px;" class="btn success"  data-keyboard="true"  data-backdrop="static" data-controls-modal="modal-from-dom">Sign Up</button>
	    </li>
<?php
}
else{
?>
<li>
		<a rel2='facebox' href='ui.php?module=viewcart'><button style="margin-top: 5px;" class="btn success" >View Cart &raquo;</button></a>
	    </li>
<?php
}
?>
</ul>
      <!-- Main hero unit for a primary marketing message or call to action -->
     <!-- Example row of columns -->
      <h3 id='popBrands'>Popular Brands</h3><br>
      <div class="row" id="mobilePhone">
     
       <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/samsung.jpg' width='250' height='120' alt='Samsung'>
    </a>
    </li>
    </ul>
    
        </div>
        
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/lg.jpg' width='250' height='120' alt='LG'>
    </a>
    </li>
    </ul>
    
        </div> 
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/karbonn.jpg' width='250' height='120' alt='Karbonn'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/sonyericsson.jpg' width='250' height='150' alt='Sony Ericsson'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/nokia.bmp' width='250' height='150' alt='Nokia'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/motorola.jpg' width='250' height='150' alt='Motorola'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/htc.jpg' width='250' height='120' alt='HTC'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/blackberry.jpg' width='250' height='120' alt='Blackberry'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/micromax.jpg' width='250' height='120' alt='Micromax'>
    </a>
    </li>
    </ul>
    
        </div>
        <div class='span-one-third'>
          <h2></h2>
              <ul class='media-grid'>
    <li>
    <a href='#'>
   <img class='thumbnail' src='images/apple.jpg' width='250' height='120' alt='Apple'>
    </a>
    </li>
    </ul>
    
        </div>
      </div>

      <footer>
     
       
    <!--    <div class="container">
        <div class="row"  style="background-color: #111;">
  <div class="span5">
  	<h5 style="color: #999;">Products</h5>
  	
  	
  	
  </div>
  <div class="span5">
  	<h5 style="color: #999;">More</h5>
  </div>
  <div class="span5">
  	<h5 style="color: #999;">About Us</h5>
  </div>
</div>
<div class="row" style="background-color: #000;">
<br>-->
<div class="span14">&copy; 2012 CellBay. All Rights Reserved.  Terms & Privacy.</h6></div>
</div>
</div>

      </footer>
<div id="modal-from-dom" class="modal hide fade in" style="display: none;border: 8px solid #ccc;">
<div class="modal-header">
<a class="close" href="#">×</a>
<h3>Sign Up</h3>
</div>
<div class="modal-body">
<center><div  id="loader"></div></center>
<div id="msg">

</div>
<tr>
<td>Your Name:
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td><input id="uname" type="text" placeholder="This will be your Display Name"/>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td>Your Email: </td>
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td><input id="uemail" type="text" placeholder="This will be username"/>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td>Your Password: </td>
<td>&nbsp;
<td><input id="upassword" type="password" placeholder="This will be used to login"/>
</tr>
</div>
<div class="modal-footer">
<a class="btn danger" id="formClose" href="#">Cancel</a>
<a class="btn success" id="joinBtn" href="#">Submit</a>
</div>
    
</div>    
</div>
<div id="modal-contact" class="modal hide fade in" style="display: none;border: 8px solid #ccc;">
<div class="modal-header">
<a class="close" href="#">×</a>
<h3>Contact</h3>
</div>
<div class="modal-body">
<div style='margin-left: 290px;'>
<p>
	<strong>Email: </strong>info[at]cellbay.in
</p>
<p>
	<strong>Phone: </strong>+91 9845000000
</p>
<p>
	<strong>Address: </strong> #2, Near Hotel Empire<br><span style='margin-left: 60px;'>Koramangala,Bangalore</span><br><span style='margin-left: 60px;'>India	</span>
</p>
</div>
<img style='float: left;width: 300px;margin-top: -110px;' src='images/contact.jpeg'/>
</div>
</div> <!-- /container -->

  </body>
</html>
