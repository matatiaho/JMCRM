<?php
$conn = mysqli_connect("localhost", "u593997835_matatiaho", "Boomwelc0m", "u593997835_crm");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>