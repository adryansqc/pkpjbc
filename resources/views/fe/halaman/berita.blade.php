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
    @keyframes shimmer {
    0% { transform: scaleX(0); opacity: 0.3; }
    50% { transform: scaleX(1); opacity: 1; }
    100% { transform: scaleX(0); opacity: 0.3; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes pulse {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 0.8; }
}

@keyframes slideInUp {
    from {
        transform: translateY(50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.news-bg {
    background: linear-gradient(135deg, #c98c4c 0%, #d4a574 30%, #b8834a 70%, #a67c3a 100%);
    position: relative;
    overflow: hidden;
}

.news-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:
        radial-gradient(circle at 20% 50%, rgba(255,215,0,0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255,223,186,0.08) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(218,165,32,0.06) 0%, transparent 50%);
    z-index: 1;
}

.news-bg::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    animation: float 20s ease-in-out infinite;
    z-index: 1;
}

.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 215, 0, 0.1);
    animation: pulse 4s ease-in-out infinite;
}

.shape:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 10%;
    left: 15%;
    animation-delay: 0s;
}

.shape:nth-child(2) {
    width: 60px;
    height: 60px;
    top: 60%;
    right: 20%;
    animation-delay: 1s;
}

.shape:nth-child(3) {
    width: 40px;
    height: 40px;
    bottom: 20%;
    left: 10%;
    animation-delay: 2s;
}

.shape:nth-child(4) {
    width: 100px;
    height: 100px;
    top: 30%;
    right: 10%;
    animation-delay: 3s;
}

.news-card {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(25px);
    border: 1px solid rgba(255, 215, 0, 0.2);
    border-radius: 24px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    box-shadow: 0 8px 32px rgba(201, 140, 76, 0.15);
}

.news-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,215,0,0.2), transparent);
    transition: left 0.6s;
    z-index: 3;
}

.news-card:hover::before {
    left: 100%;
}

.news-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 32px 64px rgba(201, 140, 76, 0.25), 0 0 0 1px rgba(255, 215, 0, 0.3);
}

.news-image {
    position: relative;
    overflow: hidden;
}

.news-image img {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.news-card:hover .news-image img {
    transform: scale(1.1);
}

.news-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(201, 140, 76, 0.9));
    color: white;
    padding: 25px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
}

.news-card:hover .news-overlay {
    transform: translateY(0);
}

.news-content {
    padding: 25px;
    position: relative;
    z-index: 2;
}

.news-title {
    font-size: 1.35rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 15px;
    line-height: 1.4;
    transition: color 0.3s ease;
    font-family: 'Georgia', serif;
}

.news-card:hover .news-title {
    color: #c98c4c;
}

.news-excerpt {
    color: #718096;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 15px;
}

.news-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.85rem;
    color: #a0aec0;
}

.news-date {
    display: flex;
    align-items: center;
    gap: 5px;
}

.read-more-btn {
    background: linear-gradient(45deg, #c98c4c, #d4a574);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(201, 140, 76, 0.3);
}

.read-more-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(201, 140, 76, 0.5);
    color: white;
}

.main-cta-btn {
    background: linear-gradient(45deg, #ffffff, #fefefe);
    color: #2d3748;
    border: 2px solid rgba(255, 215, 0, 0.4);
    padding: 18px 40px;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
    text-decoration: none;
    backdrop-filter: blur(15px);
    box-shadow: 0 8px 32px rgba(255, 215, 0, 0.2);
}

.main-cta-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,215,0,0.3), transparent);
    transition: left 0.6s;
}

.main-cta-btn:hover::before {
    left: 100%;
}

.main-cta-btn:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 20px 40px rgba(201, 140, 76, 0.3);
    color: #2d3748;
    border-color: rgba(255, 215, 0, 0.6);
}

.section-title {
    font-size: 3.5rem;
    font-weight: 900;
    background: linear-gradient(45deg, #ffffff, #f7fafc, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    padding-bottom: 20px;
}

.section-title::after {
    content: '';
    display: block;
    width: 120px;
    height: 6px;
    margin: 15px auto 0;
    background: linear-gradient(90deg, #ffffff 0%, rgba(255,255,255,0.8) 50%, #ffffff 100%);
    border-radius: 3px;
    animation: shimmer 3s infinite;
}

.section-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 15px auto 0;
    font-style: italic;
    line-height: 1.6;
}

.empty-state {
    text-align: center;
    padding: 60px 20px;
    color: rgba(255, 255, 255, 0.7);
}

.empty-state i {
    font-size: 4rem;
    margin-bottom: 20px;
    opacity: 0.5;
}

@media (max-width: 768px) {
    .section-title {
        font-size: 2.5rem;
    }

    .news-card {
        margin-bottom: 25px;
    }

    .main-cta-btn {
        padding: 12px 25px;
        font-size: 0.9rem;
    }
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
            @forelse($berita as $index => $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex align-items-stretch"
                     data-aos="zoom-in"
                     data-aos-delay="{{ 150 + ($index * 100) }}"
                     data-aos-duration="800">
                    <div class="news-card tilt-card shadow-lg w-100">
                        <div class="news-image" style="aspect-ratio: 4/3; min-height: 280px;">
                            <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                                 alt="{{ $item->judul }}"
                                 class="w-100 h-100"
                                 style="object-fit: cover; object-position: center;">

                            <!-- Luxury Overlay -->
                            <div class="news-overlay">
                                <div style="border-left: 4px solid #FFD700; padding-left: 15px;">
                                    <h5 class="mb-2" style="font-weight: 600; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                        {{ Str::limit($item->judul, 50) }}
                                    </h5>
                                    <p class="mb-0 small" style="opacity: 0.9;">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        {{ $item->created_at ? $item->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-content" style="padding: 30px;">
                            <h5 class="news-title">{{ Str::limit($item->judul, 65) }}</h5>

                            @if(isset($item->excerpt) || isset($item->content))
                                <p class="news-excerpt" style="color: #5a5a5a; font-size: 1rem; line-height: 1.7; margin-bottom: 20px;">
                                    {{ Str::limit($item->excerpt ?? strip_tags($item->content ?? ''), 120) }}
                                </p>
                            @endif

                            <div class="news-meta" style="align-items: center; padding-top: 15px; border-top: 1px solid #f0f0f0;">
                                <span class="news-date" style="color: #888; font-weight: 500;">
                                    <i class="bi bi-clock me-1" style="color: #c98c4c;"></i>
                                    {{ $item->created_at ? $item->created_at->format('d M Y') : 'Baru saja' }}
                                </span>

                                @if(isset($item->slug))
                                    <a href="{{ route('frontend.berita.show', $item->slug) }}"
                                       class="read-more-btn">
                                        <i class="bi bi-arrow-right me-1"></i>
                                        Baca Selengkapnya
                                    </a>
                                @else
                                    <span class="read-more-btn" style="opacity: 0.7; cursor: default;">
                                        <i class="bi bi-arrow-right me-1"></i>
                                        Baca Selengkapnya
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12" data-aos="fade-up">
                    <div class="empty-state">
                        <i class="bi bi-newspaper"></i>
                        <h4 style="color: rgba(255, 255, 255, 0.8); margin-bottom: 10px;">
                            Belum Ada Berita
                        </h4>
                        <p style="color: rgba(255, 255, 255, 0.6);">
                            Berita dan informasi terbaru akan segera hadir.
                            Pantau terus halaman ini untuk mendapatkan update terkini.
                        </p>
                    </div>
                </div>
            @endforelse

            <!-- Tombol -->

        </div>
    </div>
</section>
@endsection
