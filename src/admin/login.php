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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">	
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
    
    <script src="../js/jquery.min.js"></script>
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
</li>
</ul>


        </div>
      </div>
    </div>
    <div class="container">
    
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      <h2>Admin Login</h2>
	<table>
		<tr>
			<td>
		</tr>
	</table>
	<form class="form-horizontal" action="response.php?module=login" method="POST">
		<tr>
<td>Your Login ID:
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td>&nbsp;
<td><input name="aname" type="text" placeholder="Your Admin ID to login"/>
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
<td>&nbsp;
<td>&nbsp;
<td><input name="apassword" type="password" placeholder="Your Admin Password	"/>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td><br>
</tr>
<tr>
<td><br>
</tr>
<input class="btn success" type=submit value="Submit"/>
<input class="btn danger" type=reset value="Reset"/>
	</form>
      </div>

      <!-- Example row of columns -->
      

      <footer>
        <p>&copy CellBay 2012</p>
      </footer>
    </div> <!-- /container -->

  </body>
</html>
