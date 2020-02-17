<?php 
require 'connection.php';

$title = $_POST['title'];
$time = $_POST['time'];
// $file = $_POST['file'];

$file = addslashes(file_get_contents($_FILES['file']["tmp_name"]));

$sql = "INSERT INTO recipes (title, time, image) VALUES ('$title', '$time', '$file')";

//Mundem mos me perdor '=== TRUE' pasiqe $conn->query($sql) osht Truthy ose Falsy Value
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header ('Location: addFood.php');

?>