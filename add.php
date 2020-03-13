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
<form method="post" action="add.php" enctype="multipart/form-data">
	<table border="1" align="center">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Fullname" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		<tr>
			<th>Parentsontact No</th>
			<td><input type="text" name="pcon" placeholder="Enter Parents contact no" required></td>
		</tr>
		<tr>
			<th>Standerd</th>
			<td><input type="number" name="std" placeholder="Enter Standerd" required></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" required></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../conn.php');
	$rolno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$std =$_POST['std'];
	$imagename=$_FILES['simg']['name'];
	$tempnam=$_FILES['simg']['tmp_name'];
	
	

	$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`) VALUES ('$rolno', '$name', '$city', '$pcon', '$std')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
			alert('Data Inserted Successdully.');
		</script>
		<?php
	}
}

?>