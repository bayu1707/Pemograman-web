<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tetang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .row-isi p {
            text-align: justify;
        }
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid text-center mt-4">
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

        <!-- JUDUL -->
        <div class="row mb-3">
            <h1 class="fw-bold">About</h1>
        </div>
        <!-- END JUDUL -->

        <!-- ISI -->
        <div class="row row-isi">
            <div class="col-4 mx-auto text-justify">
                <?php
                echo '
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt egestas feugiat. Sed quis
                    tempus nisi. Duis pellentesque mi urna, quis pellentesque elit finibus congue. Donec gravida
                    tincidunt
                    sem, ac elementum sem vehicula id. Integer tincidunt interdum ipsum sed sagittis. Maecenas in lorem
                    at
                    ex interdum gravida. Maecenas porttitor urna ut felis vestibulum accumsan. Donec lorem ipsum,
                    sagittis
                    vel mollis at, facilisis consectetur justo. Etiam in arcu pellentesque augue euismod molestie nec
                    vitae
                    urna. Praesent aliquet egestas orci nec placerat.</p>
                ';
                ?>
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