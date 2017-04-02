<!DOCTYPE html>
<html>
<head>
	<title>notification</title>
	<link rel="stylesheet" type="text/css" href="css\notification.css">
</head>
<body>

<?php

		session_start();
  		$s_id=$_SESSION["id"];
  		//echo $_SESSION["password"];

	include 'dbConnect.php';

	$sql="select * from `notification`";
	$result=mysqli_query($con,$sql) ;

	
	/*$row=mysqli_fetch_assoc($result);
	$i= $row['id'];
	$j=$row['hm_id'];
	echo $j;
	echo $i;
	*/
	
/*	$s = "select `t_id` from `teacherhm` where `hm_id`='$j'" ;
	$r1 =mysqli_query($con,$s);
	$row1 =mysqli_fetch_assoc($r1);
	$k=$row1['t_id'];
	echo $k;

	$x ="select `name` from `teacher` where `id`='t_id' ";
	$r2 = mysqli_query($con,$x);
	$row2 =mysqli_fetch_assoc($r2);
	$z=$row2['name'];
	echo $z;*/
	

		while ($row=mysqli_fetch_assoc($result))
		{
			//echo "hahaha";
			$i= $row['id'];
		//	echo $i ;
		//	echo "<br>";
			$j=$row['hm_id'];

			
	


			$s = "select `t_id` from `teacherhm` where `hm_id`='$j'" ;
			$r1 =mysqli_query($con,$s);
			$row1 =mysqli_fetch_assoc($r1);
			$k=$row1['t_id'];
		//	echo $k;


				$sql1="select `classid`,`name` from `teacher` where `id`='$k'" ;
				$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
				$row1=mysqli_fetch_array($result1);
				$classid1 = $row1['classid'];
				$name1=$row1['name'];
		//		echo $classid1;

		
		

				$sql2="select `classid` from `student` where `id`='$s_id'" ;
				$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
				$row2=mysqli_fetch_array($result2);
				$classid2 = $row2['classid'];
		//		echo $classid2;
			//	echo "<br>";

				if ($classid1==$classid2)
				 {
					# code...
				



			?>
			<div class="stu">
				<tr class="th1">
				<td>Homework is added by <?php echo "Mr. "; echo $name1;  ?></td>
				</tr>
			</div>
			<?php
				}
			
		}



?>

</body>
</html>