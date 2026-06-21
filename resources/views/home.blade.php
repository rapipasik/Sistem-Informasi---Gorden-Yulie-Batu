@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<section class="home-section position-relative d-flex align-items-center justify-content-center"
    style="padding-top: 80px;height: 100vh; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/background-home.png') }}') center/cover no-repeat; font-family: 'Montserrat', sans-serif;">

    <div class="container text-center text-white">
        <div class="row justify-content-center">
            <div class="col-lg-10 mt-5"> <h1 class="fw-bold mb-3" style="font-size: 3.2rem; letter-spacing: -0.5px; line-height: 1.3;">
                    Percantik Ruangan Anda <br> Dengan Gorden Berkualitas
                </h1>

                <p class="mb-4 mx-auto text-light opacity-75" style="max-width: 700px; font-weight: 400; font-size: 1rem;">
                    Hadir sejak 1998 dengan berbagai pilihan gorden, vitrase, roller blind, wallpaper, dan kebutuhan interior lainnya.
                </p>

                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-4">
                    <a href="{{ route('catalog.index') }}" class="btn btn-light rounded-pill px-4 py-2 fw-bold text-dark shadow-sm" style="font-size: 0.95rem;">
                        Lihat Katalog
                    </a>

                    <a href="{{ route('contact') }}" class="btn text-white rounded-pill px-4 py-2 fw-bold" style="font-size: 0.95rem; background: rgba(0, 0, 0, 0.25); backdrop-filter: blur(8px);">
                        Konsultasi
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-section py-5 my-5">
        <div class="container">
            <div class="row align-items-center gx-lg-5">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('img/about-home.jpg') }}" alt="Tentang Gorden Yulie Batu" class="img-fluid rounded-4 shadow-sm" style="width: 100%; object-fit: cover;">
                </div>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4" style="color: #000000;">Gorden Yulie Batu</h2>
                    <p class="text-secondary" style="line-height: 2; font-size: 1rem; text-align: justify;">
                        Gorden Yulie Batu adalah usaha penjualan dan pemasangan gorden yang telah berdiri sejak tahun 1998. Kami menyediakan berbagai kebutuhan interior seperti gorden, vitrase, roller blind, wallpaper, kitchen set, dan furniture dengan kualitas terbaik, harga terjangkau, serta pelayanan yang terpercaya untuk wilayah Malang Raya
                        <a href="{{ route('about') }}" class="text-dark fw-bold text-decoration-none">selengkapnya..</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
