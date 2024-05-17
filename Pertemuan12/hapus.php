<?php
include("config.php");

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete query
    $sql = "DELETE FROM tbl_berita WHERE id_berita = $id";
    $query = mysqli_query($koneksi, $sql);
    header("Location: list.php?message=sukses delete");
    
    
} else {
    // Redirect back to the list page if 'id' is not set
    header("Location: list.php?message=Invalid request");
}

// Close the database connection
mysqli_close($koneksi);
?>
