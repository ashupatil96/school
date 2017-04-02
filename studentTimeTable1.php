<!DOCTYPE html>
<html>
<head>
	<title>studentTimetable</title>
</head>
<body>

		<?php
			include 'dbConnect.php';
			session_start();

			$id =$_SESSION['id'];

			$sql1="select `id`,`name`,`type`,`size`,`content`,`classid` from `timetable`" ;
			//$s ="select `id` from `admin`";
			$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));

			while (list($id,$name,$type,$size,$content,$classid) = mysqli_fetch_array($result1))
			 {
			 	echo $classid;
				$sql2="select `classid` from `student` where `id`='$id'" ;
				$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
				$row2=mysqli_fetch_array($result2);
				$classid2 = $row2['classid'];
				echo $classid2;
				if ($classid==$classid2)
				{
					

					?>
					
					
					<a href="studentTimetable2.php?id=<?php echo $classid ;?>"><?php echo "<table><tr><td style='width:50px;' >$name</td></tr> </table>" ?></a> 
					<br>
					<?php

				}
			}


?>
</body>
</html>