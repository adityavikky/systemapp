<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BKIM | Home</title>
    <link rel="icon" href="dist/img/AdminLTELogo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-image: {{ URL::to('/') }}/images/background.jpg" class="d-flex flex-column min-vh-100">

    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ URL::to('/') }}/images/ProvJateng.png" alt="Logo" width="34" height="38"
                    class="d-inline-block">
                BKIM Provinsi Jawa Tengah
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="/support">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL::to('/') }}/images/Laporan-Kerusakan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Laporan Kerusakan</h5>
                            <p style="text-decoration: none" class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <footer class="bg-dark text-center text-white mt-auto">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/bkimprovjtg/"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/bkimprovjtg/"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Website -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://bkim.jatengprov.go.id/!"
                    role="button"><i class="bi bi-globe"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#">Development by IT Team BKIM</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://kit.fontawesome.com/d33b5ae795.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
