<?php
include "../sistem_ocr/connection.php";

if (isset($_FILES["posyandu_db"]["tmp_name"])) {
    $tmpName = $_FILES["posyandu_db"]["tmp_name"];
    $imageName = date("Y.m.d") . " - " . date("h.i.sa") . '.jpeg';
    move_uploaded_file($tmpName, 'img/' . $imageName);

    $date = date("Y/m/d") . " & " . date("h:i:sa");
    $query = "INSERT INTO hasil_ocr VALUES('','$date','$imageName')";
    mysqli_query($conn, $query);
}
