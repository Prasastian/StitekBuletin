<?php
$host = "127.0.0.1";
$username = "root";
$password = "1gN33l22";
$database = "stitek_bltn";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>