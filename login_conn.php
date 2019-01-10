<?php
session_start();
/* include db connection file */
$servername = "localhost";
$username = "root";
$password = "";
$db = "ppm";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

if(isset($_POST['submit']))
{
	/* capture values from HTML form */
	$username = $_POST['username1'];
	$password = $_POST['password1'];

	$query = mysqli_query($conn,$sql = "SELECT * FROM user 
	WHERE username = '$username' AND 
	password = '$password'");	
	
	//$query = mysql_query($sql) or die("Error:" . mysql_error());
	$row = mysqli_num_rows($query);
		
	if($row == 0)
	{
		header("Location: index.php?log=fail");	
	}
	else
	{
		$r = mysqli_fetch_assoc($query);					
		$_SESSION['LEVEL'] = 1;
		$_SESSION['USERNAME'] = $r['USERNAME1'];
		if($r['user_type'] == 'ADMINISTRATOR' || $r['user_type'] == 'SUPERVISOR')
		{
			header("Location: dashboardAdmin.php");	
		}
		else {
			header("Location: dashboard.php"); 
			}
		}
	}


?>
