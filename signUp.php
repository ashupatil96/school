<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
		 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="Bcss/bootstrap.min.css">
		  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="Bjs/bootstrap.min.js"></script>
</head>
<body>
	
		<div class="container">
			<script type="text/javascript" src="js/signUp.js"></script>
			<h2 style="text-align: center;">Sign up</h2>
			<div class="row">
			<div class="col-md-4 col-md-offset-4" style="background-color:lavender;";>
			<form name="signUp" action="signUpDb.php" method="POST" onsubmit="return validate()">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name">
				</div>
			
				<div class="form-group">
					<label for="password">Password</label>
					<input type="Password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<label for="emailid">Emailid</label>
					<input type="text" class="form-control" name="emailid">
				</div>
				<div class="form-group">
					<label for="contact">Contact</label>
					<input type="text" class="form-control" name="number">
				</div>
				<div class="form-group">
					<label for="selectClass">Select Your Class</label>
					<select name="selectClass" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="form-group">
					<label for="select">Select account type</label>
					<select name="select" class="form-control">
						<option value="admin">Admin</option>
						<option value="student">Student</option>
						<option value="teacher">Teacher</option>
						<option value="parents">Parents</option>
					</select>
				</div>
				<div class="form-group">
				<input type="submit" value="submit" class="form-control">
				</div>
			

			</form>

			</div>
			</div>
			</div>
</body>
</html>