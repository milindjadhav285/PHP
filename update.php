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
	<table align="center">
	<form action="update.php" method="post">
	<tr>
		<th>Enter Standerd</th> 
		<td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/></td>

		<th>Enter Standerd</th>
		<td><input type="texy" name="stuname" placeholder="Enter Student Name" required="required"/></td>
		<td><input type="submit" name= "submit" value="Submit"></td>
	</tr>
	</form>
	</table>
	<table>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Name</th>
			<th>RollNo</th>
			<th>Edit</th>
		</tr>
	
 <?php
	if(isset($_POST['submit']))
	{
		include('../conn.php');
		$standerd=$_POST['standerd'];
		$name=$_POST['stuname'];
		
		$sql="SELECT * FROM `student` WHERE standerd ='' AND name LIKE '%$name%'";
		$run= mysql_query($con, $sql);
		if(mysqli_num_rows($run)<1)
		{
			echo "No records Found";
		}
	}
?>
	</table>



</body>
</html>