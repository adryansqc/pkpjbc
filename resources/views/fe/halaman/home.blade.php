@extends('fe.layouts.template')

@section('title')
    Beranda
@endsection

@push('style')
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">

<style>
    li {
        color: white;
    }
    .gallery-image {
        transition: transform 0.3s ease-in-out;
    }

    .gallery-image:hover {
        transform: scale(1.1);
    }
</style>
@endpush

@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mx-auto">
                <div class="content-wrapper">
                  <em class="small-text">welcome to PkpJbc.com</em>

                  <h1>PKPJBC</h1>

                  <p class="text-white mb-4 pb-lg-2">
                    PT. PUTRA <em>KURNIA</em> PROPERTI.
                  </p>

                  <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                    About Us
                  </a>

                  <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Price List</strong></a>
                </div>
              </div>

        </div>
    </div>

    <div class="hero-slides"></div>
</section>


<section class="about-section section-padding" id="section_2">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12">
                <div class="ratio ratio-1x1">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="{{ $video && $video->video ? asset('storage/' . $video->video) : asset('pkpjbc/videos/DJI_0892.MP4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="about-video-info d-flex flex-column">
                        <h4 class="mt-auto">.</h4>

                        <h4>Putra Kurnia Properti.</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                <em class="text-white">Pkpjbc.com</em>

                <h2 class="text-white mb-3">Putra Kurnia Properti</h2>

                <p2 class="text-white">Jambi Business Center dikembangkan oleh PT. Putra Kurnia Properti merupakan bagian dari PKP Group, perusahaan real estate dan developer skala nasional yang telah membangun berbagai proyek perumahan, townhouse, kawasan komersial, mall, villa, hotel dan apartemen yang tersebar di berbagai daerah di Indonesia antara lain di Batam, Jabodetabek, Pekanbaru, Jambi, Bintan, Semarang, Pekalongan, Purwokerto, Yogyakarta, Bali dan Lombok.</p>

                <p2 class="text-white">Hampir 30 tahun berkiprah, selama itu pula PKP Group dikenal sebagai pengembang besar dan terpercaya. Memiliki keunggulan dari sisi kualitas produk dan legalitas terjamin, menjadikan karya PKP Group selalu menjadi pilihan utama masyarakat dalam memiliki produk property. PT PKP memberikan kemudahan bagi masyarakat untuk memiliki produk property melalui pembiayaan perbankan, karena telah menjalin kerjasama dengan berbagai bank pemerintah dan bank umum nasional.<a rel="nofollow" href="https://www.pkpjbc.com" target="_blank">pkpjbc</a>.</p>

                <a href="{{ route('frontend.tentang') }}" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Selengkapnya</a>
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
            max: 12,
            speed: 400,
            glare: true,
            "max-glare": 0.3,
            scale: 1.05
        });
    });
</script>

<style>
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

