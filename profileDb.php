<?php
	include 'dbConnect.php' ;

	session_start();
	$id=$_SESSION["id"];
	echo  $id;
	$gender =$_POST['gender'];
	$dob =$_POST['date'];
	$address =$_POST['address'];
	$ac= $_POST['acontact'];
	$sql= "update `student` set `gender`='$gender',`adress`='$address',`dob`='$dob',`ac`='$ac' where `id`='$id' ";

	mysqli_query($con,$sql) or die("errror");
	

		?>

