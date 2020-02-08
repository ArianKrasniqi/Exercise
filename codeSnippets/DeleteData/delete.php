Object Oriented
<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

// sql to delete a record
$sql = "DELETE FROM TableName WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

Procedural
<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

// sql to delete a record
$sql = "DELETE FROM TableName WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>