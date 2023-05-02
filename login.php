<?php

require "config.php";

// If the session variable is already set, automatically redirect the user to index page
if (isset($_SESSION['is_logged_in'])) {
	if ($_SESSION['is_logged_in']) {
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<style>
	body{
		text-align:center;
		font-size: 45px;
		font-family: arial;
		background-color: #F1FF79;
	}

	.border{
		border: 10px solid;
		width: 500px;
		margin: auto;
		padding: 5px;
		border-radius: 16px;
		background-color: #A6FFEC;
	}

	input{
		height: 35px;
		width: 350px;
		font-size: 20px;
	}

	button{
		height: 40px;
		width: 150px;
		font-size: 30px;
		
	}
</style>
<body>
<h1>Login</h1>
<div class="border">
<form action="attempt-login.php" method="POST">
	<div>
		<label>Email Address:</label>
		<input type="email" name="email" placeholder="email@address.com" />	
	</div>
	<div>
		<label>Password:</label></br>
		<input type="password" name="password" />	
	</div>
	<div>
		<button>
			Login
		</button>	
	</div>
</form>
<button onClick="window.location.href='register.php'">Register</button>
</div>
</body>
</html>