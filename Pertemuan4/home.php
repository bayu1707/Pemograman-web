<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid text-center mt-4">
        <!-- JUDUL -->
        <div class="row mb-3">
            <h1 class="fw-bold"><u>Selamat Datang di Web Saya</u></h1>
        </div>
        <!-- END JUDUL -->

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
            <?php
            echo '
            <h1><b>Home</b></h1>
            ';
            ?>
            
        </div>
        <!-- END ISI -->
    </div>
    <!-- END CONTAINER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>