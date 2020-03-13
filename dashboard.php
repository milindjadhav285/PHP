<?php
session_start();
	if (isset($_SESSION['uid']))
	{
		echo "";
	}
	else 
	{
		header ('location:../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Management System</title>
</head>

<body>
	<div class="admintitle" align="center">
		<h1>Welcome to Admin Dashboard</h1>
		<h4><a href="logout.php" style="float:right">Logout</a></h4>
	</div>
	<div>
		<table border="1">
			<tr>
				<td>1.</td><td><a href="add.php">Insert Student</a></td>
			</tr>
			<tr>
				<td>2.</td><td><a href="update.php">Update Student</a></td>
			</tr>
			<tr>
				<td>3.</td><td><a href="delete.php">Delete Student</a></td>
			</tr>
		</table>
	</div>
</body>

</html>