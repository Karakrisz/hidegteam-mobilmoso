<?php

define("HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hidegteam");


// Adatbázis csatlakozás
$dbc = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
$sql = "set names utf8";
mysqli_query($dbc, $sql);

if (!$dbc) {
    die('Connect Error: ' . mysqli_connect_error());
}
