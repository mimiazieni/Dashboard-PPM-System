<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['username']; 
mysqli_query($conn,"DELETE FROM user WHERE username='".$id."'");
mysqli_close($conn);
header("Location: userAdmin.php");
?> 