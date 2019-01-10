<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit1']))
{
	/* capture values from HTML form */
	$username1 = $_POST['username1'];
	$name1 = $_POST['name1'];
	$password1 = $_POST['password1'];
	$shift1 = $_POST['shift1'];
	$user_type1 = $_POST['user_type1'];
	
	mysqli_query($conn,$sql2 = "INSERT INTO user 
	(username, name, password, shift, user_type)
	VALUES ('" . $username1 . "', '" . $name1 . "', '" . $password1 . "','" . $shift1 . "','" . $user_type1 . "')");
	if (mysqli_query($conn, $sql2)) {
   
		
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);header("Location: addNewUser.php?status=fail1");

} else {
		echo "New record created successfully"; header("Location: userAdmin.php?status=success");
}
}

/* close db connection */
mysqli_close($conn);
?>