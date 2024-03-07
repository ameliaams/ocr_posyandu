<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "posyandu_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn) {
    echo "";
} else {
    echo "Koneksi dengan MySQL gagal <br>; " . mysqli_connect_error();
}
