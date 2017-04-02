<?php
	session_start();
	include 'dbConnect.php' ;

	$id       = $_POST['id'];
	$password = $_POST['password'];
	$s=$_POST['select'];
	echo $s;
	

	if ($s=="student")
	{
		$sql = "select `id`,`password` from `student` where `id` = '$id' " ;

		$result= mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($result);
		$query_password = $row["password"];

		//
		echo $query_password;
		
		if (empty($id))
		{
			echo "Incorrect  id";
			header( "refresh:5;url=logIn.php" );
		}
		else
    	{
     		if($query_password==$password)
     		{
     		
     		 	echo "Login Succefully";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=student.php" );
     		}
     		else
     		{
     			echo "Incorrect Password";
     			header( "refresh:5;url=logIn.php" );
     		}
     	}

     		


	}
	elseif ($s=="teacher") 
	{
		
		$sql = "select `id`,`password` from `teacher` where `id` = '$id' " ;

		$result= mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($result);
		$query_password = $row["password"];

		//
		echo $query_password;
		
		if (empty($id))
		{
			echo "Incorrect  id";
			header( "refresh:5;url=logIn.php" );
		}
		else
    	{
     		if($query_password==$password)
     		{
     		
     		 	echo "Login Succefully";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=teacher.php" );
     		}
     		else
     		{
     			echo "Incorrect Password";
     			header( "refresh:5;url=logIn.php" );
     		}
     	}




	}
	elseif ($s=="admin") 
	{

		$sql = "select `id`,`password` from `admin` where `id` = '$id' " ;

		$result= mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($result);
		$query_password = $row["password"];

		//
		echo $query_password;
		
		if (empty($id))
		{
			echo "Incorrect  id";
			header( "refresh:5;url=logIn.php" );
		}
		else
    	{
     		if($query_password==$password)
     		{
     		
     		 	echo "Login Succefully";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=admin.php" );
     		}
     		else
     		{
     			echo "Incorrect Password";
     			header( "refresh:5;url=logIn.php" );
     		}
     	}

	}
	else
	{

		$sql = "select `id`,`password` from `parents` where `id` = '$id' " ;

		$result= mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($result);
		$query_password = $row["password"];

		//
		echo $query_password;
		
		if (empty($id))
		{
			echo "Incorrect  id";
			header( "refresh:5;url=logIn.php" );
		}
		else
    	{
     		if($query_password==$password)
     		{
     		
     		 	echo "Login Succefully";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=parents.php" );
     		}
     		else
     		{
     			echo "Incorrect Password";
     			header( "refresh:5;url=logIn.php" );
     		}
     	}


	}








/*
	$result= mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$query_password = $row["password"];

	//
	echo $query_password;
	
	if (empty($id))
	 {
		# code...
		echo "Incorrect  id";
	 }
	else
     {
     	if($query_password==$password)
     	{
     		if ($s=="student")
     		 {
     		 	echo "Login Succefully";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=student.php" );
     			# code...
     		}
     		elseif ($s=="teacher") 
     		{
     				echo "Login SuccefullyT";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=teacher.php" );
     		}
     		elseif ($s=="admin") 
     		{
     			echo "Login SuccefullyA";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=admin.php" );
     		}
     		//if($s=="parents")
     		else
     		{
     			echo "Login SuccefullyP";
     		$_SESSION["id"] = $row["id"];
     		$_SESSION["password"] =$row["password"];
     		
     		header( "refresh:1;url=parents.php" );
     		}
     		

     	}	
     	else
     	{

     		echo "Incorrect Password";
     		header( "refresh:5;url=logIn.php" );
     		//header("efresh :5;Location: logIn.php");
     	}	

	 }
	 */


	?>


