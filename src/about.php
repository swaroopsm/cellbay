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
$('a.dropdown-toggle').click(function()  {$('li.dropdown').toggleClass('open') } );
  });
</script>
  </head>

  <body>

   <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="index.php">CellBay</a>
          <ul class="nav">

            <li><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
            <li class="active"><a href="about.php">About</a></li>
             <li><a  data-keyboard="true"  data-backdrop="true" data-controls-modal="modal-contact" href="#contact">Contact</a></li>

          </ul>

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

      <div class="content">
        <div class="page-header">
          <h1>About Us</h1>
        </div>
        <div class="row">
          <div class="span15">
						<p  style='font-size: 14px;'>
							CellBay is an mobile store wherein you can but mobile products online that makes you save a lot of time. CellBay was launched in 2012 to ease the procurement of mobile phones which has become a very essential device in the present times. Our Headquarters is based in Bangalore, India.	
						</p>
						<p  style='font-size: 14px;'>
							Our goal is "Your friendly Mobilehood!"
						</p>
						<p  style='font-size: 14px;'>
							Sign up is absolutely free. You need to sign up in order to enjoy the benefits of CellBay!
						</p>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; CellBay 2012</p>
      </footer>
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
