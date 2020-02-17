<body>
  <?php 
  include 'header.php';
  // session_start();
  
  if(isset($_SESSION["loggedin"])){
    if($_SESSION["loggedin"]) header("Location: home.php");
  }
  ?>

  <div class="login">
    <form action="authentication.php" method="post">
      <div class="form-group">
        <label >Email address</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label >Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>