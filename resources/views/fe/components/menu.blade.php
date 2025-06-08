<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="{{ asset('pkpjbc') }}/images/logojbc.png" class="navbar-brand-image img-fluid" alt="Putra Kurnia Properti">
            {{ $config['app_name'] ?? 'pkpjbc' }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Daftar Harga</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('frontend.berita') }}">Berita</a>
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