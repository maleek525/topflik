
<?php include("functions/init.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
TopFlik
</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style_login.css" rel="stylesheet">
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	
<link rel="stylesheet" href="css/bootstrap1.css">
<link rel="stylesheet" href="css/styles1.css">
<script src="js/jquery1.js"></script>
<script src="js/bootstrap1.js"></script>
<script src="js/scripts.js"></script>


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
 
<div class="nav">
		<div class='logo'></div>
		<ul class="menu">
		<li class="btMenu">
		<a href="javascript:void(0)">MENU</a></li>
		<li class="menuItem"><a href="index.php">Home</a></li>
		<li class="menuItem"><a href="#">About Us</a></li>
		<li class="menuItem"><a href="#">Login</a></li>
		<li class="menuItem"><a href="#">Sign Up</a></li>
		<li class="menuItem"><a href="#">&#10030; &#10030;  Top Rated Talent  &#10030;&#10030;</a></li>
<!--
		<li class="menuItem"><a href="http://www.scriptcafe.in">Download</a></li>
		<li class="menuItem"><a href="http://www.scriptcafe.in">Documentation</a></li>
-->
		
		</ul>
		</div>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			
			<?php validate_user_registration(); ?>
								
		</div>


	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >
									<div class="form-group">
										<input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="" required >
									</div>

									<div class="form-group">
										<input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include("includes/footer.php") ?>