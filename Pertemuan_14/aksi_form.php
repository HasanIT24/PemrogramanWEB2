<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Menampung data yang dikirim oleh form
    $kode = $_POST['kode'];
    $jumlah = $_POST['jumlah'];

    // Memanggil stored procedure
    $sql = "CALL update_datatable('$kode', '$jumlah')";
    $query = mysqli_query($koneksi, $sql);

    // Mengalihkan halaman kembali ke index.php
    if ($query) {
        header("Location: form.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
