<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon">
  <link rel="stylesheet" href="styleberita.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Postingan</title>
</head>
  <header>
  <?php
    include "header.php";
    ?>
  </header>

  <style>
    body {
        background-color: black;
        color: white;  /* Agar teks terlihat jelas di latar belakang hitam */
    }
    .lomba {
        background-color: black;  /* Menetapkan latar belakang hitam untuk .lomba */
        color: white;             /* Teks putih dalam elemen .lomba */
    }
  </style>
</head>

<br> </br>
<?php
        include 'koneksi.php';
        $select = mysqli_query($conn, "SELECT * FROM lomba");
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <div class="lomba">
          <img src="<?= $hasil['gambar']?> " alt="<?= $hasil['nama_lomba']?>">
          <p class="date"><?= $hasil['tanggal_lomba']?></p>
          <h3><?= $hasil['nama_lomba']?></h3>
          <p class="isi"><?= $hasil['keterangan']?></p>
        </div>
        <br></br>
        <?php }?>
  
</body>
</html>
