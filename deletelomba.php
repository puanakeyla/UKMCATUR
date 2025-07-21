<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM lomba WHERE id_lomba='$id'")or die(mysqli_error());
 
header("location:lombaadmin.php?pesan=hapus");
?>