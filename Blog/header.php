<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php function bootstrap() {  ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <?php } ?>

  <link rel="stylesheet" href="./styles/index.css">
  <link rel="stylesheet" href="styles/recipes.css" />

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <title>Document</title>
</head>
<body>
<div class="header_wrapper">
  <div class="header">
    <h1 class="main_title">Food Corner</h1>

    <ul>
      <?php
        session_start(); 
        if($_SESSION['role'] == 1){
          echo "<li><a href='addUser.php'>Add User</a></li>";
          echo "<li><a href='addFood.php'>Add Food</a></li>";
        }
      ?>
      <li><a href="home.php">Home</a></li>
      <li><a href="">Favorites</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>