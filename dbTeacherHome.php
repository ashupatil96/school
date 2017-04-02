<?php
		session_start();

		$textcontent=$_POST["hm"];
		echo strlen($textcontent);
	if (isset($_POST['submit'])&&($_FILES['file']['size']>0||(strlen($textcontent)!=0)))
	 {
		# code...
		$t_id=$_SESSION["id"];
		echo $t_id;
		
		$filename=$_FILES['file']['name'];
		$tmpname =$_FILES['file']['tmp_name'];
		$filesize=$_FILES['file']['size'];
		$filetype=$_FILES['file']['type'];
		
		echo $filename; 
		echo "<br>" ;
		echo $tmpname;
		echo "<br>" ;
		echo $filesize;
		echo "<br>" ;
		echo $filetype;
		echo "    " ;

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
		$s= "select * from `teacherhm`";

		//$sql = "insert into `uploadhomework` (`name`) values ('$filename')";
		//$query = "INSERT INTO `teacherhm` (`t_id`,`name`,`size`,`type`,`content`,`textcontent` ) VALUES ($t_id,'$filename','$filesize','$filetype','$content')";

		$query = "INSERT INTO `teacherhm` (`t_id`,`name`,`size`,`type`,`content`,`textcontent`) VALUES ($t_id,'$filename','$filesize','$filetype','$content','$textcontent')";
		mysqli_query($con,$query) or die(mysqli_error($con)); 

		

		echo "<br> File $filename uploaded<br>";

	}
	else
	{
		echo "failed";
	}
//INSERT INTO `notification` (hm_id) VALUES (SELECT `hm_id` FROM `teacherhm` WHERE `hm_id`=NEW.`hm_id`);

	//$t = "select * from `notification`";

/*	$tri = "  CREATE TRIGGER `NOTIFICATION` AFTER INSERT ON `teacherhm`
  	FOR EACH ROW BEGIN
  	insert into `notification` (`hm_id`) SELECT `hm_id` FROM `teacherhm` WHERE `hm_id`=NEW.`hm_id` ;
	END; "; 

  	if(mysqli_query($con,$tri))
  	{
  		echo "TRIGGER";
  	}
  	else
  	{
  		die(mysqli_error($con)) ;
  	} 

  	*/

  	mysqli_close($con);


?>
