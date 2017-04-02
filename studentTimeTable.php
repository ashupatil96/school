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

			$sql1="select * from `timetable`" ;
			$result1=mysqli_queri($con,$sql1) or die(mysqli_error($con));

			while (list($id,$name,$type,$size,$content,$classid) = mysqli_fetch_array($result1))
			 {
				$sql2="select `classid` from `student` where `id`='$id'" ;
				$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
				$row2=mysqli_fetch_array($result2);
				$classid2 = $row2['classid'];

				if ($classid==$classid2)
				{
					

							?>
					
					
					<a href="dbDownloadStu.php?id=<?php echo $id ;?>"><?php echo "<table><tr><td style='width:50px;' >$name</td></tr> </table>" ?></a> 
					<br>
				}
			}



</body>
</html>