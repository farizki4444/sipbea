<?php 
	include "koneksi.php";
	$id = $_GET['id_beasiswa'];
	$ambildata = mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE id_beasiswa='$id'");
	$data = mysqli_fetch_array($ambildata);

	if(isset($_POST['simpan']))
	{
		$id			= $_POST['id_beasiswa'];
		$nama_jurusan	= $_POST['nama_beasiswa'];
		$waktu_publis	= $_POST['waktu_publikasi'];
		$batas_daftar	= $_POST['batas_pendaftaran'];
		$simpan = mysqli_query($koneksi, "UPDATE tb_beasiswa 
		SET id_beasiswa='$id', nama_beasiswa='$nama_jurusan', waktu_publikasi='$waktu_publis', batas_pendaftaran='$batas_daftar'
		WHERE id_beasiswa='$id'");
          if($simpan) //jika simpan sukses
          {
            echo "<script> 
                  alert('Edit Data Berhasil!');
                  document.location='data_beasiswa.php';
                </script>";
          }else
          {
            echo "<script> 
                  alert('Edit Data Gagal!');
                  document.location='data_beasiswa.php';
                </script>";
          }
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Data Beasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container col-md-6">
		<div class="card">
			<div class="card-header">
				Input Data Beasiswa
			</div>
				<div class="card-body">
					<form action="" method="POST" class="form-item">
						<div class="form-group">
				     		<label>id Beasiswa</label>
				     		<input type="text" name="id_beasiswa" class="form-control">
				    </div>

						<div>
     						<label>Nama Beasiswa</label>
                             <input type="text" name="nama_beasiswa" class="form-control">
     					</div>

						 <div>
     						<label>Waktu Publikasi</label>
                             <input type="date" name="waktu_publikasi" class="form-control">
							 <input type="time" name="waktu_publikasi" class="form-control">
     					</div>

						 <div>
     						<label>Batas Pendaftaran</label>
                             <input type="date" name="batas_pendaftaran" class="form-control">
							 <input type="time" name="batas_pendaftaran" class="form-control">
     					</div>


				     	<button type="submit" class="btn" name="simpan">Simpan</button>
     					<button type="reset" class="btn " name="reset">Clear</button> 
					</form>

				</div>
		</div>

	</div>

	
</body>
</html>