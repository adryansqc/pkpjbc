@extends('fe.layouts.template')

@section('title')
    Berita
@endsection

@push('style')
<style>
    .news-card {
        transition: transform 0.3s ease-in-out;
        height: 100%;
    }
    .news-card:hover {
        transform: translateY(-5px);
    }
    .news-image {
        height: 250px;
        object-fit: cover;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        color: white;
    }
    .breadcrumb-item a {
        color: #bc6c25;
        text-decoration: none;
    }
</style>
@endpush

@section('content')
<section class="hero-section2 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Berita</li>
                    </ol>
                </nav>
                <h1 class="text-white text-center mb-0">Berita Terbaru</h1>
            </div>
        </div>
    </div>
</section>

<!-- AOS + VanillaTilt CDN -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
    document.addEventListener('DOMContentLoaded', () => {
        VanillaTilt.init(document.querySelectorAll(".tilt-card"), {
            max: 8,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    });
</script>

<style>
@keyframes shimmer {
    0% { transform: scaleX(0); opacity: 0.2; }
    50% { transform: scaleX(1); opacity: 1; }
    100% { transform: scaleX(0); opacity: 0.2; }
}
</style>

<section class="section-padding" id="barista-team" style="background-color: #c98c4c;">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Judul Gagah dan Profesional -->
            <div class="col-12 text-center mb-5" data-aos="fade-down">
                <h2 style="
                    font-size: 3.2rem;
                    font-weight: 900;
                    color: #ffffff;
                    text-transform: uppercase;
                    letter-spacing: 1.5px;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    position: relative;
                    display: inline-block;
                    padding-bottom: 15px;">
                    Info & Berita Terkini
                    <span style="
                        content: '';
                        display: block;
                        width: 100px;
                        height: 5px;
                        margin: 12px auto 0 auto;
                        background: linear-gradient(90deg, #fff 0%, #ffcc70 100%);
                        border-radius: 3px;
                        animation: shimmer 3s infinite;">
                    </span>
                </h2>
                <p style="
                    color: rgba(255, 255, 255, 0.85);
                    font-size: 1.05rem;
                    max-width: 700px;
                    margin: 10px auto 0;
                    font-style: italic;">
                    Tetap terinformasi dengan kabar dan kegiatan terbaru dari kami.
                </p>
            </div>

            <!-- Looping Berita -->
            @forelse($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="150">
                    <div class="card tilt-card shadow border-0 w-100"
                         style="border-radius: 18px; overflow: hidden; background-color: #fff;">
                        <div style="aspect-ratio: 4/5; overflow: hidden;">
                            <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                                 alt="{{ $item->judul }}"
                                 class="w-100 h-100"
                                 style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center" data-aos="fade-up">
                    <p class="text-white-50">Belum ada berita yang ditampilkan.</p>
                </div>
            @endforelse

            <!-- Tombol -->
            <div class="col-12 text-center mt-4" data-aos="fade-up">
                <a href="{{ route('frontend.berita.show', $item->slug) }}"
                    class="btn custom-btn custom-border-btn btn-sm mt-2">
                    Baca Selengkapnya
                    <i class="bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
