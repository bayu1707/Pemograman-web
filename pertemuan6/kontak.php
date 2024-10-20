<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid mt-4">
        <!-- NAVIGATION -->
        <div class="row mb-3">
            <div class="text-center">
                <a href="home.html">Home</a>
                <span>|</span>
                <a href="tentang.html">About</a>
                <span>|</span>
                <a href="kontak.html">Contact</a>
            </div>
        </div>
        <!-- END NAVIGATION -->

        <!-- ISI -->
        <div class="row">
            <div class="col-3 mx-auto p-0">
                <!-- FORM -->
                <form action="konfirmasi_kontak.php" method="post" >

                    <!-- FORM NAMA -->
                    <div class="row mb-3">
                        <div class="col-1 px-0">
                            <label for="inputNama" class="form-label">Nama:</label>
                        </div>
                        <div class="col-11">
                            <input type="text" name="nama" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <!-- END FORM NAMA -->

                    <!-- FORM EMAIL -->
                    <div class="row mb-3">
                        <div class="col-1 px-0">
                            <label for="inputEmail" class="form-label">Email:</label>
                        </div>
                        <div class="col-11">
                            <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <!-- END FORM EMAIL -->

                    <!-- FORM HOBI -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2">Hobi:</label><br>
                            <input type="checkbox" id="sepak_bola" name="hobi[]" value="Sepak bola">
                            <label for="sepak_bola">Sepak Bola</label><br>
                            <input type="checkbox" id="badminton" name="hobi[]" value="Badminton">
                            <label for="badminton">Badminton</label><br>
                            <input type="checkbox" id="main_game" name="hobi[]" value="Main game">
                            <label for="main_game">Menggaming</label><br>
                        </div>
                    </div>
                    <!-- END FORM HOBI -->

                    <!-- FORM JENIS KELAMIN -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2">Jenis Kelamin:</label><br>
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="L">
                            <label for="laki_laki">L</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="P">
                            <label for="perempuan">P</label>
                        </div>
                    </div>
                    <!-- END FORM JENIS KELAMIN -->

                    <!-- FORM TANGGAL LAHIR -->
                    <div class="row mb-3">
                        <div class="col-auto p-0">
                            <label class="mb-2">Tanggal Lahir:</label><br>
                        </div>
                        <div class="col">
                            <input type="date" id="tanggal" name="tglLahir">
                        </div>
                    </div>
                    <!-- END FORM TANGGAL LAHIR -->

                    <!-- BUTTON -->
                    <div class="row">
                        <!-- BUTTON SUBMIT -->
                        <div class="col-auto p-0 me-2">
                            <button type="submit" class="btn btn-primary ml-0">Konfirmasi</button>

                        </div>
                        <!-- END BUTTON SUBMIT -->

                        <!-- BUTTON RESET -->
                        <div class="col-auto p-0">
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                        <!-- END BUTTON RESET -->
                    </div>
                    <!-- END BUTTON -->
                </form>
                <!-- END FORM -->
            </div>
        </div>
        <!-- END ISI -->
    </div>
    <!-- END CONTAINER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>