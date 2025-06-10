@extends('fe.layouts.template')

@section('title')
    Tentang
@endsection

@push('style')
<style>
    .card.bg-dark {
        transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out; /* Add background-color to transition */
    }

    .card.bg-dark:hover {
        transform: translateY(-5px);
        background-color: #bc6c25 !important; /* Change to a different color, e.g., the accent color */
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
                        <li class="breadcrumb-item active text-white" aria-current="page">/Tentang</li>
                    </ol>
                </nav>
                <h1 class="text-white text-center mb-0">Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>
<section class="news-section section-padding section-bg">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12">
                <div class="ratio ratio-1x1">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="{{ asset('pkpjbc') }}/videos/DJI_0892.MP4" type="video/mp4">

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

                <p2 class="text-white">Jambi Business Center (JBC) merupakan kawasan pusat bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko. Luas kawasan ini adalah 73.938 m2 yang berlokasi di antara 3 jalan utama yaitu Jl. Kapt. A. Bakaruddin, Jl. Patimura dan Jl. Amir Hamzah.</p>

                <p2 class="text-white">Di sekitar kawasan juga sudah terbentuk menjadi kawasan bisnis. Ada mall, hotel, rumah sakit, sekolah dan ruko yang begitu dekat bahkan menempel dengan kawasan JBC. Lalu lintas depan kawasan yang selalu ramai menjadikannya sebagai kawasan bisnis yang hidup sampai tengah malam yang sulit ditemui di kawasan lain.</p>

                <p2 class="text-white">Dan dengan adanya jalan tol Trans Sumatera yang direncanakan Pemerintah tersambung hingga Jambi pada 2026 akan membuat kunjungan ke Kota Jambi meningkat dan akan berpengaruh terhadap perekonomian. Kawasan JBC mempersiapkan infrastruktur yang mampu menampung wisatawan dengan jalan yang lebar dan kapasitas parkir yang banyak.</p>

            </div>

        </div>
    </div>
</section>

{{-- Visi, Misi, Nilai-nilai Section --}}
<section class="section-padding section-bg"> {{-- Gunakan section-bg atau section-bg2/3 untuk background --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 text-white"> {{-- Sesuaikan lebar kolom --}}
                <h2 class="text-center mb-4">Visi, Misi, dan Nilai-nilai</h2>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark h-100 p-3">
                            <div class="card-body">
                                <h4 class="card-title text-white mb-3">VISI KAMI</h4>
                                <p class="card-text text-white">
                                    Jambi Business Center menjadi Pusat Bisnis dan Destinasi Utama Berbelanja di Kota Jambi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                         <div class="card bg-dark h-100 p-3">
                            <div class="card-body">
                                <h4 class="card-title text-white mb-3">MISI KAMI</h4>
                                <ul class="list-unstyled text-white">
                                    <li><i class="bi-check-circle me-2"></i> Menjadikan Kawasan JBC menjadi Kawasan paling ramai di Kota Jambi</li>
                                    <li><i class="bi-check-circle me-2"></i> Mendatangkan tenant-tenant terbaik dari Jambi maupun dari luar Jambi</li>
                                    <li><i class="bi-check-circle me-2"></i> Membentuk management mall dan hotel yang professional</li>
                                    <li><i class="bi-check-circle me-2"></i> Mengoptimalkan harga sewa di Kawasan JBC</li>
                                    <li><i class="bi-check-circle me-2"></i> Mewujudkan infrastruktur yang bagus dan terawat</li>
                                    <li><i class="bi-check-circle me-2"></i> Membina hubungan yang baik dengan mitra pemerintah, pemerintah setempat dan masyarakat sekitar</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                         <div class="card bg-dark h-100 p-3">
                            <div class="card-body">
                                <h4 class="card-title text-white mb-3">NILAI - NILAI</h4>
                                <ul class="list-unstyled text-white-50">
                                    <li><i class="bi-star me-2"></i> Integritas tinggi (walk the talk)</li>
                                    <li><i class="bi-star me-2"></i> Dahulukan yang utama (priority scale)</li>
                                    <li><i class="bi-star me-2"></i> Orientasi pada kualitas dan waktu (result and time oriented)</li>
                                    <li><i class="bi-star me-2"></i> Berpikir menang-menang (think win-win)</li>
                                    <li><i class="bi-star me-2"></i> Harmonis (harmony)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection