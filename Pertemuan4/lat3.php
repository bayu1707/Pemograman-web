<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $namaDepan = "Bayu";
        $namaBelakang = "Wijaya";

        $namaLengkap = $namaDepan." ".$namaBelakang;

        echo "Nama saya adalah ".$namaLengkap;
        echo "<br>Nama saya adalah $namaLengkap";

        $tglMasuk = 2022;
        $tglmasuk = 2020;
        echo "<br>Tanggal masuk kuliah $tglMasuk";
        echo "<br>Tanggal masuk kuliah ".$tglmasuk;
    ?>
</body>
</html>