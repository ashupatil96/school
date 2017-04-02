<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\teacher.css">
	<title>TEacher</title>
</head>
<body>
<?php
	session_start();
	echo $_SESSION['id'];
	?>
<div class="teach">
	<table>
		<tr>
			<th class="t1"><a href="teacherhome.php">Homework</a></th>
			<th class="t1"><a href="Ttm.php">Timetable</a></th>
			<th class="t1"><a href="teacherattend.php">Attendance</a></th>
			<th class="t1"><a href="Tcm.php">Communication</a></th>
			<th class="th1"><a href="studentlist.php">STudents list</a></th>
			<th class="th1"><a href="download.php">Stidents HOwework</a></th> 			
			<th class="th1" style="padding-left: 100px"><a href=" logout.php">Logout</a></th>
		</tr>
	</table>
</div>

</body>
</html>