<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="Max's personal and business website">
    <meta name="author" content="William ""Max"" MacMackin">
    <meta name="keywords" content="Technology, Consulting, IT, IT Repair">
	
    <title>MacMackin T.C.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/Contact.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<?php include "php/custommail.php";?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<!-- Start Nav-->
    <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand">MacMackin T.C.</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Landing</a>
                </li>
                <li><a href="About.html">About</a>
                </li>
                <li><a href="Consulting.html">Consulting</a>
                </li>
                <li class="active"><a href="Contact.php">Contact Me</a>
                </li>
     			<li><a href="blog.html">Blog</a>
                </li>
            </ul>
        </div>
    </div>
	</div>
	<!-- End Nav-->

    <div class="container">
	
	 <div class="row">
        <div class="col-sm-5 col-sm-offset-4 social-buttons">
		<h3 class="Header"> Social Media</h3>
		
          <a class="btn btn-block btn-social btn-facebook" onclick="parent.location='https://www.facebook.com/max.macmackin.9'">
            <i class="fa fa-facebook"></i> Check me out on Facebook
          </a>
		  
          <a class="btn btn-block btn-social btn-github" onclick="parent.location='https://github.com/Taintedapple'">
            <i class="fa fa-github"></i> Projects on GitHub
          </a>
		  
          <a class="btn btn-block btn-social btn-google" onclick="parent.location='https://plus.google.com/u/0/+MaxMacMackin/posts'">
            <i class="fa fa-google-plus"></i> Google+ 
          </a>
		  
          <a class="btn btn-block btn-social btn-linkedin" onclick="parent.location='https://www.linkedin.com/pub/william-macmackin/60/287/819'">
            <i class="fa fa-linkedin"></i> Connect with me on LinkedIn
          </a>

          <a class="btn btn-block btn-social btn-twitter" onclick="parent.location='https://twitter.com/MaxMacMackin'">
            <i class="fa fa-twitter"></i> Tweet @ me
          </a>
  
		  
        </div>
    </div>
	
	<br>
	<br>
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		
			<form class="form-horizontal" role="form" method="post" action="Contact.php">
			<h3 class="Header email"> <i class="fa fa-paper-plane"></i> Send me an Email</h3>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
				</div>
			</div>
			
			<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
				</div>
			</div>
			
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">6-2=?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary button">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
</div>
</div>
	


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
