<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Contact from your Webpage'; 
        $to = 'macmackinw1@gmail.com'; 
        $subject = 'Message from your WebSite ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 4) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if ($mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

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
					<?php echo "<p class='text-danger'>$errName</p>";?>
				</div>
			</div>
			
			<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
					<?php echo "<p class='text-danger'>$errEmail</p>";?>
				</div>
			</div>
			
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">6-2=?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary button">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
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
