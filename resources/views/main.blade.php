<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title --}}
    <title>{{ $title }}</title>

    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- My CSS --}}
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="top-header py-4">
        <div class="container d-flex justify-content-center">
            <img src="assets/img/logo.png" alt="logo" style="width: 50px; height: 50px" class=" me-3">
            <h1>SIM Bencana Banjir</h1>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page"
                            href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Info Banjir' ? 'active' : '' }}" href="/info">Info
                            Banjir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Mitigasi' ? 'active' : '' }}" href="/mitigasi">Mitigasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Peta Banjir' ? 'active' : '' }}" href="/peta-banjir">Peta
                            Banjir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Data Statistik' ? 'active' : '' }}"
                            href="/data-statistik">Data Statistik</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('container')

    <footer>
        <div class="container">
            <div class="footer-top d-flex justify-content-start pt-3">
                <img src="assets/img/logo.png" alt="logo" style="width: 40px; height: 40px" class=" me-3">
                <h3 class=" text-white">SIM Bencana Banjir</h3>
            </div>
            <hr>
            <div class="footer-bottom d-flex justify-content-start text-white">
                <div class="row">
                    <div class="col-3">
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0723450013725!2d110.41243661469493!3d-7.78215439439161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599155555555%3A0x536eb168b1dca148!2sUniversitas%20Pembangunan%20Nasional%20%22Veteran%22%20Yogyakarta%20-%20Kampus%202%20Babarsari!5e0!3m2!1sid!2sid!4v1669130856706!5m2!1sid!2sid"
                                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="border"></iframe>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="alamat mx-5">
                            <h5>Alamat</h5>
                            <p>Jl. Babarsari Jl. Tambak Bayan No.2, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman,
                                Daerah
                                Istimewa Yogyakarta 55281</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="situs-terkait">
                            <h5>Situs Terkait</h5>
                            <a href="https://bnpb.go.id/" class=" text-decoration-none text-white">BNPB</a><br>
                            <a href="https://bmkg.go.id/" class=" text-decoration-none text-white">BMKG</a><br>
                            <a href="https://gis.bnpb.go.id/" class=" text-decoration-none text-white">Geoportal Bencana
                                Indonesia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright text-center text-white pb-2">
            <p>&#169; 2022, Sistem Informasi Manajemen Bencana</p>
        </div>
    </footer>

    {{-- Js Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
