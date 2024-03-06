<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
        }
        html{
            font-family: 'Courier New', Courier, monospace;
        }
        .biodata {
            font-size: 50px;
        }
        .warna-1 {
            color: blue; 
        }
        .warna-2 {
            color: purple; 
        }
        .warna-3 {
            color: orange;
        }
    </style>
</head>
<body>
    <?php
    
    $nama = "Hasan Basri";
    $umur = 23;
    $alamat = "JL.Kh dewantoro ,gang nurul huda 3,Kec. Ciputat, Kota Tangerang Selatan";
    $pekerjaan = "Freelancer";
    ?>
    <h1>Biodata Saya</h1>
    <p class="biodata warna-1">Nama: <?php echo $nama; ?></p>
    <p class="biodata warna-2">Umur: <?php echo $umur; ?> tahun</p>
    <p class="biodata warna-3">Alamat: <?php echo $alamat; ?></p>
    <p class="biodata warna-1">Pekerjaan: <?php echo $pekerjaan; ?></p>
</body>
</html>
