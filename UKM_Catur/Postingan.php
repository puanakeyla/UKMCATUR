<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon">
  <link rel="stylesheet" href="stylespostingan.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Postingan</title>
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
<body>
  <header>
  <?php
    include "header.php";
    ?>
  </header>

  



<?php
    include "koneksi.php";
    $select = mysqli_query($conn, "SELECT * FROM postingan ");
    while($hasil = mysqli_fetch_array($select)){
    
    ?>

        <div class="container">
          <div class="lomba">
          <img src="<?= $hasil['gambar']?>" alt="<?= $hasil['Judul']?>">
          <p class="date"><?= $hasil['tangal']?></p>
          <h5><?= $hasil['Judul']?></h5>
          <p><?= $hasil['isi']?> </p> 
        </div>
        </div>
        <?php }?>

</body>
</html>
