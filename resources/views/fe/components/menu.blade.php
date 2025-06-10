<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="{{ asset('pkpjbc') }}/images/logojbc.png" class="navbar-brand-image img-fluid" alt="Putra Kurnia Properti">
            {{ $config['app_name'] ?? 'pkpjbc' }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('frontend.home') ? 'active' : '' }}" href="{{ route('frontend.home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('frontend.tentang') ? 'active' : '' }}" href="{{ route('frontend.tentang') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('frontend.berita*') ? 'active' : '' }}" href="{{ route('frontend.berita') }}">Berita</a>
                </li>
            </ul>

            {{-- <div class="ms-lg-3">
                <a class="btn custom-btn custom-border-btn" href="reservation.html">
                    Reservation
                    <i class="bi-arrow-up-right ms-2"></i>
                </a>
            </div> --}}
        </div>
    </div>
</nav>