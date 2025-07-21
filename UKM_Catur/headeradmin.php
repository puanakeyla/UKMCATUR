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
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <style>
      
    </style>
   
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">
          <img src="img/logo_catur.png" alt="Logo UKM Catur" />
          UKM CATUR
        </div>
        <ul>
          <li><a href="infoadmin.php">Beranda</a></li>
          <li><a href="postinganadmin.php">Postingan</a></li>
          <li><a href="lombaadmin.php">Lomba</a></li>
          <li><a href="kontakadmin.php">Kontak</a></li>
        </ul>
        <a href="logout.php" class="login-btn">Logout</a>
      </nav>
    </header>


  </body>
</html>
