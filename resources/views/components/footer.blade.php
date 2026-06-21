<section class="cta-section py-4" style="background: url('{{ asset('img/background-home.png') }}') center/cover no-repeat; position: relative; font-family: 'Montserrat', sans-serif;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.6);"></div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
                <h3 class="fw-semibold text-white mb-0" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.2); letter-spacing: -0.5px;">
                    Temukan <span class="fw-bold" style="color: #333;">Gorden</span> Impian Anda
                </h3>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <a href="{{ route('contact') }}" class="btn px-4 py-2 text-white rounded-pill" style="background-color: #3a4a3e; font-weight: 600; font-size: 0.9rem; letter-spacing: 0.5px;">Konsultasi</a>
            </div>
        </div>
    </div>
</section>

<footer class="pt-5 pb-3" style="background-color: #3a4a3e; color: #ffffff; font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="row gy-4 mb-4">

          <div class="col-lg-4 col-md-6 pe-lg-5 text-center">
             <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
               <img src="{{ asset('img/logo.png') }}" alt="Logo Gorden Yulie" style="max-width: 100%; max-height: 100%; object-fit: contain;">
          </div>
            <p class="text-white-50" style="font-size: 0.85rem; line-height: 1.7; font-weight: 400;">
             Menyediakan berbagai pilihan gorden berkualitas untuk rumah, kantor, hotel, dan kebutuhan interior lainnya.
            </p>
          </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">Link Cepat</h6>
                <ul class="list-unstyled" style="font-size: 0.9rem; font-weight: 500;">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none hover-white">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-white-50 text-decoration-none hover-white">Tentang Kami</a></li>
                    <li class="mb-2"><a href="{{ route('catalog.index') }}" class="text-white-50 text-decoration-none hover-white">Katalog</a></li>
                    <li class="mb-2"><a href="{{ route('portfolio.index') }}" class="text-white-50 text-decoration-none hover-white">Portofolio</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none hover-white">Hubungi Kami</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">Informasi</h6>
                <ul class="list-unstyled" style="font-size: 0.9rem; font-weight: 500;">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Syarat & Ketentuan</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold mb-3 text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">Info Kontak</h6>
                <ul class="list-unstyled text-white-50" style="font-size: 0.9rem; font-weight: 400; line-height: 1.7;">
                    <li class="mb-2">WA. +6281233965303</li>
                    <li class="mb-2">yuliekorden39@gmail.com</li>
                </ul>
            </div>

        </div>

        <hr class="border-secondary opacity-50">
        <div class="text-center mt-3 pt-2 text-white-50" style="font-size: 0.8rem; font-weight: 400; letter-spacing: 0.5px;">
            <p class="mb-0">Gorden Yulie Batu &copy; 2026 All rights reserved.</p>
        </div>
    </div>
</footer>
