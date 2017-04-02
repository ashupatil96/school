<?php
		$classid=$_POST['select'];

	if (isset($_POST['upload'])&&$_FILES['file']['size']>0)
	 {
		# code...
	//	$s_id=$_SESSION["id"];
	//	$hm_id=$_SESSION["hm_id"];
		$filename=$_FILES['file']['name'];
		$tmpname =$_FILES['file']['tmp_name'];
		$filesize=$_FILES['file']['size'];
		$filetype=$_FILES['file']['type'];

		echo $filename; 
		echo "  " ;
		echo $tmpname;
		echo "  " ;
		echo $filesize;
		echo "  " ;
		echo $filetype;
		echo "  " ;

		//$filetype=(get_magic_quotes_gpc()==0 ? mysqli_real_escape_string($_FILES['file']['type'] ): mysqli_real_escape_string(stripcslashes($_FILES['file'])));
		$fp = fopen($tmpname, 'r');
		$content =fread($fp, filesize($tmpname));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc())
		{
		    $filename = addslashes($filename);
		}
		include 'dbConnect.php' ;
		//$s= "select * from `student`";

		//$sql = "insert into `uploadhomework` (`name`) values ('$filename')";


		$sql1="select `classid` from `timetable`" ;
			//$s ="select `id` from `admin`";
			$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
			$k = 0 ;
			while (list($classid1) = mysqli_fetch_array($result1))
			 {
			 	//echo $classid;
				if ($classid==$classid1)
				{
					echo "timetable exists";
					$k= $k + 1 ;
				}

			}

			if ($k==0)
			 {
				
			
					$query = "INSERT INTO `timetable` (`name`, `size`,`type`, `content`,`classid`) VALUES ('$filename', '$filesize', '$filetype', '$content','$classid')";
					mysqli_query($con,$query) or die(mysqli_error($con)); 

					mysqli_close($con);

					echo "<br> File $filename uploaded<br>";

			}
				

	}
	else
	{
		echo "failed";
	}

?>
