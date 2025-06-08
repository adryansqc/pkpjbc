<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg navbar-light py-0 px-4" style="background-color: #FFEBCD">
        <a href="{{ route('frontend.home') }}" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{ asset('real') }}/img/jbc.jpg" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">pkpjbc</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('frontend.home') }}" class="nav-item nav-link {{ request()->routeIs('frontend.home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('frontend.tentang') }}" class="nav-item nav-link {{ request()->routeIs('frontend.tentang') ? 'active' : '' }}">Tentang</a>
                <a href="{{ route('frontend.berita') }}" class="nav-item nav-link {{ request()->routeIs('frontend.berita') ? 'active' : '' }}">Berita</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('frontend.unggulan') ? 'active' : '' }}" data-bs-toggle="dropdown">Properti</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('frontend.unggulan') }}" class="dropdown-item {{ request()->routeIs('frontend.unggulan') ? 'active' : '' }}">Properti Unggulan</a>
                        {{-- <a href="property-type.html" class="dropdown-item">Property Type</a>
                        <a href="property-agent.html" class="dropdown-item">Property Agent</a> --}}
                    </div>
                </div>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Error</a>
                    </div>
                </div> --}}
                <a href="{{ route('frontend.galeri') }}" class="nav-item nav-link {{ request()->routeIs('frontend.galeri') ? 'active' : '' }}">Galeri</a>
            </div>
            {{-- <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar End -->