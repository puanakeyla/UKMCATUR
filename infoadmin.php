<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="infoadmin.css">
    <title>Admin Catur</title>
</head>
<body>
    <?php
    include "headeradmin.php";
    ?>

<table border="1" >
    <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Isi</td>
        <td>Gambar</td>
        <td>Action</td>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT judul, isi FROM info ");
    $hasil = mysqli_fetch_assoc($result);
    $nomor = 1;
    ?>
    <tr>
        <td><?= $nomor++?></td>
        <td><?= $hasil['judul']?></td>
        <td><?= $hasil['isi']?></td>
        <td>gambar</td>
        <td class="action"><a href="edit.php">Edit</a>|<a href="hapus.php">Hapus</a></td>
    </tr>
</table>
</body>
</html>