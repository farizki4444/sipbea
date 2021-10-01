<?php
include 'koneksi.php';
$id = $_GET['id_syarat'];


$query = "DELETE FROM tb_syarat_beasiswa WHERE id_syarat = $id";

mysqli_query($koneksi, $query)
or die("Gagal Perintah SQL".mysqli_error($koneksi));
header('location:data_beasiswa.php');

?>