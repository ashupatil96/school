<!DOCTYPE html>
<html>
<head>
	<title>lsit</title>

	 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="Bcss/bootstrap.min.css">
		  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="Bjs/bootstrap.min.js"></script>
	
</head>
<body>

</body>
</html>
<?php
	include 'dbConnect.php';
	session_start();

	$f = $_POST['filter'];

	$_SESSION['filter'] = $f;
	echo $f;
	if ($f==1) 
	{
		echo "Class First";
		echo "<br>";

					$sql1 = "select `name`,`contact`,`emailid`,`classid` from `student` where `classid` = '$f'" ;
			$result1= mysqli_query($con,$sql1) or die(mysqli_error($con));

			echo "<th>STUDENTS</th>";
			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row1 = mysqli_fetch_assoc($result1))
			{
				//echo "hhh";
				$name=$row1['name'];
				//echo $name;
				$contact=$row1['contact'];
				$emailid=$row1['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}
			echo "</table>";
			echo "<br>";
			echo "<th>TEACHER</th>";


			$sql2 = "select `name`,`contact`,`emailid`,`classid` from `teacher` where `classid` = '$f'" ;
			$result2= mysqli_query($con,$sql2) or die(mysqli_error($con));


			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row2 = mysqli_fetch_assoc($result2))
			{
				//echo "hhh";
				$name=$row2['name'];
				//echo $name;
				$contact=$row2['contact'];
				$emailid=$row2['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}






	}





	elseif ($f==2) 
	{
		echo "Class Second";
		echo "<br>";

					$sql1 = "select `name`,`contact`,`emailid`,`classid` from `student` where `classid` = '$f'" ;
			$result1= mysqli_query($con,$sql1) or die(mysqli_error($con));

			echo "<th>STUDENTS</th>";
			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row1 = mysqli_fetch_assoc($result1))
			{
				//echo "hhh";
				$name=$row1['name'];
				//echo $name;
				$contact=$row1['contact'];
				$emailid=$row1['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}
			echo "</table>";
			echo "<br>";
			echo "<th>TEACHER</th>";


			$sql2 = "select `name`,`contact`,`emailid`,`classid` from `teacher` where `classid` = '$f'" ;
			$result2= mysqli_query($con,$sql2) or die(mysqli_error($con));


			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row2 = mysqli_fetch_assoc($result2))
			{
				//echo "hhh";
				$name=$row2['name'];
				//echo $name;
				$contact=$row2['contact'];
				$emailid=$row2['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}






	}


	elseif ($f==3) 
	{
		echo "Class Third";
		echo "<br>";

					$sql1 = "select `name`,`contact`,`emailid`,`classid` from `student` where `classid` = '$f'" ;
			$result1= mysqli_query($con,$sql1) or die(mysqli_error($con));

			echo "<th>STUDENTS</th>";
			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row1 = mysqli_fetch_assoc($result1))
			{
				//echo "hhh";
				$name=$row1['name'];
				//echo $name;
				$contact=$row1['contact'];
				$emailid=$row1['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}
			echo "</table>";
			echo "<br>";
			echo "<th>TEACHER</th>";


			$sql2 = "select `name`,`contact`,`emailid`,`classid` from `teacher` where `classid` = '$f'" ;
			$result2= mysqli_query($con,$sql2) or die(mysqli_error($con));


			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row2 = mysqli_fetch_assoc($result2))
			{
				//echo "hhh";
				$name=$row2['name'];
				//echo $name;
				$contact=$row2['contact'];
				$emailid=$row2['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}






	}

	elseif ($f==4) 
	{
		echo "Class Fourth";
		echo "<br>";

					$sql1 = "select `name`,`contact`,`emailid`,`classid` from `student` where `classid` = '$f'" ;
			$result1= mysqli_query($con,$sql1) or die(mysqli_error($con));

			echo "<th>STUDENTS</th>";
			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row1 = mysqli_fetch_assoc($result1))
			{
				//echo "hhh";
				$name=$row1['name'];
				//echo $name;
				$contact=$row1['contact'];
				$emailid=$row1['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}
			echo "</table>";
			echo "<br>";
			echo "<th>TEACHER</th>";


			$sql2 = "select `name`,`contact`,`emailid`,`classid` from `teacher` where `classid` = '$f'" ;
			$result2= mysqli_query($con,$sql2) or die(mysqli_error($con));


			echo "<table border='1' style='border-collapse:collapse'>";
			echo "<th>NAME</th><th>contact</th><th>Email</th>";


			while ($row2 = mysqli_fetch_assoc($result2))
			{
				//echo "hhh";
				$name=$row2['name'];
				//echo $name;
				$contact=$row2['contact'];
				$emailid=$row2['emailid'];
				echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
				//echo "<br>";
				

			}






	}

	else
	{


				$sql1 = "select `name`,`contact`,`emailid`,`classid` from `student`" ;
				$result1= mysqli_query($con,$sql1) or die(mysqli_error($con));

				echo "<th>STUDENTS</th>";
				echo "<table border='1' style='border-collapse:collapse'>";
				echo "<th>NAME</th><th>contact</th><th>Email</th>";


				while ($row1 = mysqli_fetch_assoc($result1))
				{
					//echo "hhh";
					$name=$row1['name'];
					//echo $name;
					$contact=$row1['contact'];
					$emailid=$row1['emailid'];
					echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
					//echo "<br>";
					

				}
				echo "</table>";
				echo "<br>";
				echo "<th>TEACHER</th>";


				$sql2 = "select `name`,`contact`,`emailid`,`classid` from `teacher`" ;
				$result2= mysqli_query($con,$sql1) or die(mysqli_error($con));


				echo "<table border='1' style='border-collapse:collapse'>";
				echo "<th>NAME</th><th>contact</th><th>Email</th>";


				while ($row2 = mysqli_fetch_assoc($result2))
				{
					//echo "hhh";
					$name=$row2['name'];
					//echo $name;
					$contact=$row2['contact'];
					$emailid=$row2['emailid'];
					echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
					//echo "<br>";
					

				}

	}

/*
	
*/

	?>
