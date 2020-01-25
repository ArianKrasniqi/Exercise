<?php 
include 'connection.php';

$title = $_POST['title'];
$description = $_POST['description'];


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// prepare and bind
$stmt = $mysqli -> prepare("INSERT INTO testtable (title, description) VALUES (?, ?)");
$stmt -> bind_param("ss", $title, $description);

$stmt -> execute();

echo "Inserted data";
?>