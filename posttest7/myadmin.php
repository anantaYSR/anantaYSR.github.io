<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db_name = "024_ananta";

$db = mysqli_connect($server, $username, $password, $db_name);

if (!$db) {
    die("Gagal Terhubung");
}
