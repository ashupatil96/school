<!DOCTYPE html>
<html>
<head>
	<title>Leave notifications</title>
</head>
<body>

		<?php

			include 'dbConnect.php';
			session_start();


			$sql1 = "select * from `complain`" ;
			$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
			while (list($l_id,$name,$classid,$id,$status,$textcontent,$reply) = mysqli_fetch_array($result1))
			{
						
						echo "<table><tr><th style='width:50px'>name</th><th style='width:50px'>class</th><th style='width:50px'>id</th><th style='width:50px'>status</th><th style='width:150px'>Aplication</th></tr><tr><td style='width:50px'>$name</td><td style='width:50px'>$classid</td><td style='width:50px'>$id</td><td style='width:50px'>$status</td><td style='width:150px'>$textcontent</td></tr></table>";
						echo "<br><br>";

						echo "<table><tr>";



						?>

						<table>
						<tr><th style="width: 50px">Reply</th></tr>
						<tr>
							<form action="adminLeave2.php"  method="POST">
							<input type="text" name="lid" value=<?php echo $l_id ?> hidden/>
							<td><textarea name="reply" rows="5" cols="50"></textarea></td>
							<td><input type="submit" name="upload" value="reply"></td>

							</form>

						</tr>
						</table>
						<br>
						<br>

						<hr>

			<?php		
					
			}
			?>
			
</body>
</html>