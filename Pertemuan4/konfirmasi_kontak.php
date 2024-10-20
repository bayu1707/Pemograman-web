<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
</head>
<body>
    <h1>KONFIRMASI KONTAK</h1>

    <?php
        $nama = $_GET["nama"];
        $url = $_GET["url"];
        $hobi = $_GET["hobi"];
        $jenisKelamin = $_GET["jenis_kelamin"];

        echo '
        Nama Anda adalah '.$nama.'
        <br>URL yang Anda masukkan '.$url.'
        <br>Hobi Anda adalah '.$hobi.'
        <br>Jenis kelamin Anda adalah '.$jenisKelamin.'
        ';
    ?>
</body>
</html>