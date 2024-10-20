<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simpan Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $namaDepan = $namaBelakang = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])) {
        include "koneksi.php";

        if (isset($_POST["namadepan"])) {
            $namaDepan = $_POST["namadepan"];
        }
        if (isset($_POST["namabelakang"])) {
            $namaBelakang = $_POST["namabelakang"];
        }
        $sql = "INSERT INTO biodata (namadepan, namabelakang)
                VALUES ('$namaDepan', '$namaBelakang')";

        if (mysqli_query($koneksi, $sql)) {
            echo '
                        <div class="container mt-3">
                            <div class="alert alert-success">
                                <strong>Success!</strong> Data berhasil masuk ke Database.
                            </div>
                        </div>
                    ';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    }
    ?>

    <div class="container mt-3">
        <h2>Simpan Data Pegawai</h2>
        <div class="mb-3 mt-3">
            <label for="namadepan">Nama Depan: <?= $namaDepan ?></label>
        </div>

        <div class="mb-3 mt-3">
            <label for="namabelakang">Nama Belakang: <?= $namaBelakang ?></label>
        </div>
    </div>

</body>

</html>