<?php
$servername = "localhost"; //For Local Machines server name is localhost. Check Servername for Remote Servers
$username = "username"; //Username by Default is root (http://localhost/phpmyadmin/) 
$password = "password"; //No Password by Default. Declare it as empty string ''
$database = "dbname"; //Database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>