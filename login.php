<?php
require 'connect.php';
// TODO Logowanie błąd overload

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
        <a href="register.php" class="align-self-end">Nie masz konta?</a>
        <h1 class="text-white align-self-center">Zaloguj się</h1>
        <input type="text" class="form-control mt-2"  placeholder="Username/Email" name="usernameoremail" required value="">
        <input type="password" class="form-control mt-2"  placeholder="Hasło" name="password" required value=""><br>
        <button class="btn btn-primary mt-2" type="submit" name="submit">Zaloguj się</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

<?php

if (isset($_POST["submit"])) {
  $usernameoremail = $_POST["usernameoremail"];
  $password = $_POST["password"];
  // ? Pobiera wartości 
  
  $query = "SELECT * FROM users WHERE username = '$usernameoremail' OR email = '$usernameoremail'"; //chyba tak się pisze
  $result = mysqli_query($connect, $query);
  $ready = mysqli_fetch_assoc($result); //thx stackoverflow
  // ? Wysyła kwerende gdzie sprawdza czy email/username istnieje w bazie danych

  if (mysqli_num_rows($result) > 0) {
  // ? Sprawdza czy email/username istnieje

    if ($password == $ready['password']) {
    // ? Sprawdza czy hasło pasuje do emaila/username'a
      $_SESSION["login"] = true;
      $_SESSION["id"] = $ready["id"];
      header("Location: controlpanel.php");
      // ? Rozpoczyna sesje (loguje się) na id z bazy danych i przekierowuje do panelu

    }
    else {
      echo "<script> alert('Złe hasło'); </script>";
    }
  }
  else {
    echo "<script> alert('Zła nazwa użytkownika/email'); </script>";
  }
}

?>