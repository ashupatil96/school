<?php
	
	include 'dbCOnnect.php';
	session_start();

	$id =$_SESSION['id'];

	$text=$_POST['leave'];


	if (strlen($text) !=0)
	{

		$sql1="select `name`,`classid` from `student` where `id`='$id'" ;

		$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));

		list($name,$classid) = mysqli_fetch_array($result1);

		$status="student";
		$sql2="insert into `complain` (`name`,`classid`,`id`,`status`,`textcontent`) values ('$name',$classid,$id,'$status','$text')" ;

		mysqli_query($con,$sql2) or die(mysqli_error($con));


	}
	else
		echo "cannot empty";

	?>

	

