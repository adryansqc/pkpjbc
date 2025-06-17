<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('frontend.home') }}">
            <img src="{{ asset('pkpjbc') }}/images/logojbc.png" class="icon" alt="icon" style="width: 120px; height: 50px;">
            {{--  {{ $config['app_name'] ?? 'pkpjbc' }}  --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarNav">
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
                <li class="nav-item">
                    <a href="https://wa.me/6281171018841" target="_blank" class="custom-btn-buy nav-link" style="background:#BC6C25;color:white;padding: 13px 15px;border-radius: 25px;text-decoration:none;font-weight:600;font-size: medium;">Buy Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>