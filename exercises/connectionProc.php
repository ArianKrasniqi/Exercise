<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "phpcourse";

// Create connection
$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>