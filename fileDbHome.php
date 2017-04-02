<?php
		session_start();
		$textcontent=$_POST["hm"];
		echo strlen($textcontent);
	if (isset($_POST['upload'])&&$_FILES['file']['size']>0||(strlen($textcontent)!=0))
	 {
		# code...
		$s_id=$_SESSION["id"];
		$hm_id=$_POST["hm_id"];

		echo $hm_id;
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
		$s= "select * from `student`";

		//$sql = "insert into `uploadhomework` (`name`) values ('$filename')";


		$query = "INSERT INTO `uploadhomework` (`s_id`,`name`, `size`,`type`, `content`,`hm_id`,`textcontent`) VALUES ($s_id,'$filename', '$filesize', '$filetype', '$content','$hm_id','$textcontent')";
		mysqli_query($con,$query) or die('Error, query failed'); 

		mysqli_close($con);

		echo "<br> File $filename uploaded<br>";

	}
	else
	{
		echo "failed";
	}

?>
