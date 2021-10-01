<?php 
	include "koneksi.php";

	if(isset($_POST['simpan']))
	{
		$simpan = mysqli_query($koneksi, "INSERT INTO tb_prodi (id_prodi, nama_prodi, id_jurusan)
                                          VALUES( '',
                                                  '$_POST[nama_prodi]',
												  '$_POST[id_jurusan]')
                                          ");
          if($simpan) //jika simpan sukses
          {
            echo "<script> 
                  alert('Data berhasil di simpan!');
                  document.location='data_prodi.php';
                </script>";
          }else
          {
            echo "<script> 
                  alert('Simpan Data Gagal!');
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
<?php
          $sql = mysqli_query($koneksi, "SELECT * FROM tb_prodi");
          while
          ($hasil = mysqli_fetch_array($sql))
          
        ?>
	<div class="container col-md-6">
		<div class="card">
			<div class="card-header">
				Input Data Jurusan
			</div>
				<div class="card-body">
					<form action="" method="POST" class="form-item">
						<div class="form-group">
				     		

						<div>
     						<label>Nama Prodi</label>
                             <input type="text" name="nama_prodi" class="form-control">
     					</div>

						 <div>
						 <label >ID Jurusan / Nama Jurusan</label>
			<select name="id_jurusan" id="id_jurusan"  class="form-control" required >
        <option value="-">Pilih Jurusan</option>
        <?php
          $sql = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");
          while
          ($hasil = mysqli_fetch_array($sql))
          {
            echo "<option value = \"". $hasil[id_jurusan]. "\">" .$hasil[nama_jurusan]. "</option>";
          }
        ?>
      </select>
		</div>


				     	<button type="submit" class="btn" name="simpan">Simpan</button>
     					<button type="reset" class="btn " name="reset">Clear</button> 
					</form>

				</div>
		</div>

	</div>

	
</body>
</html>

