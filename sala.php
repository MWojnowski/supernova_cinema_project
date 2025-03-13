<?php
require "connect.php";
if (empty($_SESSION["id"])) {
  header("Location: login.php");
}
// ? Przekierowuje do strony z logowaniem jeśli nie jest zalogowany
?>
<!DOCTYPE html>
<html lang="en">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="600;url=logout.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

        <link rel="stylesheet" href="assets/css/starter.css">
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script type="module" src="assets/js/starter.js"></script>
        <title>Supernova Cinema</title>
    <style>
     .echo
     {
         width:max-content;
         background-color:transparent;
     }
        .miejsce
        {
            background-color:black;
            width:50px;
            height:50px;
            margin: 5px 5px;
            display: inline-block;
            color:white;
            text-align: center;
            border-radius: 15%;
        }
        .ekran
        {
            height:25px;
            width:44vw;
            color:black;
            background-color:grey;
            position: relative;
            left: 55vw;  
        }
        #sala
        {
            display:flex;
            justify-content:right;
            padding: 300px 100px 100px 100px;
            position:relative;
            right:2vw;
        }
        .active
        {
            background-color:green;
            width:50px;
            height:50px;
            margin: 5px 5px;
            display: inline-block;
            color:white;
            text-align: center;
            border-radius: 15%;
        }
        .zajete
        {
            background-color:red;
            width:50px;
            height:50px;
            margin: 5px 5px;
            display: inline-block;
            color:white;
            pointer-events: none;
            text-align: center;
            border-radius: 15%;
        
        }
    </style>
</head>
<body class="bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.html"><img href="index.html" src="assets/img/logo_white.png" width="220" height="104" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Strona Główna</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Repertuar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="repertuar_Z.html">Zabrze</a>
                <a class="dropdown-item" href="repertuar_G.html">Gliwice</a>
                <a class="dropdown-item" href="repertuar_K.html">Katowice</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link">Rezerwacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontakt.html">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vip.html">Fotele VIP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="powrót()">Wróć</a>
            </li>
            </ul>
        </div>
        </nav>
    <div id="sala">
        
  
        <div id="rzedy">

        </div>
    </div>
    <form method="post" id="my-form">
    <input class="btn btn-primary" type="submit" value="rezerwuj" name="rezerwuj" id="input">
</form>
    <?php
    require "rezerwacja.php";
     require "kino.php";
     
     wybrany_seans();
    ?>
    
    <div class="container">
      <footer class="bg-dark d-flex flex-wrap justify-content-between align-items-center py-10 my-6 border-top">
        <p class="col-md-4 mb-0 text-white">© 2022 Supernova Cinema</p>
        <ul class="nav col-md-5 justify-content-end">
          <li class="nav-item"><a href="index.html" class="nav-link text-white px-2">Strona Główna</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link text-white px-2">Rezerwacja</a></li>
          <li class="nav-item"><a href="kontakt.html" class="nav-link text-white px-2">Kontakt</a></li>
          <li class="nav-item"><a href="vip.html" class="nav-link text-white px-2">Fotele VIP</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>