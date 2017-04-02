<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\admin.css">
	<title>TEacher</title>
</head>
<body>
<?php
	session_start();
	echo $_SESSION['id'];
	?>
<div class="admin">
	<table>
		<tr>
			<th class="th1"><a href="adminManage.php">Manage account</a></th>
			<th class="th1"><a href="adminList.php">List</a></th>	
			<th class="th1" "><a href ="adminTimeTable1.php">TimeTable</a></th>
  			<th class="th1"><a href ="adminResult.php">Result</a></th

  			<th class="th1"><a href ="adminLeave1.php">NOTIFICATIONS</a></th
			<th class="th1" style="padding-left: 100px"><a href=" logout.php">Logout</a></th>
		</tr>
	</table>
</div>

</body>
</html>