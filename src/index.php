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
    <script src="js/jquery.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/bootstrap.modal.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
  
    $('.flexslider').flexslider();
$('a.dropdown-toggle').click(function()  {$('li.dropdown').toggleClass('open') } );
$('#formClose').click(function(){
$('#modal-from-dom').modal('hide');
});
$('#joinBtn').click(function(){
$("div#loader").append("<img src='images/loader.gif' width='30' height='30'/>");
var uname=$("#uname").val();
var uemail=$("#uemail").val();
var upwd=$("#upassword").val();
/*$.post("response.php?class=users&module=signup",{uname: uname, uemail: uemail, upwd: upwd},
function(data){
});*/
//$("#successMsg").hide();
//$("#successMsg").fadeIn(500);
$("#uname").val('');
$("#uemail").val('');
$("#upassword").val('');
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

            <li class="active"><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
           

            <li><a href="about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
	    
          </ul>
<tr>

</tr>
<ul class="nav secondary-nav" >
<li class="dropdown" id="login">
<a class="dropdown-toggle" id="" href="#">Login</a>
<ul class="dropdown-menu" style="width: 300px;padding-left: 10px;padding-top: 20px;">
<form action="checklogin.php" method="post">
<li><input type="text" style="width: 180px;" name="uname" placeholder="Username"/></li>
<br>
<li><input type="password" style="width: 180px;" name="password" placeholder="Password"/></li>
<li class="divider"></li>
<li>
<button class="btn">Login &raquo</button>
</li>
</form>
</ul>
</li>
</ul>


        </div>
      </div>
    </div>
    <div class="container">
    
<ul style="float: right;list-style-type: none;margin-right: 10px;">
<li>
		<button style="margin-top: 5px;" class="btn success"  data-keyboard="true"  data-backdrop="static" data-controls-modal="modal-from-dom">Sign Up</button>
	    </li>
</ul>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">

        <div class="flexslider" style="">

  <ul class="slides">
    <li>
      <img src="images/header2.jpg" height="340" alt="text1"/>
    </li>
    <li>
      <img src="images/header1.jpg" height="340" alt="text2"/>
    </li>
    <li>
      <img src="images/header3.jpg" height="340" alt="text3"/>
    </li>
    <li>
      <img src="images/header4.jpg" height="340" alt="text3"/>
    </li>
  </ul>
</div>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>Mobile 1</h2>
              <ul class="media-grid">
    <li>
    <a href="#">
    <img class="thumbnail" src="http://placehold.it/250x180" alt="">
    </a>
    </li>
    </ul>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span-one-third">
          <h2>Mobile 2</h2>
               <ul class="media-grid">
    <li>
    <a href="#">
    <img class="thumbnail" src="http://placehold.it/250x180" alt="">
    </a>
    </li>
    </ul>
 <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span-one-third">
          <h2>Mobile 3</h2>
             <ul class="media-grid">
    <li>
    <a href="#">
    <img class="thumbnail" src="http://placehold.it/250x180" alt="">
    </a>
    </li>
    </ul>
 <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <footer>
        <p>&copy CellBay 2012</p>
      </footer>
<div id="modal-from-dom" class="modal hide fade in" style="display: none;border: 8px solid #ccc;">
<div class="modal-header">
<a class="close" href="#">×</a>
<h3>Sign Up</h3>
</div>
<div class="modal-body">
<center><div  id="loader"></div></center>

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
    </div> <!-- /container -->

  </body>
</html>
