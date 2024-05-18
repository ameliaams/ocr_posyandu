<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Database</title>
</head>
<style media="screen">
    a button {
        padding: 12px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        background: #F0AD4E;
        color: white;
    }
</style>

<body>
    <table border=1 cellpadding=10>
        <tr>
            <td>#</td>
            <td>Date & Time</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM hasil_ocr ORDER BY id_gambar DESC");
        ?>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["tanggal"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"]; ?>" width="200" title="<?php echo $row["gambar"]; ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="kamera.php"><button type="button" name="button">Go to Webcam Page</button></a>
</body>

</html>