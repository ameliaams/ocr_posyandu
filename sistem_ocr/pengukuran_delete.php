<?php
include "../sistem_ocr/connection.php";
$id_pengukuran = $_GET["id_pengukuran"];
$sql = "DELETE FROM `pengukuran` WHERE id_pengukuran = $id_pengukuran";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: pengukuran.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
