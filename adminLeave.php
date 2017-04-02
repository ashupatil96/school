<!DOCTYPE html>
<html>
<head>
	<title>Leave notifications</title>
</head>
<body>

		<?php
			include 'dbConnect.php';

			$sql1 = "select * from `complain`" ;
			$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
			while (list($l_id,$name,$classid,$id,$status,$textcontent,$reply) = mysqli_fetch_array($result1))
			{
						
						echo "<table><tr><th style='width:50px'>name</th><th style='width:50px'>class</th><th style='width:50px'>id</th><th style='width:50px'>status</th><th style='width:50px'>Letter</th><td style='width:50px'>$name</td><td style='width:50px'>$classid</td><td style='width:50px'>$id</td><td style='width:50px'>$status</td><td style='width:50px'>$textcontent</td></tr></table>";




					
					
			}

			?>
</body>
</html>