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
        <td>Tanggal Postingan</td>
        <td>Action</td>
    </tr>
    <?php
    $select = mysqli_query($conn, "SELECT Judul, isi, gambar, tangal FROM postingan ");
    $nomor = 1;
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td><?= $nomor++?></td>
        <td><?= $hasil['Judul']?></td>
        <td><?= $hasil['isi']?></td>
        <td><img src="<?= $hasil['gambar']?>" width="100px" alt=""></td>
        <td><?= $hasil['tangal']?></td>
        <td class="action"><a href="edit.php?id=<?= $hasil['id_postingan']?>">Edit</a>|<a href="deletelomba.php?id=<?= $hasil['id_postingan']?>">Hapus</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>