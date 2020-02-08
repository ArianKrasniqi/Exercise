<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";//WHERE - Cfardo kushti qe na nevojitet

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>