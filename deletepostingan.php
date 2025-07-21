<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM postingan WHERE id_postingan='$id'")or die(mysqli_error());
 
header("location:postinganadmin.php?pesan=hapus");
?>