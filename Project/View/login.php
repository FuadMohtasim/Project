<?php 
	session_start();

	$username = "admin";
	$password = "admin";

	if (isset($_POST['uname'])) {
		if ($_POST['uname']==$username && $_POST['pass']==$password) {
			$_SESSION['uname'] = $username;
			header("location:welcome.php");
		}
		else{
			$msg = "username or password invalid";
		}
	}
 ?>
<!DOCTYPE html>  
 <html>  
      <head>  
           
      </head>  
      <body>
          <fieldset>
          <?php 
          include 'navbar.php';
          ?>  
           <br />  
           <div>  
                <fieldset>
                    <legend><h3>Login</h3><br/></legend>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<span><?php
						if (isset($msg)) {
							echo $msg;
						}

					 ?>	 	
					 </span>
					Username:
					<input type="text" name="uname">
					<br>
					Password:
					<input type="password" name="pass">
					<br>
					<input id="remember" type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>> <label for="remember">Remember Me</label>
					<br>
					<input type="submit" name="login" value="Login"> <a href="">Forgot Password?</a>
				</form>
                </fieldset>  
                <br />
          <?php 
               include 'footer.php';
          ?>
          </fieldset>
           </div>  
           <br />  
      </body>  
 </html>  