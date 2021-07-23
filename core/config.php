<?php
// Adatbázis csatlakozás

define("HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hidegteam");

// define("HOST", "localhost");
// define("DB_USER", "hidegtea_karaKrisz");
// define("DB_PASS", "Hacker13prog");
// define("DB_NAME", "hidegtea_hidegteam");


// Adatbázis csatlakozás
$dbc = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
$sql = "set names utf8";
mysqli_query($dbc, $sql);

if (!$dbc) {
    die('Connect Error: ' . mysqli_connect_error());
}
