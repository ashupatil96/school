<!DOCTYPE html>
<html>
<head>
	<title>slist</title>
</head>
<body>

<?php
	
	
	include 'dbConnect.php' ;

	session_start();
	$id=$_SESSION['id'];
	echo $id;

	$sql ="select `classid` from `teacher` where `id`='$id' " ;

	$result=mysqli_query($con,$sql) or die("error");

	$row=mysqli_fetch_assoc($result);

	$q = $row["classid"];
	//echo $q;

	$s="select `name`,`contact`,`emailid` from `student` where `classid`='$q' " ;
	$r=mysqli_query($con,$s) or die("mysqli_error($con)");
	 
	

	echo "<table border='1' style='border-collapse:collapse'>";
	echo "<th>NAME</th><th>contact</th><th>Email</th>";


	while ($row1 = mysqli_fetch_assoc($r))
	{
		//echo "hhh";
		$name=$row1['name'];
		//echo $name;
		$contact=$row1['contact'];
		$emailid=$row1['emailid'];
		echo "<tr><td style ='width:200px;'>".$name."</td><td style='width:200px ;'>".$contact."</td><td style='width:200px;'>".$emailid."</td></tr> ";
		//echo "<br>";
		

	}

	/*$s1 ="select `id` from `student` where `$row1['name']`='ashu' " ;
	
	$r1=mysqli_query($con,$s1) or die("nere");
	$row2=mysqli_fetch_assoc($row2);

	echo $row2["id"];*/



	

	?>




</body>
</html>
