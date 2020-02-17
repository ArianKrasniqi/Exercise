<?php include 'header.php'; ?>

<form action="addFoodPHP.php" method="post" class="forma" enctype="multipart/form-data">
  <input type="text" id="title" name="title" placeholder="Title">
  <input type="number" id="time" name="time" placeholder="Time">
  <input type="file" id="file" name="file">
  <input type="submit" id="submit" name="submit" placeholder="submit">
</form>

<script>
// $('.add').click(function() {
//   $('.msg').addClass('hide');
//   $('.forma').removeClass('hide');

//   $('#name').val('')
// })
  
// $('#submit').click(function(event){
//   event.preventDefault();
  
//   $('.forma').addClass('hide');
//   $('.msg').removeClass('hide');

//   let title = $('#title').val();
//   let time = $('#time').val();
//   let file = $('#file').val();

//   const data = {
//     title: title,
//     time: time,
//     file: file
//   }

//   callAjax(data);
// })

// function callAjax(data) {
//   $.ajax({
//   url: 'addFoodPHP.php',
//   type: 'POST',
//   data: data,
//   success: function(data){
//     console.log(data)
//   },
//   error: function(data){
//     console.log(data)
//   }
// })
// }
// </script>