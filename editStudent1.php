<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
<?php
	include 'dbConnect.php';
	session_start();
	$se_id =$_SESSION['id'];

	$sql1 = " select * from `student` where `id`='$se_id'" ;
	$result1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
	list($id,$name,$password,$emailid,$contact,$classid,$gender,$dob,$adress,$ac)=mysqli_fetch_array($result1);

	?>
	<form action="editStudent2.php" method="POST">
						Name:<br>
						<input type="text" name="name" value=<?php echo $name ?>>
						<br>
						Password:<br>
						<input type="Password" name="password">
						<br>
						Email-id:<br>
						<input type="text" name="emailid" value=<?php echo $emailid ?>>
						<br>
						Contact Number:
						<br>
						<input type="text" name="number" value=<?php echo $contact?>>
						<br><br>
						Your Class:
						<select name="selectClass">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>

						Gender:<br>
						<input type="radio" name="gender" value="male">Male<br>
						<input type="radio" name="gender" value="female">Female<br>
						DOB:<br>
						<input type="date" name="date" value=<?php echo $dob ?>>
						<br>
						Adress:<br>
						<input type="text" name="address" value=<?php echo $adress ?>>
						<br>
						ALternative Contact:<br>
						<input type="text" name="acontact" value=<?php echo $ac ?>>

						<input type="submit" name="submit" value="submit">





		
	</form>



</body>
</html>