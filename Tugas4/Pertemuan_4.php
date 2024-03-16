<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<style>
    body{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
        height: 100%;
        width: 100%;
    }

    .wrapper{
        display: flex;
        justify-content: center;
    }

    .container{
        background-color: blue;
        height: 250px;
        width: 250px;
        border-radius: 20px;
    
    }
</style>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <div class="wrapper">
    <div class="container">
    <form method="post">
        <label for="awal">Masukkan nilai awal:</label>
        <input type="number" id="awal" name="awal" required><br><br>

        <label for="akhir">Masukkan nilai akhir:</label>
        <input type="number" id="akhir" name="akhir" required><br><br>

        <button type="submit" name="submit">Tampilkan Deret</button>
    </form>
</div>
</div>

    <?php
    if (isset($_POST['submit'])) {
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        
        function deret_bilangan_ganjil_dibagi_3($awal, $akhir) {
            $jumlah = 0;
            $banyaknya = 0;

            echo "Deret bilangan ganjil yang habis dibagi 3: <br>";
            for ($i = $awal; $i <= $akhir; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) {
                    echo $i . " ";
                    $jumlah += $i;
                    $banyaknya++;
                }
            }

            echo "<br>Banyaknya deret bilangan: $banyaknya <br>";
            echo "Jumlah deret bilangan: $jumlah";
        }

        // Memanggil fungsi untuk menampilkan deret bilangan
        deret_bilangan_ganjil_dibagi_3($awal, $akhir);
    }
    ?>
</body>
</html>
