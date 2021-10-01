<?php
include 'koneksi.php';
$id = $_GET['id_prodi'];


$query = "DELETE FROM tb_prodi WHERE id_prodi = $id";

mysqli_query($koneksi, $query)
or die("Gagal Perintah SQL".mysqli_error($koneksi));
header('location:data_prodi.php');

?>