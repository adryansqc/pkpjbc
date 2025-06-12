@extends('fe.layouts.template')

@section('title')
    Tentang Kami
@endsection

@push('style')
<style>
    :root {
        --primary-color: #bc6c25;
        --secondary-color: #dda15e;
        --dark-bg: rgba(20, 20, 20, 0.9);
        --gradient-bg: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        --shadow-light: 0 8px 32px rgba(0, 0, 0, 0.1);
        --shadow-dark: 0 12px 48px rgba(0, 0, 0, 0.3);
        --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Hero Section */
    .hero-section {
        background: var(--gradient-bg);
        min-height: 25vh;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(188, 108, 37, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(221, 161, 94, 0.3) 0%, transparent 50%),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(188,108,37,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        opacity: 0.6;
        animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.6; }
        50% { opacity: 0.8; }
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(45deg, #ffffff, var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
    }

    /* Breadcrumb */
    .breadcrumb {
        background: transparent;
        padding: 0;
    }

    .breadcrumb-item a {
        color: var(--secondary-color);
        text-decoration: none;
        transition: var(--transition);
    }

    .breadcrumb-item a:hover {
        color: #ffffff;
    }

    /* Content Section */
    .content-section {
        padding: 6rem 0;
        background: var(--gradient-bg);
        position: relative;
    }

    .video-container {
        position: relative;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: var(--shadow-dark);
        background: #000;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .video-container::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color), var(--primary-color));
        border-radius: 1.5rem;
        z-index: -1;
        animation: rotate 4s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .custom-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .video-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
        padding: 2rem;
        color: white;
        transform: translateY(100%);
        transition: var(--transition);
    }

    .video-container:hover .video-overlay {
        transform: translateY(0);
    }

    .video-container:hover .custom-video {
        transform: scale(1.05);
    }

    .company-info {
        padding: 2rem;
        position: relative;
    }

    .company-info::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
        animation: slideDown 2s ease-out;
    }

    @keyframes slideDown {
        from { height: 0%; }
        to { height: 100%; }
    }

    .company-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 1.5rem;
    }

    .company-subtitle {
        color: var(--secondary-color);
        font-size: 1.1rem;
        margin-bottom: 2rem;
        font-weight: 500;
    }

    .company-description {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }

    /* Vision Mission Section */
    .vision-mission-section {
        padding: 6rem 0;
        background: #0a0a0a;
        position: relative;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 4rem;
        background: linear-gradient(45deg, #ffffff, var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .vision-card {
        background: var(--dark-bg);
        border-radius: 1.5rem;
        padding: 3rem;
        margin-bottom: 2rem;
        box-shadow: var(--shadow-dark);
        border: 1px solid rgba(188, 108, 37, 0.2);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .vision-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .vision-card::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(45deg, transparent, rgba(188, 108, 37, 0.05), transparent);
        opacity: 0;
        transition: var(--transition);
    }

    .vision-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 60px rgba(188, 108, 37, 0.3);
        border-color: var(--primary-color);
    }

    .vision-card:hover::after {
        opacity: 1;
    }

    .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .card-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        position: relative;
        overflow: hidden;
        animation: iconGlow 3s ease-in-out infinite;
    }

    .card-icon::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: rotate(45deg);
        animation: shine 3s ease-in-out infinite;
    }

    @keyframes iconGlow {
        0%, 100% { box-shadow: 0 0 20px rgba(188, 108, 37, 0.5); }
        50% { box-shadow: 0 0 30px rgba(221, 161, 94, 0.7); }
    }

    @keyframes shine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
    }

    .card-content {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        font-size: 1.1rem;
    }

    .mission-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mission-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1rem;
        padding: 0.5rem 0;
    }

    .mission-icon {
        width: 12px;
        height: 12px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        margin-right: 1rem;
        margin-top: 0.5rem;
        flex-shrink: 0;
        position: relative;
        animation: pulse-dot 2s ease-in-out infinite;
    }

    .mission-icon::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        opacity: 0;
        animation: ripple 2s ease-in-out infinite;
    }

    @keyframes pulse-dot {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }

    @keyframes ripple {
        0% { transform: scale(0.8); opacity: 1; }
        100% { transform: scale(2); opacity: 0; }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .company-title {
            font-size: 2rem;
        }
        
        .vision-card {
            padding: 2rem;
        }
        
        .content-section {
            padding: 4rem 0;
        }
        
        .vision-mission-section {
            padding: 4rem 0;
        }
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

    .fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .fade-in-up-delay-1 { animation-delay: 0.2s; }
    .fade-in-up-delay-2 { animation-delay: 0.4s; }
    .fade-in-up-delay-3 { animation-delay: 0.6s; }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="hero-content text-center">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('frontend.home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Tentang Kami
                    </li>
                </ol>
            </nav>
            <h1 class="hero-title fade-in-up">Tentang Kami</h1>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Video Section -->
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="video-container fade-in-up">
                    <div class="ratio ratio-1x1">
                        <video autoplay loop muted class="custom-video">
                            <source src="{{ $video && $video->video ? asset('storage/' . $video->video) : asset('pkpjbc/videos/DJI_0892.MP4') }}" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>
                    </div>
                    <div class="video-overlay">
                        <h4 class="mb-0">Putra Kurnia Properti</h4>
                    </div>
                </div>
            </div>

            <!-- Company Info -->
            <div class="col-lg-6 col-12">
                <div class="company-info fade-in-up fade-in-up-delay-1">
                    <p class="company-subtitle">Pkpjbc.com</p>
                    <h2 class="company-title">Putra Kurnia Properti</h2>
                    
                    <p class="company-description">
                        Jambi Business Center (JBC) merupakan kawasan pusat bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko. Luas kawasan ini adalah 73.938 m² yang berlokasi di antara 3 jalan utama yaitu Jl. Kapt. A. Bakaruddin, Jl. Patimura dan Jl. Amir Hamzah.
                    </p>
                    
                    <p class="company-description">
                        Di sekitar kawasan juga sudah terbentuk menjadi kawasan bisnis. Ada mall, hotel, rumah sakit, sekolah dan ruko yang begitu dekat bahkan menempel dengan kawasan JBC. Lalu lintas depan kawasan yang selalu ramai menjadikannya sebagai kawasan bisnis yang hidup sampai tengah malam.
                    </p>
                    
                    <p class="company-description">
                        Dengan adanya jalan tol Trans Sumatera yang direncanakan Pemerintah tersambung hingga Jambi pada 2026 akan membuat kunjungan ke Kota Jambi meningkat dan berpengaruh terhadap perekonomian. Kawasan JBC mempersiapkan infrastruktur yang mampu menampung wisatawan dengan jalan yang lebar dan kapasitas parkir yang banyak.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="vision-mission-section">
    <div class="container">
        <h2 class="section-title fade-in-up">Visi, Misi, dan Nilai-nilai</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <!-- Vision -->
                <div class="vision-card fade-in-up fade-in-up-delay-1">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="card-title">VISI KAMI</h3>
                    </div>
                    <div class="card-content">
                        <p>Jambi Business Center menjadi Pusat Bisnis dan Destinasi Utama Berbelanja di Kota Jambi</p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="vision-card fade-in-up fade-in-up-delay-2">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <h3 class="card-title">MISI KAMI</h3>
                    </div>
                    <div class="card-content">
                        <ul class="mission-list">
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Menjadikan Kawasan JBC menjadi Kawasan paling ramai di Kota Jambi</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Mendatangkan tenant-tenant terbaik dari Jambi maupun dari luar Jambi</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Membentuk management mall dan hotel yang professional</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Mengoptimalkan harga sewa di Kawasan JBC</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Mewujudkan infrastruktur yang bagus dan terawat</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Membina hubungan yang baik dengan pemerintah, pemerintah setempat dan masyarakat sekitar</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Values -->
                <div class="vision-card fade-in-up fade-in-up-delay-3">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="m15 14 5-5-5-5"></path>
                                <path d="m9 14-5-5 5-5"></path>
                                <path d="m8 3-4 4 4 4"></path>
                                <path d="m16 3 4 4-4 4"></path>
                            </svg>
                        </div>
                        <h3 class="card-title">NILAI-NILAI</h3>
                    </div>
                    <div class="card-content">
                        <ul class="mission-list">
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Integritas tinggi (walk the talk)</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Dahulukan yang utama (priority scale)</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Orientasi pada kualitas dan waktu (result and time oriented)</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Berpikir menang-menang (think win-win)</span>
                            </li>
                            <li class="mission-item">
                                <div class="mission-icon"></div>
                                <span>Harmonis (harmony)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple animation observer
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });
    });
</script>
@endsection