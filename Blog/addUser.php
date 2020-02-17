<?php include 'header.php'; ?>

<form action="addUserPHP.php" method="post" class="forma">
  <input type="text" id="name" name="username" placeholder="username">
  <input type="password" id="password" name="password" placeholder="password">
  <input type="email" id="email" name="email" placeholder="email" required>
  <select id="role">
    <option value="0" disabled selected>Role</option>
    <option value="1">Admin</option>
    <option value="2">User</option>
  </select>
  <input type="submit" id="submit" name="submit" placeholder="submit">
</form>

<div class="msg hide">
  <h3>User registred!</h3>
  <button class="add">Add new User</button>
</div>

<script>
$('.add').click(function() {
  $('.msg').addClass('hide');
  $('.forma').removeClass('hide');

  $('#name').val('')
})
  
$('#submit').click(function(event){
  event.preventDefault();
  
  $('.forma').addClass('hide');
  $('.msg').removeClass('hide');

  let username = $('#name').val();
  let password = $('#password').val();
  let email = $('#email').val();
  let role = $('#role').val();

  const data = {
    name: username,
    password: password,
    email: email,
    role: role
  }

  callAjax(data);
})

function callAjax(data) {
  $.ajax({
  url: 'addUserPHP.php',
  type: 'POST',
  data: data,
  success: function(data){
    console.log(data)
  },
  error: function(data){
    console.log(data)
  }
})
}
</script>

<style>
.hide{
  display: none;
}
</style>