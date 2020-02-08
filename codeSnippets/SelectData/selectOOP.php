<?php
require '../DatabaseConnections/connectionOOP.php'; //Db Connection Path

$sql = "SELECT id, firstname, lastname FROM TableName"; //Query | Selektojme disa nga kolonat e tabeles
$result = $conn->query($sql); //$result - Kthen nje associative array me disa parametra (print_r() - per me shume)

//$num_rows - Kthen numrin e rreshtave nga rezultati i queryt
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<?php
//Html Tags per cdo rresht nga databaza
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
  }
?>