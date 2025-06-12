@extends('fe.layouts.template')

@section('title')
    {{ $berita->judul }}
@endsection

@push('style')
<style>
    :root {
        --primary-gold: #DAA520;
        --dark-gold: #B8860B;
        --light-gold: #FFD700;
        --deep-brown: #8B4513;
        --cream: #FDF5E6;
        --dark-bg: #2C1810;
        --card-bg: #3A2419;
    }

    /* Background dengan pattern yang elegan */
    .section-bg {
        background: linear-gradient(135deg, 
            rgba(218, 165, 32, 0.1) 0%, 
            rgba(139, 69, 19, 0.15) 25%, 
            rgba(218, 165, 32, 0.05) 50%, 
            rgba(139, 69, 19, 0.1) 75%, 
            rgba(218, 165, 32, 0.08) 100%);
        position: relative;
        overflow: hidden;
    }

    .section-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(218, 165, 32, 0.1) 0%, transparent 70%),
            radial-gradient(circle at 75% 75%, rgba(139, 69, 19, 0.08) 0%, transparent 70%),
            radial-gradient(circle at 50% 100%, rgba(218, 165, 32, 0.05) 0%, transparent 70%);
        animation: backgroundShift 20s ease-in-out infinite;
        z-index: 1;
    }

    @keyframes backgroundShift {
        0%, 100% { transform: translateX(0) translateY(0); }
        25% { transform: translateX(-10px) translateY(-5px); }
        50% { transform: translateX(10px) translateY(5px); }
        75% { transform: translateX(-5px) translateY(10px); }
    }

    /* Hero section dengan padding yang lebih tipis dan proporsional */
.hero-section2 {
    background: linear-gradient(135deg, 
        var(--deep-brown) 0%, 
        var(--dark-gold) 30%, 
        var(--primary-gold) 70%, 
        var(--light-gold) 100%);
    position: relative;
    padding: 60px 0 40px; /* Dikurangi dari 120px 0 80px */
    overflow: hidden;
    min-height: auto; /* Menghilangkan tinggi minimum yang berlebihan */
}

.hero-section2::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    animation: patternMove 30s linear infinite;
}

/* Breadcrumb dengan spacing yang lebih compact */
.breadcrumb {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 10px 25px; /* Dikurangi dari 12px 30px */
    border: 1px solid rgba(255, 255, 255, 0.2);
    animation: fadeInUp 0.8s ease-out;
    margin-bottom: 0; /* Menghilangkan margin bawah yang tidak perlu */
}

.breadcrumb-item {
    font-size: 14px; /* Menambahkan ukuran font yang lebih kecil */
}

.breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-item a:hover {
    color: white;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}

.breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.9);
}

/* Enhanced responsive design untuk hero section */
@media screen and (max-width: 768px) {
    .hero-section2 {
        padding: 40px 0 30px; /* Lebih tipis untuk mobile */
    }
    
    .breadcrumb {
        padding: 8px 20px;
        font-size: 13px;
    }
}

