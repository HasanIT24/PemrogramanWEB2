<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
    
    $kategori = $_POST['tkategori'];
    $judul = $_POST['tjudul'];
    $isiberita = $_POST['tisiberita'];
    $penulis = $_POST['tpenulis'];
    $tgl = $_POST['tglpublish'];


    // buat query
    $sql = "INSERT INTO tbl_berita(kategori, judul, isiberita, penulis, tgl_publish) VALUES ('$kategori', '$judul', '$isiberita', '$penulis', '$tgl')";
    $query = mysqli_query ($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>