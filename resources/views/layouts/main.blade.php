<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Explore Thailand by Detiktravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
    rel="stylesheet">

  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link type="image/x-icon" rel="shortcut icon"
    href="https://cdn.detik.net.id/detikcom/images/favicon.ico?v=2024080913447">


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
  <header class=" fixed-top  mt-4 ">
    <nav class="navbar navbar-expand-lg navbar-light h-6 relative  mx-auto glassmorphism  p-3 shadow-sm">
      <div class="container-fluid">
        <img src="{{ asset('images/logo-detiktravel.png') }}" alt="Logo Detik Travel" width="150">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
          <i class="bi bi-x"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-semibold text-center gap-3 mt-3 mt-md-0 gap-lg-5 ">
            <li class="nav-item rounded-pill px-3">
              <a class="nav-link active" aria-current="page" href="/#">Home</a>
            </li>
            <li class="nav-item rounded-pill px-3">
              <a class="nav-link" href="/#about">Tentang Program</a>
            </li>
            <li class="nav-item rounded-pill px-3">
              <a class="nav-link" href="/#aggregator">Berita</a>
            </li>
            <a href="/registration">
              <button class="rounded-pill bg-yellow border-0 px-3 py-2 fw-semibold text-white">Registrasi</button>
            </a>
          </ul>
        </div>
      </div>
    </nav>

  </header>
  <main class="">
    @yield('main')
  </main>

  <footer id="footer" class="bg-blue p-4 p-lg-5 ">
    <figure>
      <img src="{{ asset('images/home/thailand-explore-vector-mobile.png') }}" alt="Thailand Explore">
    </figure>
    <div class="d-flex flex-column flex-md-row text-white">
      <p class="description ">
        Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang
        ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan
        destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak
        terlupakan!
      </p>
      <div class="d-flex flex-column connect-with-us">
        <p class="text-center">Connect with us</p>
        <figure class="icons">
          <img src="{{ asset('images/home/icon-footer.svg') }}" alt="Icons">
        </figure>
      </div>

    </div>
    <div class="hr"></div>

    <p class="mt-4 text-white">Copyright @ 2023 detikcom. All right reserved</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
