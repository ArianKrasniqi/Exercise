<?php 

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "phpcourse";

$mysqli = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>