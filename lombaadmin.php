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
        <td>Nama Lomba</td>
        <td>Keterangan</td>
        <td>Gambar</td>
        <td>Tanggal Lomba</td>
        <td>Action</td>
    </tr>
    <?php
    $select = mysqli_query($conn, "SELECT id_lomba, nama_lomba, keterangan, gambar, tanggal_lomba FROM lomba ");
    $nomor = 1;
    while($hasil = mysqli_fetch_array($select)){
        ?>
    <tr>
        
        <td><?= $nomor++?></td>
        <td><?= $hasil['nama_lomba']?></td>
        <td><?= $hasil['keterangan']?></td>
        <td><img src="<?= $hasil['gambar']?>" width="100px" alt=""></td>
        <td><?= $hasil['tanggal_lomba']?></td>
        <td class="action"><a href="edit.php?id=<?= $hasil['id_lomba']?>">Edit</a>|<a href="deletelomba.php?id=<?= $hasil['id_lomba']?>">Hapus</a></td>
        
    </tr
    <?php } ?>>
</table>
</body>
</html>