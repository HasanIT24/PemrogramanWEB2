<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Awal Container -->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-info text-light">
                <div class="row ">
                    <div class="d-flex justify-content-between">
                        <span>Data Berita</span>
                        <a href="index.php" class="btn btn-primary mx-3">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-8 mx-auto p-2">
                    <form action="proses_input.php" method="POST">
                        <div class="input-group mb-3"></div>
                    </form>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Kategori</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Penulis</th>
                        <th>Tanggal Publish</th>
                        <th>Action</th>
                    </tr>
            
                    <?php
                    // Menampilkan Data
                    $sql = "SELECT * FROM tbl_berita order by id_berita desc";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)):
                    ?>
                        <tr>
            
                        <td><?=$no++?></td> 
                        <td><?=$data['kategori']?></td>
                        <td><?=$data['judul']?></td>
                        <td><?=$data['isiberita']?></td>
                        <td><?=$data['penulis']?></td>
                        <td><?=$data['tgl_publish']?></td>
                        <td>
                            <a href="form_edit.php?id=<?= $data['id_berita']?>" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?id=<?= $data['id_berita']?>" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                    
                    <?php endwhile ?>

                </table>

            </div>
            <div class="card-footer bg-info">
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>

            </div>
        </div>
        <!-- Akhir Card -->
    </div>
    <!-- Akhir Container -->


    
</body>
</html>