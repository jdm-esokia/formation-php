<?php
$servername = "mysql";
$username = "user";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("MySQL Connection failed: " . $conn->connect_error);
}
echo "<h1>MySQL Connected successfully!</h1>";
?>
