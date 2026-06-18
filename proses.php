<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "jasa_video";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>