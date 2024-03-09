<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "posyandu_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Koneksi dengan MySQL gagal <br>; " . mysqli_connect_error();
}
