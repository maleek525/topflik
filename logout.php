<?php 
/*
include("functions/init.php");


	session_destroy();


	if(isset($_COOKIE['email'])) {

		unset($_COOKIE['email']);

		setcookie('email', '', time()-86400);


	}

//
//redirect("login.php");
redirect("index.php");

*/

?>

<?php
        if(isset($_GET['log']) && ($_GET['log']=='out')){
            session_destroy();
            header('location:index.php');
        }
          echo "<a href='?log=out'>Sign Out</a>";
  ?>


