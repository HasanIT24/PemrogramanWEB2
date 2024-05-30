<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kirim Barang</title>
</head>
<body>
    <h2>Tabel 1</h2>
    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
        </tr>
        <?php
        $tabel1 = mysqli_query($koneksi, "SELECT * FROM tabel_1");
        while ($data1 = mysqli_fetch_array($tabel1)):
        ?>
        <tr>
            <td><?= $data1['kode'] ?></td>
            <td><?= $data1['nama_barang'] ?></td>
            <td><?= $data1['jumlah'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>

    <h2>Tabel 2</h2>
    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
        </tr>
        <?php
        $tabel2 = mysqli_query($koneksi, "SELECT * FROM tabel_2");
        while ($data2 = mysqli_fetch_array($tabel2)):
        ?>
        <tr>
            <td><?= $data2['kode'] ?></td>
            <td><?= $data2['nama_barang'] ?></td>
            <td><?= $data2['jumlah'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>

    <h2>Kirim Barang</h2>
    <form action="aksi_form.php" method="post">
        <label>Kode Barang</label>
        <select name="kode">
            <?php
            $tabel1 = mysqli_query($koneksi, "SELECT * FROM tabel_2");
            while ($data1 = mysqli_fetch_array($tabel1)):
            ?>
            <option value="<?= $data1['kode'] ?>"><?= $data1['kode'] ?> / <?= $data1['nama_barang'] ?></option>
            <?php endwhile ?>
        </select><br><br>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required><br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>
