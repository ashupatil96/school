<?php

	include 'dbConnect.php';
	session_start();
	$id = $_SESSION['id'];


	 $name 	  = $_POST['name'];
	$contact  = $_POST['number'];
	$emailid  = $_POST['emailid'];
	$password = $_POST['password'];
	$gender =$_POST['gender'];
	$dob =$_POST['date'];
	$address =$_POST['address'];
	$ac= $_POST['acontact'];
	$selectClass   = $_POST['selectClass'];


	//$sql1= "update `student` set `name`='$name',`password`='$password',`emailid`='$emailid',`contact`=$contact,`classid`=$selectClass,`gender`='$gender',`dob`='$dob',`adress`='$address',`ac`=$ac" ;
	$sql= "update `student` set `name`='$name',`password`='$password',`emailid`='$emailid',`contact`='$contact',`classid`='$selectClass',`gender`='$gender',`adress`='$address',`dob`='$dob',`ac`='$ac' where `id`='$id' ";

$sql1= "update `student` set `name`='$name',`password'='$password' where `id`=$id";
	mysqli_query($con,$sql) or die(mysqli_error($con));

	?>
