<?php
    include "koneksi.php";
    $result = mysqli_query($conn, "SELECT judul, isi FROM info WHERE id_info = 1");
    $hasil = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <style>
      body {
        background-image: url(img/bg.png);
        width: 100pv;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <header>
      
    <?php
    include "header.php";
    ?>
    </header>

    <div class="content">
      <h1><?php echo $hasil['judul']?></h1>
      
      <br>
      <p class="isi">
      <?php echo $hasil['isi']?>
      </p>
      <br>
      <div class="login-button"><a href="selengkapnya.php">Selengkapnya</a></div>
    </div>

  </body>
</html>
