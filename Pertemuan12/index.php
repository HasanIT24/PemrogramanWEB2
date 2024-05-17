<?php include("config.php")?>

<?php include("config.php");?>

<?php if(isset($_GET['status'])): ?>
<p>
    <?php
        if($_GET['status'] == 'sukses'){
            header('Location: list.php?status=sukses');
        } else {
            echo "Pendaftaran gagal!";
        }
    ?>
</p>
    <?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Awal Container -->
    <div class="container">
        <!-- Awal Row -->
        <div class="row "style="height:100vh">
            <!-- Awal Col -->
            <div class="col-md-8 mx-auto d-flex justify-content-center align-items-center">
                <!-- Awal Card -->
                <div class="card">
                    <div class="card-header bg-info text-light">
                        Form Input Berita
                    </div>
                    <div class="card-body">
                        <!-- Awal Form -->
                        <form action="proses.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="tkategori"  placeholder="Masukkan Kategori">
                            </div>
                        
                            <div class="mb-3">
                                <label class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" name="tjudul" placeholder="Masukkan Judul Berita">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Isi Berita</label>
                                <textarea class="form-control" name="tisiberita" id="tisiberita"></textarea>
                                <!-- <input type="text" class="form-control" name="tisiberita" placeholder="Masukkan Isi Berita"> -->
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Penulis</label>
                                        <input type="text" class="form-control" name="tpenulis" placeholder="Masukkan Nama Penulis">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Publish</label>
                                        <input type="date" class="form-control" name="tglpublish">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <input class="btn btn-primary" type="submit" value="Submit" name="input">
                                </div>
                        </form>
                        <!-- Akhir Form -->

                
                    </div>
                    <div class="card-footer bg-info mt-3">
                        
                    </div>
                </div>
                <!-- Akhir Card -->
            </div>
            <!-- Akhir Col -->
        </div>
        <!-- Akhir Row -->
    </div>
    <!-- Akhir Container -->


</body>
</html>