@media screen and (max-width: 576px) {
    .hero-section2 {
        padding: 30px 0 25px; /* Sangat tipis untuk mobile kecil */
    }
    
    .breadcrumb {
        padding: 6px 15px;
        font-size: 12px;
    }
    
    .breadcrumb-item {
        font-size: 12px;
    }
}

    /* Main content container */
    .news-section {
        position: relative;
        z-index: 2;
        padding: 80px 0;
    }

    /* Enhanced news image */
    .news-image {
        max-width: 100%;
        max-height: 600px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.3),
            0 0 0 1px rgba(218, 165, 32, 0.2),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        overflow: hidden;
    }

    .news-image::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(255, 255, 255, 0.2), 
            transparent);
        transition: left 0.5s ease;
    }

    .news-image:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 
            0 30px 60px rgba(0, 0, 0, 0.4),
            0 0 0 1px rgba(218, 165, 32, 0.4),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .news-image:hover::before {
        left: 100%;
    }

    /* Enhanced card design */
    .card-news {
        background: linear-gradient(145deg, 
            var(--card-bg) 0%, 
            rgba(58, 36, 25, 0.95) 100%);
        border-radius: 24px;
        padding: 40px;
        color: white;
        margin-bottom: 40px;
        border: 1px solid rgba(218, 165, 32, 0.2);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
        animation: slideInUp 0.8s ease-out;
    }

    .card-news::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, 
            transparent, 
            var(--primary-gold), 
            var(--light-gold), 
            var(--primary-gold), 
            transparent);
        animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }

    /* Typography enhancements */
    .news-info {
        font-size: 14px;
        color: var(--primary-gold);
        padding: 12px 20px;
        background: rgba(218, 165, 32, 0.1);
        border-radius: 25px;
        border: 1px solid rgba(218, 165, 32, 0.3);
        display: inline-block;
        margin-bottom: 20px;
        animation: fadeIn 1s ease-out 0.3s both;
    }

    .news-title {
        font-size: 32px;
        font-weight: 700;
        color: white;
        margin: 24px 0;
        line-height: 1.3;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1s ease-out 0.5s both;
    }

    .news-content {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.8;
        font-size: 16px;
        animation: fadeIn 1s ease-out 0.7s both;
    }

    .news-content p {
        margin-bottom: 20px;
    }

    /* Recent news enhancements */
    .recent-news-title {
        color: var(--primary-gold);
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 30px;
        text-align: center;
        position: relative;
        animation: fadeIn 1s ease-out 0.4s both;
    }

    .recent-news-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, 
            transparent, 
            var(--primary-gold), 
            transparent);
    }

    .recent-item {
        display: flex;
        gap: 16px;
        margin-bottom: 20px;
        padding: 16px;
        border-radius: 12px;
        background: rgba(218, 165, 32, 0.05);
        border: 1px solid rgba(218, 165, 32, 0.1);
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        animation: slideInRight 0.6s ease-out;
        animation-delay: calc(var(--item-index, 0) * 0.1s);
    }

    .recent-item:hover {
        background: rgba(218, 165, 32, 0.1);
        border-color: rgba(218, 165, 32, 0.3);
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(218, 165, 32, 0.2);
    }

    .recent-item img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 12px;
        border: 2px solid rgba(218, 165, 32, 0.3);
        transition: all 0.3s ease;
    }

    .recent-item:hover img {
        border-color: var(--primary-gold);
        transform: scale(1.05);
    }

    .recent-item h6 {
        margin: 0 0 8px 0;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.4;
    }

    .recent-item h6 a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .recent-item:hover h6 a {
        color: var(--primary-gold);
    }

    .recent-item small {
        color: rgba(218, 165, 32, 0.8);
        font-size: 13px;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Loading animation for images */
    .image-loading {
        position: relative;
        overflow: hidden;
    }

    .image-loading::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(218, 165, 32, 0.3), 
            transparent);
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% { left: -100%; }
        100% { left: 100%; }
    }

    /* Enhanced responsive design */
    @media screen and (max-width: 768px) {
        .flex-news {
            flex-direction: column;
        }
        
        .news-title {
            font-size: 24px;
        }
        
        .card-news {
            padding: 24px;
            border-radius: 16px;
        }
        
        .hero-section2 {
            padding: 80px 0 60px;
        }
        
        .breadcrumb {
            padding: 8px 20px;
        }
        
        .news-section {
            padding: 60px 0;
        }
    }

    @media screen and (max-width: 576px) {
        .news-title {
            font-size: 20px;
        }
        
        .card-news {
            padding: 20px;
        }
        
        .recent-item img {
            width: 60px;
            height: 60px;
        }
        
        .recent-item h6 {
            font-size: 14px;
        }
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Selection styling */
    ::selection {
        background: var(--primary-gold);
        color: white;
    }

    ::-moz-selection {
        background: var(--primary-gold);
        color: white;
    }

    /* Scrollbar styling */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dark-bg);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(var(--primary-gold), var(--dark-gold));
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(var(--light-gold), var(--primary-gold));
    }
</style>
@endpush

@section('content')
<section class="hero-section2 d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('frontend.berita') }}">Berita</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ Str::limit($berita->judul, 50) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="news-section section-padding section-bg">
    <div class="container">
        <div class="row flex-news d-flex">
            <!-- Kolom Gambar + Detail -->
            <div class="col-lg-8 mb-4">
                <div class="card-news">
                    <div class="image-loading">
                        <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                            alt="{{ $berita->judul }}"
                            class="news-image mb-4"
                            loading="lazy">
                    </div>

                    <div class="news-info mb-3">
                        <i class="bi-calendar me-2"></i>
                        {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                        &nbsp; | &nbsp;
                        <i class="bi-eye me-2"></i>
                        {{ number_format($berita->view) }} views
                    </div>

                    <h1 class="news-title">{{ $berita->judul }}</h1>

                    <div class="news-content">
                        {!! $berita->isi !!}
                    </div>
                </div>
            </div>

            <!-- Kolom Berita Terbaru -->
            <div class="col-lg-4">
                <div class="card-news">
                    <h5 class="recent-news-title">Berita Terbaru</h5>
                    <div class="recent-news">
                        @foreach($recentNews as $index => $recent)
                            <div class="recent-item" style="--item-index: {{ $index }}">
                                <div class="image-loading">
                                    <img src="{{ $recent->gambar ? asset('storage/' . $recent->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                                         alt="{{ $recent->judul }}"
                                         loading="lazy">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="{{ route('frontend.berita.show', $recent->slug) }}" 
                                           class="text-decoration-none">
                                           {{ Str::limit($recent->judul, 60) }}
                                        </a>
                                    </h6>
                                    <small>
                                        <i class="bi-calendar me-1"></i>
                                        {{ \Carbon\Carbon::parse($recent->tanggal)->format('d M Y') }}
                                        &nbsp; | &nbsp;
                                        <i class="bi-eye me-1"></i>
                                        {{ number_format($recent->view) }}
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection