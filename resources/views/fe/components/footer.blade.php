<!-- Footer Start -->
@php
    $footerGaleri = App\Models\Galeri::where('published', 1)->latest()->take(6)->get();
@endphp
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Hubungi Kami</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Kapt. A. Bakaruddin, Kelurahan Selamat, Kecamatan Danau Sipin, Kota Jambi, 36124</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 811 710 188</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>sales@pkpjbc.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50" href="{{ route('frontend.home') }}">Home</a>
                <a class="btn btn-link text-white-50" href="{{ route('frontend.tentang') }}">Tentang</a>
                <a class="btn btn-link text-white-50" href="{{ route('frontend.unggulan') }}">Produk Unggulan</a>
                <a class="btn btn-link text-white-50" href="{{ route('frontend.galeri') }}">Galeri</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Photo Gallery</h5>
                <div class="row g-2 pt-2">
                    @forelse($footerGaleri as $item)
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul_foto }}">
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>Tidak ada foto</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">pkpjbc</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('frontend.home') }}">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->