<!DOCTYPE html>
<html>

  <head>
    <title> Welcome to Emergency System </title>
    <link rel="stylesheet" href="Stylesheets\Login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>

  <body>
  	<div class="login-box">
  		<h1>Login</h1>
  		<form action="Login_info.php" method="POST">
  			<div class="textbox">
  				<i class="fas fa-user"></i>
   				<input type="text" name="user" placeholder="Username" required>
  			</div>

  			<div class="textbox">
  				<i class="fas fa-lock"></i>
    			<input type="password" name="pass" placeholder="Password">
  			</div>

  			<input type="Submit" class="btn" value="Sign in">
  			<a href="Register.php"><input type="button" class="bt" value="Register Here"></a>	
  		</form>	
	</div>
  </body>

</html>
