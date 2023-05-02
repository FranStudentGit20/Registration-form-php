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
		<label>First Name:</label>
		<input type="text" name="first_name" placeholder="First Name" />	
	</div><br>
	<div>
		<label>Middle Name:</label>
		<input type="text" name="middle_name" placeholder="Middle Name" />	
	</div><br>
	<div>
		<label>Last Name:</label>
		<input type="text" name="last_name" placeholder="Last Name" />	
	</div><br>
	<div>
		<label>Email Address:</label>
		<input type="email" name="email" placeholder="email" />	
	</div><br>
	<div>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Password" />	
	</div><br>
	<div>
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password" placeholder="Confirm Password" />	
	</div><br>
	<div>
		<label>Birthdate:</label>
		<input type="date" name="birthdate"  placeholder= "Birthdate"/>	
	</div><br>
	<div>
		<label>Gender:</label>
		<select id = "gender">
			<option label = "male">Male</option>
			<option label = "female">Female</option>
			<option label = "other">Other</option>
		</select>
	</div><br>
	<div>
		<label>Address:</label>
		<input type="text" name="address"  placeholder= "Address"/>	
	</div><br>
	<div>
		<label>Contact Number:</label>
		<input type="text" name="contact_number"  placeholder= "Contact Number"/>	
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