<section class="section-padding news-bg" id="barista-team">
    <!-- Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container" style="position: relative; z-index: 3;">
        <div class="row justify-content-center">
            <!-- Professional Title Section -->
            <div class="col-12 text-center mb-5" data-aos="fade-down" data-aos-duration="1200">
                <h2 class="section-title">
                    Info & Berita Terkini
                </h2>
                <p class="section-subtitle">
                    Tetap terinformasi dengan kabar dan kegiatan terbaru dari kami. 
                    Dapatkan update terkini seputar layanan dan inovasi terdepan.
                </p>
            </div>

            <!-- News Cards Loop -->
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

            <!-- Enhanced CTA Button -->
            <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('frontend.berita') }}" class="main-cta-btn">
                    <i class="bi bi-arrow-right me-2"></i>
                    Lihat Selengkapnya
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section-padding galeri-jbc-bg" id="section_4">
    <div class="container position-relative z-1">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-12 text-center mb-5 position-relative">
            <!-- Aksen garis emas di atas -->
            <div class="gold-line mb-3 mx-auto"></div>

            <!-- Subjudul -->
            <em class="text-muted text-uppercase" style="letter-spacing: 2px;" data-aos="fade-up" data-aos-delay="100">
            <strong class="text-gold">pkpjbc</strong>
            </em>

            <!-- Judul utama -->
            <h2 class="display-4 fw-bold text-gold title-shadow" data-aos="fade-up" data-aos-delay="200">
              Galeri JBC
            </h2>

            <!-- Deskripsi -->
            <!-- <p class="text-white-50 lead mt-3 w-75 mx-auto" data-aos="fade-up" data-aos-delay="400">
              Koleksi visual terbaik yang merekam kegiatan, pencapaian, dan momen berharga dari komunitas JBC.
            </p> -->

            <!-- Aksen garis emas di bawah -->
            <div class="gold-line mt-4 mx-auto"></div>
        </div>

        <!-- Galeri -->
        <div class="row g-4">
            {{-- Loop through $galeri data --}}
            @forelse($galeri as $item)
                <div class="col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="{{ ($loop->index + 1) * 100 }}"> {{-- Added data-aos-delay based on loop index --}}
                    <a href="{{ $item->foto ? asset('storage/' . $item->foto) : asset('pkpjbc/images/E1a.jpg') }}"
                       data-lightbox="galeri"
                       data-title="{{ $item->judul ?? 'Galeri JBC' }}" {{-- Use item title if available --}}
                       class="gallery-image-wrapper">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('pkpjbc/images/E1a.jpg') }}"
                             class="gallery-image img-fluid rounded shadow"
                             style="height: 250px; object-fit: cover;" {{-- Added style for consistent height --}}
                             alt="{{ $item->judul ?? 'Foto Galeri' }}"> {{-- Use item title for alt text --}}
                    </a>
                </div>
            @empty
                {{-- Message if no gallery items --}}
                <div class="col-12 text-center">
                    <p class="text-white">Belum ada galeri yang ditampilkan.</p>
                </div>
            @endforelse
        </div>
      </div>
    </div>

    <!-- Wave Background Overlay -->
    <div class="wave-bg"></div>
</section>

