<?php

$servername = "localhost";
$username = "root"; 
$password = "MahitNahi@12"; 
$dbname = "sugar_tracking"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$localhost_url = "http://$_SERVER[HTTP_HOST]";

?>