<!DOCTYPE html>
<html lag="en_US">
	<head>
		<meta charset="UTF-8">
		<title>Student Management System</title>
	</head>

<body>

<h3 align="right", style="margin-right"><a href="login.php">Admin login</a></h3>
<h1 align="center"> Welcome </h1>

<form method="post" action="main.php" >
<table style="width:30%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>
		<td align="left">Choose Standerd</td>
		<td>
			<select name="std">
			<option value="1">1st</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="left">Enter Rollno</td>
		<td><input type="text" name="rolno"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="Submit" name="submit" value="show info"></td>
	</tr>
</table>
</form>
</body>

</html>
