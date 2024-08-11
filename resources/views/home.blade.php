@extends('layouts.main')

@section('main')
  <section id="cover" class=" " style="background-image: url('{{ asset('images/home/cover.png') }}')">
    <div class="min-vh-100 h-full d-flex flex-column flex-lg-row ">
      <div class="d-flex flex-column z-2 mt-md-auto mb-md-5 thailand-explore-wrapper px-4 px-lg-5">
        <figure class="relative">
          <img src="{{ asset('images/home/thailand-explore-vector.png') }}"
            srcset="{{ asset('images/home/thailand-explore-vector-mobile.png') }} 768w, {{ asset('images/home/thailand-explore-vector.png') }} 1200w"
            sizes="(max-width: 768px) 100vw " alt="Thailand Explore Vector" class="thailand-explore" />
        </figure>
        <a href="#about" class="mt-3 ">
          <button class="rounded-pill mt-3 bg-yellow border-0 px-4 py-2 fw-semibold text-white text-uppercase">
            Tentang
            Program
          </button>
        </a>
      </div>
      <div class="swiper z-2 mt-auto mb-3 mb-lg-5 ">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{ asset('images/home/cover.png') }}" class="object-fit-cover" />
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('images/home/swiper-2.png') }}" class="object-fit-cover" />
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('images/home/swiper-3.png') }}"class="object-fit-cover" />
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('images/home/cover.png') }}"class="object-fit-cover" />
          </div>
        </div>

      </div>

  </section>


  <section id="about" style="background-image: url('{{ asset('images/home/about.png') }}')">
    <div class="overlay"></div>
    <div
      class="min-vh-100 h-full d-flex flex-column flex-lg-row z-2 justify-content-center align-items-center position-relative gap-4 px-4 px-lg-5 content">
      <!-- Konten Anda di sini -->
      <figure class="w-full text-center">
        <img src="{{ asset('images/home/about-image 1.png') }}" alt="About Image" class="about-image ">
      </figure>
      <div class="d-flex flex-column gap-5 text-white">
        <div class="d-flex flex-column about-program">
          <h2 class="fw-bold">Tentang Program</h2>
          <p class="about-program-description">
            Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini
            terbuka bagi pembaca
            Detiktravel
            yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan
            destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak
            terlupakan!
          </p>
          <a href="/registration" class="mt-1">
            <button class="rounded-pill bg-yellow border-0 px-4 py-2 fw-semibold text-white text-uppercase">
              DAFTAR SEKARANG
            </button>
          </a>


        </div>
        <div class="d-flex flex-column">
          <h2 class="fw-bold">Mekanisme</h2>
          <div class="d-flex flex-column gap-2">
            <div class="d-flex flex-row gap-3">
              <div class="d-flex flex-column align-items-center ">
                <div class="outer-circle ">
                  <div class="inner-circle"></div>
                </div>
                <div class="dashed-vertical-line mt-2"></div>
              </div>
              <div class="d-flex flex-column ">
                <h4 class=" fw-bold">Isi Formulir</h4>
                <p class="text-yellow fw-bold">1 - 31 Mei 2023 </p>
                <p class="-mb-1">Lengkapi formulir pendaftaran dengan data sebenarnya</p>
              </div>
            </div>
            <div class="d-flex flex-row gap-3">
              <div class="d-flex flex-column align-items-center ">
                <div class="outer-circle ">
                  <div class="inner-circle"></div>
                </div>
                <div class="dashed-vertical-line mt-2"></div>
              </div>
              <div class="d-flex flex-column ">
                <h4 class=" fw-bold">Penjurian</h4>
                <p class="text-yellow fw-bold">1 - 7 Juni 2023 </p>
                <p class="-mb-1">Ikuti rangkaian penjurian online/offline</p>
              </div>
            </div>
            <div class="d-flex flex-row gap-3">
              <div class="d-flex flex-column align-items-center ">
                <div class="outer-circle ">
                  <div class="inner-circle"></div>
                </div>

              </div>
              <div class="d-flex flex-column ">
                <h4 class=" fw-bold">Pengumuman Pemenang</h4>
                <p class="text-yellow fw-bold">11 Juni 2023 </p>
                <p class="-mb-1">Ikuti rangkaian penjurian online/offline</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="aggregator" style="background-image: url('{{ asset('images/home/aggregator-bgimage.png') }}')">
    <div class="overlay"></div>

    <div
      class="min-vh-100 h-full d-flex flex-column flex-lg-row justify-content-center align-items-center z-2 position-relative gap-4 px-4 px-lg-5 ">
      <div class="gap-4 d-flex flex-column">
        <div class="d-flex align-items-center gap-3 ">
          <figure>
            <img src="{{ asset('images/logo-detiktravel.png') }}" alt="Logo detik">
          </figure>
          <h1 class="text-orange fw-bold section-title">
            Update
          </h1>
        </div>
        <div class="d-flex flex-column flex-lg-row gap-3 ">
          <div class="d-flex flex-column artikel-1 relative">

            <figure class="position-relative">
              <img src="{{ asset('images/home/artikel-1.png') }}" alt="Artikel 1">
              <div class="overlay"></div>
            </figure>
            <div class="bg-blue px-4 py-2 title ">
              <h2 class="fw-bold">Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggilan Hujan</h2>
              <p>3 jam yang lalu</p>
            </div>
          </div>
          <div class="d-flex flex-column gap-3 w-100 w-lg-50">
            <div class="d-flex gap-3 another-artikel">
              <figure class="position-relative">
                <img src="{{ asset('images/home/artikel-2.png') }}" alt="Artikel 1 image">
              </figure>
              <div class="d-flex flex-column">
                <h5 class="fw-bold">Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</h5>
                <p>1 jam yang lalu</p>
              </div>
            </div>
            <div class="d-flex gap-3 another-artikel">
              <figure class="position-relative">
                <img src="{{ asset('images/home/artikel-3.png') }}" alt="Artikel 1 image">
              </figure>
              <div class="d-flex flex-column">
                <h5 class="fw-bold">Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand</h5>
                <p>1 jam yang lalu</p>
              </div>
            </div>
            <div class="d-flex gap-3 another-artikel">
              <figure class="position-relative ">
                <img src="{{ asset('images/home/artikel-4.png') }}" alt="Artikel 1 image">
              </figure>
              <div class="d-flex flex-column">
                <h5 class="fw-bold">Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</h5>
                <p>1 jam yang lalu</p>
              </div>
            </div>

            <button
              class="button-another-news py-4 text-white mt-auto d-flex justify-content-center align-items-center gap-2">
              <h4 class="fw-bold mt-3">Lihat Berita Lainnya</h4>
              <i class="bi bi-arrow-right mt-2 "></i>
            </button>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
