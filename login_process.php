<?php
//error_reporting(0);

include 'functions/db.php';
  
$email = '';
$password = '';

$error_email ='';
$error_password ='';
$has_error = false;

if($_POST) {
	
	if(empty($_POST['email'])) {
				$error_email = "<div class='validation_arrow_box validation'>Please enter email</div>";
				$has_error = true;
				}
				
				else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$error_email = "<div class='validation_arrow_box validation'>Please enter valid email.</div>";
				$has_error = true;
			
					} else {
						$email = $_POST['email'];
					}
			

	if(empty($_POST['password'])) {
			$error_password= "<div class='validation_arrow_box validation'>Please enter password</div>";
			$has_error = true;
		} else {
			$password = $_POST['password'];
		}


	if(!$has_error) {
		check_user();
	}

}


function check_user()
		{
			/* The global keyword is used to access a global variable from within a function. 
			  To do this, use the global keyword before can use these global variables inside the function */

			global $con, $email, $password, $error_email;
			
			# We build a SQL Select query;
			$sql =  "SELECT * FROM users where email='$email' and password='$password'";
			
			# mysqli_query() function performs a query against the database
			$result = mysqli_query($con, $sql);
	
			 # mysqli_num_rows() function returns the number of rows in the result set.
			if(mysqli_num_rows($result) > 0){
					
				  /*  mysqli_fetch_assoc() function returns an associative array of strings 
                        representing the fetched row in the result set, 
                        where each key in the array represents the name of one of the result set's columns */ 
                  
				   $user_record  = mysqli_fetch_assoc($result) ;
                  
				  /*  Here, we are just holding user's first and 
                      last name into local variables form $user_record associative array. */     
				  $firstName = $user_record['firstname'];
				  $lastName= $user_record['lastname'];
				
				  /* We now start a new session with session_start() function. 
				     A session is a way to store information (in variables) to be used across multiple pages.
				     By default, session variables last until the user closes the browser or log out / destroy session. */
				  session_start();
				 
				  # Here we create 2 Session variables with the PHP global variable: $_SESSION
				  $_SESSION['firstname'] = $firstName ;
				  $_SESSION['lastname'] = $lastName ;
                  
				  # Finally we use header() function to redirect user to member_area 
			      header("Location: news.php");
				
				} else {
					# If no record found we show the error.
					$error_email = "<div class='error_arrow_box error'>Invalid email or password!!</div>";
				}
	
}
		


?>

