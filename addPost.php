  <?php include 'included/header.php' ?>

  <form action="connectDB.php" method="POST">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" name="submit">
  </form>

  <?php include 'included/footer.php' ?>