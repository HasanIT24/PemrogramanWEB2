<?php 

    $nama = "-";
    $jurusan = "-";
    $nilai_tugas = 0;
    $nilai_uts = 0;
    $nilai_uas = 0;
    $total = 0;
    $rata_rata = 0;

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $total = $nilai_tugas + $nilai_uts + $nilai_uas;
        $rata_rata = $total / 3;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGGUNAAN IF </title>
</head>
<style>
    .Data{
        text-align: center;
    }
</style>
<body>
    <fieldset>
        <legend>Data yang diinput</legend>
        <form class="Data" action="" method="POST">
            <label for="Nama">Nama :</label>
            <input type="text" name="nama" placeholder="Masukkan Nama"><br/>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" placeholder="Masukkan Jurusan"><br/>
            <label for="nilai_tugas">Nilai Tugas : </label>
            <input type="text" name="nilai_tugas" placeholder="Masukkan Nilai Tugas"><br/>
            <label for="nilai_uts">Nilai UTS : </label>
            <input type="text" name="nilai_uts" placeholder="Masukkan Nilai UTS"><br/>
            <label for="nilai_uas">Nilai UAS : </label>
            <input type="text" name="nilai_uas" placeholder="Masukkan Nilai UAS"><br/>
            <input type="submit" name="submit" value="Hitung">
        </form>
    </fieldset>

    <section>
        <fieldset>
            <legend>Informasi Data</legend>
            <table width="100%">
                <tr>
                    <td>Nama</td>
                    <td>: <?= $nama ?></td>
                    <td>Jurusan</td>
                    <td>: <?= $jurusan ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>: <?= $nilai_tugas ?></td>
                    <td>Nilai UTS</td>
                    <td>: <?= $nilai_uts ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>: <?= $nilai_uas ?></td>
                    <td>Rata-rata</td>
                    <td>: <?= $rata_rata ?></td>
                </tr>
            </table>
        </fieldset>
    </section>
</body>
</html>