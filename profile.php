<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
<form action="profileDb.php" method="POST">
	Gender:<br>
	<input type="radio" name="gender" value="male">Male<br>
	<input type="radio" name="gender" value="female">Female<br>
	DOB:<br>
	<input type="date" name="date">
	<br>
	Adress:<br>
	<input type="text" name="address">
	<br>
	ALternative Contact:<br>
	<input type="text" name="acontact">

	<input type="submit" name="submit" value="submit">
	<?php
		session_start();
		echo $_SESSION["id"];
		?>

</form>
</body>
</html>