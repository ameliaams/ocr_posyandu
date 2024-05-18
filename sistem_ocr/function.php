<?php
$conn = mysqli_connect("localhost", "root", "", "posyandu_db");

if (isset($_POST['image'])) {
    $base64image = $_POST['image'];
    $imageData = base64_decode($base64image);
    $imageName = date("Y.m.d") . " - " . date("h.i.sa") . '.jpg';
    file_put_contents('img/' . $imageName, $imageData);

    $date = date("Y/m/d") . " & " . date("h:i:sa");
    $query = "INSERT INTO hasil_ocr (tanggal, gambar) VALUES ('$date', '$imageName')";
    mysqli_query($conn, $query);
}
?>
