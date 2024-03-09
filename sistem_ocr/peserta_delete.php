<?php
include "../sistem_ocr/connection.php";
$id_balita = $_GET["id_balita"];
$sql = "DELETE FROM `balita` WHERE id_balita = $id_balita";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: peserta.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
