<?php
include 'koneksi.php';
$id = $_GET['id_beasiswa'];


$query = "DELETE FROM tb_beasiswa WHERE id_beasiswa = $id";

mysqli_query($koneksi, $query)
or die("Gagal Perintah SQL".mysqli_error($koneksi));
header('location:data_beasiswa.php');

?>