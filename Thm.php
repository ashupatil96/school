<!DOCTYPE html>
<html>
<head>
	<title>Give Homwork</title>
</head>
<body>
<?php
	session_start();
	echo $_SESSION['id'];
	?>
	<form action="fileDbTHome.php" method="POST" enctype="multipart/form-data">
		<textarea name="hm" rows="5" cols="50">
		</textarea>
		<br><br><br>
		<input type="file" name="file">
		<br><br>
		<input type="submit" name="submit">
		
	</form>
</body>
</html>