<?php
$servername= "mysql-db";
$username = "dbuser";
$password = "dbpass";
$dbname = "dbname"; // MySQL service name in compose
// Create connection
$conn = new mysqli($servername, $username, $password, $dbnane);
Check connection
if ($conn->connect_error) {
	die("Connection failed: " • $conn-›connect_error);
}
?>
