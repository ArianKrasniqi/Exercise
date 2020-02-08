<?php 
include 'header.php';

session_start();

if(!$_SESSION['loggedin']){
  header('Location: index.php');
}
?>

<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav>

<h1>Welcome <?php echo $_SESSION['username']; ?></h1>