
	<body>
		<?php

       
		include('login_process.php');
		?>
        
        <div id="form-section">
          <h3>Login Here &nbsp; </h3><div class="h-line"><hr></div>
		<form action="" method="post">
             <table border="0">
              <tr> 
				  <td> <label for="email">Email</label> </td>    
             	  <td> <input type="text" value="<?php echo $email?>" name="email" placeholder="john@gmil.com"> </td>
				  <td> <?php if($_POST)echo $error_email?> </td></tr>
           
         	<tr> 
				 <td> <label for="password">Password</label> </td> 
         	     <td> <input type="password" name="password" placeholder="*******"> </td>
				 <td> <?php if($_POST)echo $error_password?>  </td>
            </tr>
			
             <tr>
				 <td>&nbsp;</td>
             	 <td collspan="2"><input type="submit" value="Login"> <a href="register.php">Register</a>  </td></tr>
             
		</table>
		</form>
		</div>
	