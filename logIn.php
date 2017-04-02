<html>
<head>
			 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="Bcss/bootstrap.min.css">
		  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="Bjs/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<h2>Plzz Login</h2>
	<script type="text/javascript" src="js/logIn.js"></script>
	
		<form name="logIn" action="logInDb.php" method="POST" onsubmit="return validate()">
			<div class="form-group">
      			<label for="email">Id:</label>
				<input type="text" name="id" class="form-control" placeholder="Enter your Id">
			</div>
			
			<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="password here">
			</div>
						
			<div class="form-group">
				<label for="account">Select Acoount Type</label>
				<select name="select" class="form-control">
					<option value="admin">Admin</option>
					<option value="student">Student</option>
					<option value="parents">Parents</option>
					<option value="teacher">Teacher</option>
				</select>
			</div>
			<div class="checkbox">
				<label><input type="checkbox">Remember me</label>
			</div>
			<div class="form-group">
					<input type="submit" class="form-control" value="submit" placeholder="Submit">
							<br>
				
			</div>

				

	<a href="signUp.php">Sign Up</a>

	</form>

	</div>
	</body>
	</html>


