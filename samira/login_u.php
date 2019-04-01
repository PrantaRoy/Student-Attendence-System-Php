<?php

require_once 'config/config.php';

if(isset($_POST['submit'])){
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	
	$query="SELECT * FROM registration where username='$username' AND password = '$password'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1){
		// header("Location: home.php");
	}
	else{
		echo "Incorrect username and password";
	}

}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<div class="container">
			<img src="men.png" />
			<form method="post"  action="home.php">
				<div class="font-input">
					<input type="text" name="username" placeholder="Enter Username">
				</div>
				<div class="font-input">
					<input type="password" name="password" placeholder="Enter Password">
				</div>
				<input type="submit" name="submit" value="Login" class="btn-login"><br>
				
				
			</form>
		</div>
	</body>
</html>





