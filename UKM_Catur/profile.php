<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <title>Profile</title>
  </head>
  <body>
    <header>
    <?php
    include "header.php";
    ?>
    </header>

    <h1>Kebun Binatang</h1>

<div class="container">

    <ul class="galery">
        <li>
            <a href="#gambar1">
                <img src="img/presidium.png" alt="Badak" width="120px" height="120px">
                <span>Badak</span>
            </a>
            <div class="overlay" id="gambar1">
                <a href="#" class="close">X Close</a>
                <a href="#gambar4" class="prev">prev</a>
                <img src="img/presidium.png" width="" alt="Badak">
                <a href="#gambar2" class="next">next</a>
            </div>
        </li>
        <li>
            <a href="#gambar2">
                <img src="img/humas.png" alt="Monyet" width="120px" height="120px">
                <span>Monyet</span>
            </a>
            <div class="overlay" id="gambar2">
                <a href="#" class="close">X Close</a>
                <a href="#gambar1" class="prev">prev</a>
                <img src="img/humas.png" width="" alt="Monyet">
                <a href="#gambar3" class="next">next</a>
            </div>
        </li>
        <li>
            <a href="#gambar3">
                <img src="img/kader.png" alt="Singa" width="120px" height="120px">
                <span>Singa</span>
            </a>
            <div class="overlay" id="gambar3">
                <a href="#" class="close">X Close</a>
                <a href="#gambar2" class="prev">prev</a>
                <img src="img/kader.png" width="" alt="Singa">
                <a href="#gambar4" class="next">next</a>
            </div>
        </li>
        <li>
            <a href="#gambar4">
                <img src="img/DeptSaranadanPrasarana.png" alt="Zebra" width="120px" height="120px">
                <span>Zebra</span>
            </a>
            <div class="overlay" id="gambar4">
                <a href="#" class="close">X Close</a>
                <a href="#gambar3" class="prev">prev</a>
                <img src="img/DeptSaranadanPrasarana.png" width="" alt="Zebra">
                <a href="#gambar1" class="next">next</a>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
</div>
  </body>
</html>
