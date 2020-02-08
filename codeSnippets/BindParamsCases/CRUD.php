<?php
//Select
$var = "variable";
$stmt = $conn->prepare("SELECT password FROM TableName WHERE username = ?");
$stmt->bind_param("s", $var);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) exit('No rows');
while($row = $result->fetch_assoc()) {
  print_r($row);
}
$stmt->close();

// Insert
$stmt = $mysqli->prepare("INSERT INTO myTable (name, age) VALUES (?, ?)");
$stmt->bind_param("si", $_POST['name'], $_POST['age']);
$stmt->execute();
$stmt->close();

// Update
$stmt = $mysqli->prepare("UPDATE myTable SET name = ? WHERE id = ?");
$stmt->bind_param("si", $_POST['name'], $_SESSION['id']);
$stmt->execute();
$stmt->close();

// Delete
$stmt = $mysqli->prepare("DELETE FROM myTable WHERE id = ?");
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();
$stmt->close();
?>