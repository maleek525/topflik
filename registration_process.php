<?php
//error_reporting(0);

include 'functions/db.php';


$firstName='';
$lastName='';
$email = '';
$password = '';

$error_firstName='';
$error_lastName='';
$error_email='';
$error_password ='';

$has_error = false;


if($_POST) {
    
    if(empty($_POST['firstname'])) {
                $error_firstName = "<div class='validation_arrow_box validation'>Please enter first name</div>";
                $has_error = true;
                
                } else {
                    $firstName = $_POST['firstname'];
                }
                
    if(empty($_POST['lastname'])) {
                $error_lastName = "<div class='validation_arrow_box validation'>Please enter last name</div>";
                $has_error = true;
               
                } else  {
                    $lastName = $_POST['lastname'];
                }

    if(empty($_POST['email'])) {
                $error_email = "<div class='validation_arrow_box validation'>Please enter email</div>";
                $has_error = true;
                }
                
                else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error_email = "<div class='validation_arrow_box validation'>Please enter valid email.</div>";
                $has_error = true;
                
                    } else {
                        $email = $_POST['email'];
                    }
        
    if(empty($_POST['password'])) {
            $error_password= "<div class='validation_arrow_box validation'>Please enter password</div>";
            $has_error = true;
            
            } else  {
                $password = $_POST['password'];
            }
    
    # If no error was found we call insert_into_db function.... and you know what it does!
    
	if(!$has_error){
        insert_into_db();
    }
    
} # End of POST


# Our custom function to insert the new record into database;
function insert_into_db()
		{
            /* The global keyword is used to access a global variable from within a function. 
			  To do this, use the global keyword before can use these global variables inside the function */
            global $con, $firstName, $lastName, $password, $email, $error_email;
			
            # We build a SQL Select query;
            $sql=  "SELECT * FROM users where email='$email'";
            
            # mysqli_query()  function performs a query against the database
			$result = mysqli_query($con, $sql);
    
            # Here we need to check if user already exists for the given  email / password combination. 
			if(mysqli_num_rows($result) > 0){  
               $error_email = "<div class='error_arrow_box error'>Sorry This email already exists!</div>";
            
            } else { # If no such user already exists then we insert new user data to users table.
				
                
                # We build a SQL Insert query;
				$sql=  "INSERT INTO users (firstname, lastname, password,email)
				values ('$firstName','$lastName','$password', '$email')";
                
                # mysqli_query()  function performs a query against the database
				$result = mysqli_query($con, $sql);
                
                # Once new record inserted we then need to select all the information about the newly added user
                $sql=  "SELECT * FROM users where email='$email'";
			    $result = mysqli_query($con, $sql);
                
                # mysqli_num_rows() function returns the number of rows in the result set.
                if(mysqli_num_rows($result) > 0){
                    
                    
                    /*  mysqli_fetch_assoc() function returns an associative array of strings 
                        representing the fetched row in the result set, 
                        where each key in the array represents the name of one of the result set's columns */          
                    $user_record = mysqli_fetch_assoc($result);
                    
                    /*  Here, we are just holding user's first and 
                        last name into local variables form $user_record associative array. */
                    $firstName = $user_record['firstname'];
                    $lastName = $user_record['lastname'];
                    
                    /* We now start a new session with session_start() function. 
                    A session is a way to store information (in variables) to be used across multiple pages.
                    By default, session variables last until the user closes the browser or log out / destroy session. */
                    session_start();
                    
                    # Here we create 2 Session variables with the PHP global variable: $_SESSION
                    $_SESSION['firstname'] = $firstName ;
                    $_SESSION['lastname'] = $lastName ;              
 
                    # Finally we use header() function to redirect user to member_area 
				    header("Location: hello.php");
			
            	} # End of Inner if
		
        } # End of else
  
   } # End of insert_into_db function 

?>

