<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Lomba</title>
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #0f0f0f;
            color: #e26a2d;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #1f1f1f;
            padding: 20px 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #e26a2d;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #e26a2d;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #e26a2d;
            background-color: #0f0f0f;
            color: #e26a2d;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="file"] {
            padding: 5px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            background-color: #e26a2d;
            color: #0f0f0f;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            width: 100%;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #e88756;
        }

        .back-btn {
            background-color: #e26a2d;
            color: #0f0f0f;
        }

        .back-btn:hover {
            background-color: #e88756;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Input Data Lomba</h1>
        <form action="" method="POST" >
            <!-- Input Nama Lomba -->
            <label for="nama_lomba">Nama Lomba:</label>
            <input type="text" id="nama_lomba" name="nama_lomba" placeholder="Masukkan nama lomba" required>

            <!-- Input Keterangan Lomba -->
            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="ket" placeholder="Masukkan keterangan lomba" required></textarea>

            <!-- Input Gambar Poster -->
            <label for="gambar">Gambar Poster:</label>
            <input type="file" id="gambar" name="foto" accept="image/*" required>

            <!-- Input Tanggal Lomba -->
            <label for="tanggal_lomba">Tanggal Lomba:</label>
            <input type="date" id="tanggal_lomba" name="tanggal_lomba" required>

            <!-- Tombol Submit -->
            <button type="submit" name="tambah">Simpan Data</button>

            <!-- Tombol Back -->
            <button type="submit"  class="back-btn" onclick="location.href='lombaadmin.php'">Kembali</button>
        </form>
    </div>
</body>
<?php
include "koneksi.php";

if (isset($_POST['tambah'])) {
    // Validasi input form
    if (empty($_POST['nama_lomba']) || empty($_POST['ket']) || empty($_POST['tanggal_lomba']) || !isset($_FILES['foto'])) {
        die("Semua field wajib diisi!");
    }

    // Validasi file upload
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
    $file_ext = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_ext)) {
        die("Ekstensi file tidak diizinkan. Hanya file JPG, JPEG, PNG, dan GIF diperbolehkan.");
    }

    // Path upload file
    $path = "./img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . "." . $file_ext;

    // Buat folder jika belum ada
    if (!is_dir('./img')) {
        mkdir('./img', 0777, true);
    }

    // Pindahkan file upload
    if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $path)) {
        die("Gagal mengupload gambar.");
    }

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO lomba (nama_lomba, keterangan, gambar, tanggal_lomba) 
              VALUES ('".$_POST['nama_lomba']."', '".$_POST['ket']."', '".$path."', '".$_POST['tanggal_lomba']."')";

    if (mysqli_query($conn, $query)) {
        header("Location: lombaadmin.php");
        exit(); // Menghentikan eksekusi kode
    } else {
        die("Error: " . mysqli_error($conn));
    }
}

$conn->close();
?>



</html>
