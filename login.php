<?php
session_start();
include "koneksi.php";

if (isset($_POST['masuk'])) {
    // Menerima input dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk memeriksa data admin
    $qry = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$nama' AND password = '$password'");

    if (mysqli_num_rows($qry) > 0) {
        // Ambil data admin
        $data = mysqli_fetch_assoc($qry);

        // Set session jika login berhasil
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['password'] = $data['password'];
        header("Location: infoadmin.php");
        exit();
    } else {
        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        header("Location: login.php?pesan=gagal");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo_catur.png" type="image/x-icon" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style-login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="login-container">
      <div class="login-wrapper">
        <form action="" method="POST">
          <h1>Login</h1>

          <!-- Menampilkan pesan error jika login gagal -->
          <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
            <div class="error-message">
              <p>Username atau password salah. Silakan coba lagi!</p>
            </div>
          <?php endif; ?>

          <div class="input-group">
            <label for="nama">Username</label>
            <input
              id="nama"
              name="nama"
              type="text"
              placeholder="Type your username here"
              required
            />
          </div>
          <div class="input-group">
            <label for="password">Enter your Password</label>
            <div class="password-field">
              <input
                id="password"
                name="password"
                type="password"
                placeholder="Type your password here"
                required
              />
              <i class="fa-regular fa-eye" id="toggle-password"></i>
            </div>
          </div>
          <button type="submit" name="masuk" class="btn-login">Login</button>
        </form>
      </div>
    </div>
  </body>
  <footer></footer>
</html>
