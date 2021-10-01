<?php 
	include "koneksi.php";
	$id = $_GET['id_jurusan'];
	$ambildata = mysqli_query($koneksi, "SELECT * FROM tb_jurusan WHERE id_jurusan='$id'");
	$data = mysqli_fetch_array($ambildata);

	if(isset($_POST['simpan']))
	{
		$id			= $_POST['id_jurusan'];
		$nama_jurusan	= $_POST['nama_jurusan'];
		$simpan = mysqli_query($koneksi, "UPDATE tb_jurusan 
		SET id_jurusan='$id', nama_jurusan='$nama_jurusan'
		WHERE id_jurusan='$id'");
          if($simpan) //jika simpan sukses
          {
            echo "<script> 
                  alert('Edit Data Berhasil!');
                  document.location='data_jurusan.php';
                </script>";
          }else
          {
            echo "<script> 
                  alert('Edit Data Gagal!');
                  document.location='data_jurusan.php';
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
	<title>Tambah Data Jurusan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container col-md-6">
		<div class="card">
			<div class="card-header">
				Input Data Jurusan
			</div>
				<div class="card-body">
					<form action="" method="POST" class="form-item">
						<div class="form-group">
							<label for="Id_jurusan "> Id_jurusan </label>
							<input type="text" name="id_jurusan" value="<?php echo $data['id_jurusan']?>" class="form-control col-md-9">
						</div>

						<div>
						<label for="nama_jurusan "> nama_jurusan </label>
							<input type="text" name="nama_jurusan" value="<?php echo $data['nama_jurusan']?>" class="form-control col-md-9">

     					</div>

				     	<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
     					<button type="reset" class="btn btn-danger" name="reset">Clear</button> 
					</form>

				</div>
		</div>

	</div>
</body>
</html>

