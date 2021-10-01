<?php 
	include "koneksi.php";
	$id = $_GET['id_prodi'];
	$ambildata = mysqli_query($koneksi, "SELECT * FROM tb_prodi WHERE id_prodi='$id'");
	$data = mysqli_fetch_array($ambildata);

	if(isset($_POST['simpan']))
	{
		$id			= $_POST['id_prodi'];
		$nama_jurusan	= $_POST['nama_prodi'];
		$id_jurusan	= $_POST['id_jurusan'];
		$simpan = mysqli_query($koneksi, "UPDATE tb_prodi 
		SET id_prodi='$id', nama_prodi='$nama_jurusan', id_jurusan='$id_jurusan'
		WHERE id_prodi='$id'");
          if($simpan) //jika simpan sukses
          {
            echo "<script> 
                  alert('Edit Data Berhasil!');
                  document.location='data_prodi.php';
                </script>";
          }else
          {
            echo "<script> 
                  alert('Edit Data Gagal!');
                  document.location='data_prodi.php';
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
	<title>Tambah Data Prodi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container col-md-6">
		<div class="card">
			<div class="card-header">
				Input Data Prodi
			</div>
				<div class="card-body">
					<form action="" method="POST" class="form-item">
						<div class="form-group">
							<label for="Id_prodi "> Id prodi </label>
							<input type="text" name="id_prodi" value="<?php echo $data['id_prodi']?>" class="form-control col-md-9">
						</div>

						<div>
						<label for="nama_prodi "> nama prodi </label>
							<input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi']?>" class="form-control col-md-9">

     					</div>

						 <div>
						<label for="id_jurusan "> Id jurusan </label>
							<input type="text" name="id_jurusan" value="<?php echo $data['id_jurusan']?>" class="form-control col-md-9">

     					</div>

				     	<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
     					<button type="reset" class="btn btn-danger" name="reset">Clear</button> 
					</form>

				</div>
		</div>

	</div>
</body>
</html>

