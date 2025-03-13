<?php
require 'connect.php';

$_SESSION = [];
session_unset();// thx stack overflow
session_destroy();
header("Location: index.html");
// ? Zamyka sesje (wylogowuje) i przekierowuje na strone główną