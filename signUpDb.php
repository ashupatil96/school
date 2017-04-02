<?php

	$mysql_host = "localhost" ;
	$mysql_user = "root" ;
	$mysql_pass = "" ;
	$con_error = "could not connect";
	$db ="school";

	$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die($con_error);

	if (!$con ||!mysqli_select_db($con,$db))
	{
		
		die($con_error);
	}


	$name 	  = $_POST['name'];
	// $id   	  = $_POST['id'];
	$contact  = $_POST['number'];
	$emailid  = $_POST['emailid'];

	$password = $_POST['password'];

	$select   = $_POST['select'];
	echo $select;

	$selectClass   = $_POST['selectClass'];
	echo $selectClass;

	if ($select == "student") 
	{
		# code...
		$sql =" insert into `student` (`name`,`password`,`emailid` ,`contact`,`classid`) values('$name','$password','$emailid','$contact','$selectClass') ";
		if (mysqli_query($con,$sql))
		 {
			# code...
			echo "aaaaa inserte";
		}
		else
			echo "sory";
		mysqli_close($con);
	}
	
	if ($select == "teacher") 
	{
		# code...
		$sql =" insert into `teacher` (`name`,`password`,`emailid` ,`contact`,`classid`) values('$name','$password','$emailid','$contact','$selectClass') ";
		if (mysqli_query($con,$sql))
		 {
			# code...
			echo "aaaaa inserte";
		}
		else
			echo "sory";
		mysqli_close($con);
	}

	if ($select == "admin") 
	{
		echo "hahaah" ;
		$sql =" insert into `admin` (`name`,`password`,`emailid` ,`contact`) values('$name','$password','$emailid','$contact') ";
		/*if (mysqli_query($con,$sql))
		 {
			# code...
			echo "aaaaa inserte";
		}
		else
			mysqli_error($con);
			*/


		mysqli_query($con,$sql) or die(mysqli_error($con)) ;
		mysqli_close($con);
	}

	




	?>