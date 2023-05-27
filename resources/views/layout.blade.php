<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
    /* Code CSS  */

    body {
        font-family: 'Nunito Sans', sans-serif;
    }

    label {
        color: #929292;
    }

    a[href] {
        color: white;
    }

    input[type="text"]:focus::placeholder {
        opacity: 0;
        /* Menyembunyikan placeholder saat inputan dalam fokus */
    }

    .text-end {
        text-align: right;
    }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40"
                class="d-inline-block align-top">
            PT INDOBERKA INVESTAMA
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://bajaringan.indoberka.com/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://bajaringan.indoberka.com/about_us">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://bajaringan.indoberka.com/contact_us">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    @yield('content')

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>