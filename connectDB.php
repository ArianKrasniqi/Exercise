<?php 

$title = $_POST['title'];
$description = $_POST['description'];

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "phpcourse";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB);

// Check Connection
if(!$conn){
  die("Connection failed " . mysqli_connect_error());
}

echo "Connected";

echo "<br>";

$sqlQuery = "INSERT INTO testtable (title, description) VALUES ('$title',  '$description')";

if(mysqli_query($conn, $sqlQuery)){
  echo "Data inserted";
}else{
  echo "Errorrrr";
}
?>