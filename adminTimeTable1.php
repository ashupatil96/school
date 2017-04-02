<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


					<table>
							<tr><th style="width: 50px">Upload file</th><th style="width: 50px">Write</th><th>Submit</th></tr>
							<tr>
								<form action="adminTimeTable2.php"  method="POST" enctype="multipart/form-data">
								
								<td><input type="file" name="file"></td>
								<td><select name="select">
										<option value="1">CLASS first</option>
										<option value="2">SEcond</option>
										<option value="3">third</option>
										<option value="4">Fourth</option>
									</select></td>

								<td><input type="submit" name="upload"></td>

								</form>

							</tr>
					</table>
</body>
</html>