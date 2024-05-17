<?php
include("config.php");

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data to be edited
    $sql = "SELECT * FROM tbl_berita WHERE id_berita = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($result);

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // Redirect back to the list page if 'id' is not set
    header("Location: list_barang.php?message=Invalid request");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-info text-light">
                <span>Edit Data Berita</span>
            </div>
            <div class="card-body">
                <form action="proses_update.php" method="POST">
                    <input type="hidden" name="id_berita" value="<?= $data['id_berita'] ?>">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $data['kategori'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="isiberita" class="form-label">Isi Berita</label>
                        <textarea class="form-control" id="isiberita" name="isiberita" rows="4" required><?= $data['isiberita'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['penulis'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_publish" class="form-label">Tanggal Publish</label>
                        <input type="date" class="form-control" id="tgl_publish" name="tgl_publish" value="<?= $data['tgl_publish'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="list.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
