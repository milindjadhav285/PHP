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
</body>
</html>