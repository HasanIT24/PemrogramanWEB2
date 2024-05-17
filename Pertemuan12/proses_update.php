<?php
include("config.php");

// Check if the form is submitted
if (isset($_POST['id_berita'])) {
    $id = $_POST['id_berita'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $isiberita = $_POST['isiberita'];
    $penulis = $_POST['penulis'];
    $tgl_publish = $_POST['tgl_publish'];

    // Update the data in the database
    $sql = "UPDATE tbl_berita SET kategori = ?, judul = ?, isiberita = ?, penulis = ?, tgl_publish = ? WHERE id_berita = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "sssssi", $kategori, $judul, $isiberita, $penulis, $tgl_publish, $id);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the list page with a success message
        header("Location: list.php?message=Data updated successfully");
    } else {
        // Redirect to the list page with an error message
        header("Location: list.php?message=Failed to update data");
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // Redirect to the list page with an invalid request message
    header("Location: list.php?message=Invalid request");
}

// Close the database connection
mysqli_close($koneksi);
?>
