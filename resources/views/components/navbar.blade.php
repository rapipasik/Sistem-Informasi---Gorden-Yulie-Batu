<style>
    /* Styling khusus Navbar agar tidak bertabrakan dan estetik */
    .nav-custom {
        transition: all 0.3s ease;
        font-family: 'Montserrat', sans-serif;
    }

    /* Menu Navigasi */
    .nav-custom .nav-link {
        color: #ffffff !important;
        font-weight: 500;
        font-size: 0.95rem;
        padding: 0.5rem 0;
        margin: 0 1rem;
        position: relative;
        opacity: 0.85;
        transition: opacity 0.3s ease;
    }

    .nav-custom .nav-link:hover {
        opacity: 1;
    }

    /* Indikator Garis Bawah Pendek (Active) */
    .nav-custom .nav-link.active {
        opacity: 1;
        font-weight: 700;
    }

    .nav-custom .nav-link.active::after {
        content: "";
        position: absolute;
        width: 18px; /* Ukuran garis pendek sesuai gambar */
        height: 2px;
        background-color: #ffffff;
        bottom: -2px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    /* Button Hubungi Kami */
    .btn-contact-nav {
        background-color: #ffffff;
        color: #000000 !important;
        font-weight: 700;
        border-radius: 50px;
        padding: 8px 24px !important;
        font-size: 0.9rem;
        border: none;
        transition: transform 0.2s ease;
    }

    .btn-contact-nav:hover {
        transform: scale(1.05);
        background-color: #f8f9fa;
    }

    /* Memastikan Logo Bulat Sempurna */
    .nav-logo-circle {
        width: 60px;
        height: 60px;
        background-color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 nav-custom" style="z-index: 1000; top: 0; background: transparent;">
    <div class="container py-3">

        <a class="navbar-brand me-0" href="{{ route('home') }}">
            <div class="nav-logo-circle">
                <img src="{{ asset('img/logo/logo-yulie.png') }}" alt="Logo Gorden Yulie" style="width: 100%; height: auto; object-fit: contain;">
            </div>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavHome">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavHome">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('katalog*') ? 'active' : '' }}" href="{{ route('catalog.index') }}">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('portofolio*') ? 'active' : '' }}" href="{{ route('portfolio.index') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('testimoni') ? 'active' : '' }}" href="{{ route('testimoni') }}">Testimoni</a>
                </li>
            </ul>

            <div class="d-lg-flex d-none">
                <a href="{{ route('contact') }}" class="btn btn-contact-nav shadow-sm">Hubungi Kami</a>
            </div>

            <div class="d-lg-none mt-3">
                <a href="{{ route('contact') }}" class="btn btn-contact-nav w-100">Hubungi Kami</a>
            </div>
        </div>

    </div>
</nav>
