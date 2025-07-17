<?php
include "koneksi.php";
include "koneksi.php";
$result = mysqli_query($conn, "SELECT isi FROM info WHERE id_info = 1");
$hasil = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <title>UKM Catur</title>
  </head>
  <body>
    <header>
    <?php
    include "header.php";
    ?>
    </header>

   <div class="container">
    <div class="gambar">
    <img src="img/logo_catur.png" width="350px" alt="">
    </div>
    <div class="text">
        <p><?= $hasil['isi']?></p>
    </div>
   </div>
  </body>
</html>
