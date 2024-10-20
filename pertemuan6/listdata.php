<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-3 mb-5">List Data Kontak</h1>
    <div class="container align-item-center">
        <div class="col-6"></div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include "koneksi.php";
                // Mengambil data dari database
                $sql = "SELECT * FROM biodata";
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data ke dalam tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                            <th scope=\"row\">" . $row["id"] . "</th>
                            <td>" . $row["namadepan"] . "</td>
                            <td>" . $row["namabelakang"] . "</td>
                            <td>
                                <button type=\"button\" class=\"btn btn-info text-white btn-sm\">Edit</button>
                                <button type=\"button\" class=\"btn btn-danger btn-sm\">Hapus</button>
                            </td>
                            </tr>
                        ";
                    }
                }

                // Menutup koneksi
                $koneksi->close();
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>