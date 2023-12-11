<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == "admin" && $password == "pass") {
    session_start();
    $_SESSION["user"] = "admin";
    header("Location:index.php");
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/style.css">
  <title>Admin Login</title>
</head>
<body>
    <div class="login-container">
      <div class="login-img">
        <img src="../IMAGE/CMS.jpg" alt="">
      </div>
      <div class="login-form">
        <div class="admin mb-3">
          <img class="admin-icon" width="48" height="48" src="https://img.icons8.com/color/48/administrator-male--v1.png" alt="administrator-male--v1"/>
          <h2 class="text-center mb-0 p-2">ADMIN LOGIN</h2>

        </div>
        <form action="login.php" method="post">
          <div class="form-field mb-4">
            <input class="form-control" type="text" name="username" id="" placeholder="Enter your Username">
          </div>
          <div class="form-field mb-4">
            <input class="form-control" type="password" name="password" id="" placeholder="Enter your Password">
          </div>
          <div class="form-field mb-4">
            <input class="btn btn-primary" type="submit" value="Login" id="" name="login">
          </div>
          
        </form>
      </div>
    </div>
</body>
</html>