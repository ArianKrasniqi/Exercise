<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

$sql = "SELECT id, firstname, lastname FROM TableName"; //Query | Selektojme disa nga kolonat e tabeles
$result = mysqli_query($conn, $sql);//$result - Kthen nje associative array me disa parametra (print_r() - per me shume)

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>