<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "kino2";
// ! do zmiany

session_start();
$connect = mysqli_connect($server, $user, $password, $db);
// ? łączy z bazą danych