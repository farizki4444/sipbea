<?php
include 'koneksi.php';
$id = $_GET['id_jurusan'];


$query = "DELETE FROM tb_jurusan WHERE id_jurusan = $id";

mysqli_query($koneksi, $query)
or die("Gagal Perintah SQL".mysqli_error($koneksi));
header('location:data_jurusan.php');

?>