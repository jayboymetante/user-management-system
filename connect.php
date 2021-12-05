<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "user-management-system";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";
?>