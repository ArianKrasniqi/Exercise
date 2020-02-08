<?php
include 'included/header.php';
include 'connectionProc.php';
?>
<div class="container">

<div class="blog">
<?php
$sqlQuery = "SELECT * FROM testtable";
$result = mysqli_query($conn, $sqlQuery);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
  ?>

  <div class="card" style="width: 18rem;">
    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['title']; ?></h5>
      <p class="card-text"><?php echo $row['description']; ?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <?php
  }
}
?>

</div>
<div class="trending">

<h4>Trendings</h4>

<?php

$sqlTrend = "SELECT * FROM testtable WHERE Trending = 1";
$result = mysqli_query($conn, $sqlTrend);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
?>

<div class="card" style="width: 18rem;">
    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['title']; ?></h5>
      <p class="card-text"><?php echo $row['description']; ?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
  

<?php 
  }
}
?>
</div>
</div>

<?php
include 'included/footer.php';
?>

<style>
.container{
  display: flex;
  flex-direction: row;
}

.blog{
  margin-top: 40px;
  width: 70%;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
}

.trending{
  width: 30%;
  height: 100px;
}
</style>