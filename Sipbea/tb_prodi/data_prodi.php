<?php
include "../AdminLTE/header.php";
include "../AdminLTE/sidebar.php";
include "../AdminLTE/rel.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jurusan</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Prodi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data prodi</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                 <div class="row">
                  <div class="col-12">
                 <div class="card">
                  <div class="card-header">
                   Tabel Data Prodi
                   </div>
                   <div class="card-body">
                     <a href="tambah_prodi.php" class="btn btn-primary text-white">Tambah Data</a>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                          <tr>
                            <th>ID Prodi</th>
                           <th>Nama Prodi</th>
                           <th>Nama Jurusan</th>
                                                   
                           </tr>
                            </thead>
                             <tbody>
                             <?php
                              include "koneksi.php";
                               $no = 1;
                              $tampil = mysqli_query($koneksi, "SELECT * FROM tb_prodi, tb_jurusan WHERE tb_prodi.id_jurusan=tb_jurusan.id_jurusan");
                               while ($data = mysqli_fetch_array($tampil)) {
                                ?>
                                 <tr>
                                
                                 <td> <?php echo $data['id_prodi']; ?> </td>
                                 <td> <?php echo $data['nama_prodi']; ?> </td>
                                 <td> <?php echo $data['nama_jurusan']; ?> </td>
                                <td>
                                   <a class="btn btn-info btn-sm" href="edit_prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>">
                                   <i class="fas fa-pencil-alt">
                                   </i></a>

                                   <a class="btn btn-danger btn-sm" href="hapus_prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>">
                                  <i class="fas fa-trash"></i>
                                    </a>
                                      </td>
                                    </tr>
                                     <?php  } ?>
                                     </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<?php
include "../AdminLTE/footer.php";
include "../AdminLTE/script.html";
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</html>