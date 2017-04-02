<html>
<head>
<title>Download File From MySQL</title>
<link rel="stylesheet" type="text/css" href="css\download.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php

		include 'dbConnect.php';

		$query = "SELECT `f_id`,`s_id`,`name` FROM `uploadhomework`";
		$result = mysqli_query($con,$query) or die("errr");
		if(mysqli_num_rows($result) == 0)
		{
				echo "Database is empty <br>";
		}
		else
		{
			while(list($f_id,$s_id,$name) = mysqli_fetch_array($result))
			{
				
				?>
				
				
				<a href="dbDownload.php?f_id=<?php echo $f_id ;?>"><?php echo "<table><tr><td style='width:50px;' >$s_id</td><td style='width:200px;'>$name</td></tr> </table>" ?></a> <br>
	
				<?php

			}
		}
		mysqli_close($con);
		?>
</body>
</html>
