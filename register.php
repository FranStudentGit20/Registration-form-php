<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<style>
	body{
		background-color: #6E92FA;
		padding: 20px;
		font-family: arial;
		
	}

	h1{
		text-align: center;
		font-size: 70px;

	}

	div{
		text-align: center;
		height: 30px;
		font-size: 30px;

	}
	
	form{
		border: 30px solid black;
		padding: 50px;
		background-color: #47DDFB;
		border-radius: 20px;
	}

	input{
		height: 30px;
		width: 200px;
		font-size: 15px;
	}

	select{
		height: 50px;
		width: 140px;
		font-size: 20px;
	}

	button{
		height: 50px;
		width: 100px;
		font-weight: bold;
	}
	</style>

<body>
<h1>Register a User</h1>
	<form action="save-registration.php" method="POST">

		<div>
			<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" />	
		</div><br>
		<div>
			<label for="middle_name">Middle Name:</label>
			<input type="text" name="middle_name" id="middle_name" />	
		</div><br>
		<div>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" />	
		</div><br>
		<div>
			<label for="email">Email Address:</label>
			<input type="email" name="email" id="email" />	
		</div><br>
		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" />	
		</div><br>
		<div>
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" name="confirm_password" id="confirm_password" />	
		</div><br>
		<div>
			<label for="birthdate">Birthdate:</label>
			<input type="date" name="birthdate"  id= "birthdate"/>	
		</div><br>
		<div>
			<label for="gender">Gender:</label>
			<select id = "gender" name="gender">
				<option label = "male">Male</option>
				<option label = "female">Female</option>
				<option label = "other">Other</option>
			</select>
		</div><br>
		<div>
			<label for="address">Address:</label>
			<input type="text" name="address"  id="address"/>	
		</div><br>
		<div>
			<label for="contact_number">Contact Number:</label>
			<input type="text" name="contact_number"  id="contact_number"/>	
		</div><br>
		<div>
			<button>
				Register User
			</button><br>
			<button onClick="window.location.href='login.php'">Cancel</button><br>
		</div>
	</form>

</body>
</html>