{{-- <section class="barista-section section-padding section-bg2" id="barista-team">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Dokumentasi</em>
                <h2 class="text-white">Galeri foto</h2>
            </div>

            @forelse($galeri as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card bg-dark overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('pkpjbc/images/E1a.jpg') }}"
                             class="card-img gallery-image"
                             style="height: 250px; object-fit: cover;"
                             alt="Foto Galeri">
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-white">Belum ada foto yang ditampilkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section> --}}




<section class="menu-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white" style="font-size: 1.2rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Data</em>
                <h2 class="text-white" style="font-size: 2.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-bottom: 30px;">Price List</h2>
            </div>
            <div style="text-align: right;" class="mb-3">
                <a href="{{ route('frontend.download-price-list') }}" class="btn custom-btn custom-border-btn mt-3" style="background: linear-gradient(135deg, #DAA520, #FFD700); color: #8B4513; font-weight: 600; border: 2px solid #B8860B; text-shadow: none; box-shadow: 0 4px 15px rgba(218, 165, 32, 0.3);">
                    <i class="fa fa-download me-2"></i>Download Price List
                </a>
            </div>
            <div class="table-responsive" style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                <table id="table" class="table table-striped table-hover table-bordered table-sm" border="1" style="margin-bottom: 0;">
                <thead style="background: linear-gradient(135deg, #8B4513, #CD853F); color: white;">
                    <tr>
                        <th rowspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Status</th>
                        <th colspan="2" rowspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Nomor <br>Ruko</th>
                        <th colspan="3" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Ukuran Tanah</th>
                        <th colspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Bangunan</th>
                        <th rowspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Harga Jual <br> Exc. PPN</th>
                        <th rowspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">PPN 11%</th>
                        <th rowspan="2" style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Harga Jual<br> Inc. PPN</th>
                    </tr>
                    <tr>
                        <th style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Lebar <br>(m)</th>
                        <th style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Panjang <br>(m)</th>
                        <th style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Luas <br>(m2)</th>
                        <th style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Type</th>
                        <th style="text-align: center; vertical-align: middle; border: 1px solid #B8860B; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Luas <br>(m2)</th>
                    </tr>
                </thead>
                <tbody style="background-color: rgba(255,255,255,0.95);">
                    @foreach ($listProduk as $item)
                        <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(218, 165, 32, 0.1)'" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.95)'">
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd;">
                                @if ($item->status == '1')
                                    <span style="color: white; background: linear-gradient(135deg, #ff3b55, #ff6b7d); border-radius:10px; padding:.4em .6em; font-weight: 600; box-shadow: 0 2px 8px rgba(255, 59, 85, 0.3);">Terjual</span>
                                @else
                                    <span style="color: white; background: linear-gradient(135deg, #32a852, #4caf50); border-radius:10px; padding:.4em .6em; font-weight: 600; box-shadow: 0 2px 8px rgba(50, 168, 82, 0.3);">Tersedia</span>
                                @endif
                            </td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; font-weight: 600; color: #8B4513;">{{ $item->kode_ruko }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; font-weight: 600; color: #8B4513;">{{ $item->no_ruko }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; color: #333;">{{ $item->l_tanah }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; color: #333;">{{ $item->p_tanah }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; color: #333;">{{ $item->luas_tanah }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; font-weight: 600; color: #8B4513;">{{ $item->type_bangunan }}</td>
                            <td style="text-align: center; vertical-align: middle; border: 1px solid #ddd; color: #333;">{{ $item->l_bangunan }}</td>
                            <td align="right" style="vertical-align: middle; border: 1px solid #ddd; font-weight: 600; color: #B8860B;">
                                {{ number_format($item->h_jual_exc_ppn, 0, ',', '.') }}</td>
                            <td align="right" style="vertical-align: middle; border: 1px solid #ddd; font-weight: 600; color: #B8860B;">{{ number_format($item->ppn, 0, ',', '.') }}</td>
                            <td align="right" style="vertical-align: middle; border: 1px solid #ddd; font-weight: 700; color: #8B4513; background: rgba(218, 165, 32, 0.1);">
                                {{ number_format($item->h_jual_inc_ppn, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{--  <section class="reviews-section2 section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row justify-content-center">
            <strong style="color: white;">KETENTUAN:</strong>
            <ol>
                <li>Harga dan PPN bisa berubah sewaktu-waktu</li>
                <li>Harga Jual sudah termasuk listrik 2200 watt dan PDAM</li>
                <li>Harga Jual belum termasuk Harga Kelebihan Tanah (jika ada), Biaya AJB, Biaya Balik Nama, BPHTB,
                    Biaya
                    KPR
                    dan Biaya-biaya lain yang
                    timbul akibat aturan baru pemerintah</li>
                <li>Harga Kelebihan Tanah adalah Rp.5.000.000,-/m2 untuk selisih luas tanah >3% (belum termasuk PPN)
                </li>
                <li>Booking Fee sebesar Rp.25.000.000,- tidak dapat dikembalikan
                </li>
                <li>Jika dalam 14 hari sejak pembayaran Booking Fee tidak membayarkan Angsuran Uang Muka, maka
                    pembelian
                    dianggap batal dan Booking
                    Fee hangus.</li>
                <li>KPR bukan tanggung jawab developer</li>
            </ol>
        </div>
    </div>
</section>  --}}



<section class="section-padding section-bg2" id="faq-section">
    <div class="container">
        <div class="row justify-content-center">
            <strong style="color: white; font-size: 1.5rem; margin-bottom: 20px; display: block; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">KETENTUAN:</strong>
            <ol style="color: white; font-size: 1.1rem; line-height: 1.8; text-shadow: 1px 1px 2px rgba(0,0,0,0.7); background: rgba(0,0,0,0.3); padding: 30px; border-radius: 10px; backdrop-filter: blur(5px);">
                <li style="margin-bottom: 15px;">Harga dan PPN bisa berubah sewaktu-waktu</li>
                <li style="margin-bottom: 15px;">Harga Jual sudah termasuk listrik 2200 watt dan PDAM</li>
                <li style="margin-bottom: 15px;">Harga Jual belum termasuk Harga Kelebihan Tanah (jika ada), Biaya AJB, Biaya Balik Nama, BPHTB, Biaya KPR dan Biaya-biaya lain yang timbul akibat aturan baru pemerintah</li>
                <li style="margin-bottom: 15px;">Harga Kelebihan Tanah adalah Rp.5.000.000,-/m2 untuk selisih luas tanah >3% (belum termasuk PPN)</li>
                <li style="margin-bottom: 15px;">Booking Fee sebesar Rp.25.000.000,- tidak dapat dikembalikan</li>
                <li style="margin-bottom: 15px;">Jika dalam 14 hari sejak pembayaran Booking Fee tidak membayarkan Angsuran Uang Muka, maka pembelian dianggap batal dan Booking Fee hangus.</li>
                <li>KPR bukan tanggung jawab developer</li>
            </ol>
        </div>
    </div>
</section>

<style>
.section-bg2 {
    background: linear-gradient(135deg, #8B4513, #CD853F, #DAA520, #B8860B);
    background-size: 400% 400%;
    animation: gradientMove 8s ease infinite;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>

<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.113162169635!2d103.58707458857812!3d-1.6186259495915778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2589d2b4f9cdc7%3A0xbb55e0d4b4bb59a7!2sJambi%20Business%20Center!5e0!3m2!1sid!2sid!4v1696439318921!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        
    </div>
    <style>
/* Custom CSS untuk menyesuaikan warna FAQ dengan latar belakang kayu */
.faq-accordion .accordion-item {
    background: rgba(139, 69, 19, 0.8) !important; /* Coklat transparan */
    border: 1px solid rgba(160, 82, 45, 0.6) !important; /* Border coklat muda */
    margin-bottom: 10px;
    border-radius: 8px;
}

.faq-accordion .accordion-button {
    background: rgba(160, 82, 45, 0.9) !important; /* Coklat sedang */
    color: #ffffff !important;
    border: none !important;
    font-weight: 600;
}

.faq-accordion .accordion-button:not(.collapsed) {
    background: rgba(101, 67, 33, 0.95) !important; /* Coklat lebih gelap saat terbuka */
    color: #ffffff !important;
    box-shadow: none !important;
}

.faq-accordion .accordion-button:focus {
    border-color: rgba(160, 82, 45, 0.8) !important;
    box-shadow: 0 0 0 0.25rem rgba(160, 82, 45, 0.25) !important;
}

.faq-accordion .accordion-body {
    background: rgba(139, 69, 19, 0.7) !important; /* Coklat transparan untuk body */
    color: rgba(255, 255, 255, 0.9) !important;
}

.faq-title {
    color: #8B4513 !important; /* Coklat gelap untuk judul */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}
</style>

<div class="row justify-content-center">
    <div class="col-lg-10 col-12">
        <h2 class="text-center mb-4 faq-title">FAQ</h2>

        <div class="accordion faq-accordion" id="faqAccordion">
            {{-- FAQ Item 1 --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseOne" 
                            aria-expanded="true" 
                            aria-controls="collapseOne">
                        Di JBC itu akan dibangun apa saja?
                    </button>
                </h2>
                <div id="collapseOne" 
                     class="accordion-collapse collapse show" 
                     aria-labelledby="headingOne" 
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Kawasan Pusat Bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko.
                    </div>
                </div>
            </div>

            {{-- FAQ Item 2 --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseTwo" 
                            aria-expanded="false" 
                            aria-controls="collapseTwo">
                        Kapan pembangunan mall akan selesai?
                    </button>
                </h2>
                <div id="collapseTwo" 
                     class="accordion-collapse collapse" 
                     aria-labelledby="headingTwo" 
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Proses pembangunan Mall JBC sedang underconstruction yang akan di targetkan selesai pada akhir 2026!
                    </div>
                </div>
            </div>

            {{-- Add more FAQ items here if needed --}}
        </div>
    </div>
</div>
</section>

@push('script')
<script src="{{ asset('plugins') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table').DataTable({
            autoWidth: false,

        });
    });
</script>
@endpush
@endsection