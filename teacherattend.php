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
	date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-Y");
    echo date("l");
    echo $date;

	$s="select `name`,`id` from `student` where `classid`='$q' order by `id` " ;
	$r=mysqli_query($con,$s) or die("mysqli_error($con)");
	 

	echo "<table border='1' style='border-collapse:collapse'>";
	echo "<th>ID</th><th>name</th>";
	$i=1;
	while ($row1 = mysqli_fetch_assoc($r))
	{
		//echo "hhh";
		$name=$row1['name'];
		$id=$row1['id'];

	
		?>
		<form method="POST" action="teacherattend1.php">
		<?php
		echo "<tr><td style='width:200px;'>".$id."<td style ='width:200px;'>".$name."</td><td><input type=\"checkbox\" name=\"checkbox[]\" value=\"<?php $id ?>\" id=\"checkbox\"></td></tr> ";

		//echo "<br>";
		

	}


	/*$s1 ="select `id` from `student` where `$row1['name']`='ashu' " ;
	
	$r1=mysqli_query($con,$s1) or die("nere");
	$row2=mysqli_fetch_assoc($row2);

	echo $row2["id"];*/



	

	?>
	<input type="submit" name="submit">
	</form>


</body>
</html>
