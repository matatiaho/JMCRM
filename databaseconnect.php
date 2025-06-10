<?php
$servername = "localhost";
$database = "u593997835_crm";
$username = "u593997835_matatiaho";
$password = "Boomwelc0m";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>