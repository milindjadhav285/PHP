<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/dashboard.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
</head>

<body>
<h1 align="center">Admin Login</h1>
<form action="login.php" method="post">
	<table align="center">
	<tr>
	<td>Username</td><td><input type="text" name= "uname" required ></td>
	</tr>
	<tr>
	<td>Password</td><td><input type="password" name= "pass" required ></td>
	</tr>
	<tr>
	<td colspan="2" align ="center"><input type="submit" name= "login" value="Login"></td>
	</tr>
	</table>
</form>
</body>

</html>
<?php
include('conn.php');
if(isset($_POST['login']))
{
	$username= $_POST['uname'];
	$password= $_POST['pass'];
	
	$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row <1)

	{
		?>
		<script>
			alert('Username or Password not match !!');
			window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		
		$_SESSION['uid']=$id;
		header('location:admin/dashboard.php');
		}
	
}
?>