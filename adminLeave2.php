<?php
	include 'dbConnect.php';
	session_start();
	$id = $_POST['lid'];
	$textcontent=$_POST['reply'];

	$sql1 = "update `complain` set `reply`='$textcontent' where `l_id`='$id'" ;
	 mysqli_query($con,$sql1) or die(mysqli_error($con));
	 echo "Updated";
	 header( "refresh:5;url=adminLeave1.php" );

 ?>
