<?php
include 'connection.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM users WHERE username='$username'";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password'])){
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      
      header('Location: home.php');
    }else{
      echo "<script>alert('Invalid password')</script>";
      echo "<script>window.location.href = 'index.php'</script>";
    }

} else {
  echo "<script>alert('Invalid username')</script>";
  echo "<script>window.location.href = 'index.php'</script>";
}
$conn->close();
?>