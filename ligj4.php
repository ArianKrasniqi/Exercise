<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form action="handleform.php" method="post">
    <input type="text" name="name" placeholder="name" required><br>
    <input type="text" name="lastname" placeholder="lastname" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <select name="profession">
      <option selected disabled>Profession:</option>
      <option value="frontend">FrontEnd Developer</option>
      <option value="backend">BackEnd Developer</option>
    </select>
    <input type="checkbox" name="work" value="true"> A jeni i knaqur me punen <br>
    
    <input type="radio" name="gender" value="male" required> Male<br>
    <input type="radio" name="gender" value="female" required> Female<br>


    <input type="radio" name="graduate" value="male"> Graduated<br>
    <input type="radio" name="graduate" value="female"> Didnt Graduate<br>
    
    <input type="submit" name="submit">
  </form>

</body>
</html>