<?php
require 'connect.php';
if (!empty($_SESSION["id"])) {
  header("Location: controlpanel.php");
}
// ? Jeśli jesteś zalogowany to przekierowuje do panelu
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

  <link rel="stylesheet" href="assets/css/starter.css">
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="module" src="assets/js/starter.js"></script>
  <title>Supernova Cinema Project</title>
</head>
<body class="bg-dark">
<div class="container p-3">
  <div class="row">
    <div class="col-12 col-md-6 offset-md-3
     shadow-lg p-3 bg-c1">
      <form name="input-form" class="d-flex flex-column justify-content-center" method="post">
        <a href="login.php" class="align-self-end">Masz konto?</a>
        <h1 class="text-white align-self-center">Zarejestruj się</h1>
        <input type="text" class="form-control mt-2"  placeholder="Username" name="username" required>
        <input type="email" class="form-control mt-2" placeholder="Email" name="email" required>
        <input type="password" class="form-control mt-2"  placeholder="Hasło" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
        <button class="btn btn-primary mt-2" type="submit" name="submit">Zarejestruj się</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

<?php 
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $ip = $_SERVER['REMOTE_ADDR']; // ? Pobiera ip - mechanizm zabezpieczający przeciwko multikontom 
  // ? Pobiera wartości 
  
  $query1 = "SELECT * FROM users WHERE username = '$username'";
  $result1 = mysqli_query($connect, $query1);
  $query2 = "SELECT * FROM users WHERE username = '$email'";
  $result2 = mysqli_query($connect, $query2);
  
  if (mysqli_num_rows($result1) > 0) {
    echo "<script> alert('Nazwa użytkownika jest zajęta'); </script>";
  }

  // ? Wysyła kwerende i sprawdza czy username jest zajęty
  else if (mysqli_num_rows($result2) > 0) {
    echo "<script> alert('Email jest zajęty'); </script>";
  }
  // ? Wysyła kwerende i sprawdza czy email jest zajęty

  else {
      $query3 = "INSERT INTO users VALUES('','$username','$email','$password','$ip')";
      mysqli_query($connect, $query3);
      echo "<script> alert('Rejestracja pomyślna'); </script>";
  }
  // ? Dodaje nowego użytkownika 
}
?>