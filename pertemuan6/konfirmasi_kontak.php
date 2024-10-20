<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="row p-0 m-0">
        <div class="col-auto mx-auto p-0">
            <h1>KONFIRMASI KONTAK</h1>

            <?php
                $nama = $_POST["nama"];
                $email = $_POST["email"];
                $hobi = $_POST["hobi"];
                $jenisKelamin = $_POST["jenis_kelamin"];
                $tglLahir = $_POST["tglLahir"];

                // PERIKSA JENIS KELAMIN
                if ($jenisKelamin == "L")
                {
                    $jenisKelamin = "Laki-laki";
                }
                else {
                    $jenisKelamin = "Perempuan";
                }
                // END PERIKSA JENIS KELAMIN

                // HITUNG UMUR
                function hitung_umur($tglLahir) {
                    $lahir = new DateTime($tglLahir);
                    $tanggal_sekarang = new DateTime();
                    $umur = $tanggal_sekarang->diff($lahir);
                    return $umur->y;
                }
                $umur = hitung_umur($tglLahir);
                // END HITUNG UMUR

                // PRINT NAMA, EMAIL
                echo '
                Nama: '.$nama.'
                <br>Email: '.$email;
                // END PRINT NAMA, EMAIL

                // PRINT HOBI
                $jumlah_hobi = count($hobi);
                if ($jumlah_hobi == 1) {
                    echo $hobi[0];
                } else {
                    $hobi_terakhir = array_pop($hobi);
                    $strHobi = implode(", ", $hobi)." dan ".$hobi_terakhir;
                }
                echo '<br>Hobi: '.$strHobi;
                // END PRINT HOBI

                // PRINT JEKEL, UMUR
                echo '
                <br>Jenis Kelamin: '.$jenisKelamin.'
                <br>Umur: '.$umur.'
                ';
                // END PRINT JEKEL, UMUR
            ?>
        </div>
    </div>

    <form action="insert.php" method="post">
        <!-- DATA YANG SUDAH DIINPUT -->
        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="hobi[]" value="<?php echo implode(",", $_POST["hobi"]); ?>">
        <input type="hidden" name="jenis_kelamin" value="<?php echo $_POST["jenis_kelamin"]; ?>">
        <input type="hidden" name="tglLahir" value="<?php echo $_POST["tglLahir"]; ?>">
        <!-- END DATA YANG SUDAH DIINPUT -->

        <!-- BUTTON SUBMIT -->
        <div class="row p-0 m-0">
            <div class="col-auto p-0 mx-auto mt-3">
                <button type="submit" class="btn btn-primary ml-0">Submit</button>
            </div>
        </div>
        <!-- END BUTTON SUBMIT -->
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>