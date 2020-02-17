<?php 
include 'header.php';
include 'connection.php';

// session_start();

if(!$_SESSION['loggedin']){
  header('Location: index.php');
}

$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<!-- As a link -->
<!-- <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="logout.php">Logout</a>
</nav> -->

<section class="main_container">
  <div class="filter_sideBar">
    <h1 class="main_title">
      Filter items by <br />
      cooking time
    </h1>
    <div>
      <div>
        <label>&gt 20 min</label>
        <input type="checkbox" id="first_cb" />
      </div>
      <div>
        <label>&lt 10 min</label>
        <input type="checkbox" id="second_cb" />
      </div>
    </div>
  </div>

  <div class="content">
    <input
      class="input_button"
      id="search_input"
      type="text"
      placeholder="Search for items..."
    />
    <button class="input_button" id="search_btn">Search</button>

    <div id="items_cnt">

      <?php 
          while($row = $result->fetch_assoc()) {
      

      ?>

      <div class="item">
        <div class="image">
          <img class="image_tag" src="data:image;base64,<?php echo base64_encode($row["image"]); ?>" />
        </div>
        <div>
          <h3><?php echo $row["title"]; ?></h3>
          <p><?php echo $row["time"]; ?></p>
          <button class="input_button btn">See item</button>
        </div>
      </div>

      <?php 
          }
        }
      ?>
    </div>

  </div>
</section>