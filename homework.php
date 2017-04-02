<html>
<head>
	<title>Homework</title>
	<link rel="stylesheet" type="text/css" href="css\homework.css">
</head>
<body>
	
	<?php
		session_start();
		$id =$_SESSION['id'];
		include 'dbConnect.php';
		
		$sql="select `t_id`,`hm_id`,`name`,`textcontent` from `teacherhm`" ;
		$result=mysqli_query($con,$sql) or die("query erroer");
		if (mysqli_num_rows($result)==0)
		{
			echo "empty";
			echo "<br>";
		}
		else
		{ 
			while (list($t_id,$hm_id,$name,$textcontent) = mysqli_fetch_array($result) )
			{
				//echo $t_id,$hm_id,$name;
				$sql1="select `classid`,`name` from `teacher` where `id`='$t_id'" ;
				$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
				$row1=mysqli_fetch_array($result1);
				$classid1 = $row1['classid'];
				$name1=$row1['name'];
				echo $classid1;

				$sql2="select `classid` from `student` where `id`='$id'" ;
				$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
				$row2=mysqli_fetch_array($result2);
				$classid2 = $row2['classid'];
			//	echo $classid2;
			//	echo "<br>";
				if ($classid1==$classid2)
				{
					?>
					
					
					<a href="dbDownloadStu.php?id=<?php echo $hm_id ;?>"><?php echo "<table><tr><th style='width:50px'>Teacher</th><th style ='width:200px'>Homework</th><th style ='width:200px'>Homework Description</th><tr><td style='width:50px;' >$name1</td><td style='width:200px;'>$name</td><td style ='width:200px'>$textcontent</td></tr> </table>" ?></a> 
					<br>

					<table>
					<tr><th style="width: 50px">Upload file</th><th style="width: 50px">Write</th><th>Submit</th></tr>
					<tr>
						<form action="fileDbHome.php"  method="POST" enctype="multipart/form-data">
						<input type="text" name="hm_id" value=<?php echo $hm_id; ?> hidden/>
						<td><input type="file" name="file"></td>
					
						<td><textarea name="hm" rows="5" cols="50"></textarea></td>
						<td><input type="submit" name="upload"></td>

						</form>

					</tr>
					</table>
					<br>
					<br>
					<hr>
					
					<?php
				}
				
			}
		}

	?>
</body>
</html>