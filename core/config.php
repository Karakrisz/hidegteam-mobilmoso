<?php
// Adatbázis csatlakozás
$config = [
    "DB_HOST" => "localhost",
    "DB_USER" => "root",
    "DB_PASS" => "",
    "DB_NAME" => "hidegteam"
];

$connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
//$mysqli->set_charset('utf8mb4');
$sql = "set names utf8";
mysqli_query($connection, $sql);

if (!$connection) {
    die('Connection :error:' . mysqli_connect_error());
}
