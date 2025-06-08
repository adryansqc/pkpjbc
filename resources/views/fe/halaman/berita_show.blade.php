@extends('fe.layouts.template')

@section('title')
    {{ $berita->judul }}
@endsection

@push('style')
<style>
    .news-detail-image {
        height: 400px;
        object-fit: cover;
        border-radius: 15px;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        color: white;
    }
    .breadcrumb-item a {
        color: #bc6c25;
        text-decoration: none;
    }
    .recent-news-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 10px;
    }
    
    .card-text img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: 15px 0;
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
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $berita->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="news-section section-padding section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-dark">
                    <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                         class="news-detail-image"
                         alt="{{ $berita->judul }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="text-muted">
                                <i class="bi-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                            </div>
                            <div class="text-muted">
                                <i class="bi-eye me-1"></i>
                                {{ $berita->view }} views
                            </div>
                        </div>
                        <h2 class="card-title text-white mb-4">{{ $berita->judul }}</h2>
                        <div class="card-text text-white-50">
                            <div class="content-wrapper">
                                {!! $berita->isi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="text-white mb-4">Berita Terbaru</h5>
                        @foreach($recentNews as $recent)
                            <div class="d-flex mb-3">
                                <img src="{{ $recent->gambar ? asset('storage/' . $recent->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                                     class="recent-news-image"
                                     alt="{{ $recent->judul }}">
                                <div class="ms-3">
                                    <h6 class="text-white">
                                        <a href="{{ route('frontend.berita.show', $recent->slug) }}" 
                                           class="text-decoration-none text-white">
                                            {{ Str::limit($recent->judul, 50) }}
                                        </a>
                                    </h6>
                                    <small class="text-muted">
                                        <i class="bi-calendar me-1"></i>
                                        {{ \Carbon\Carbon::parse($recent->tanggal)->format('d M Y') }}
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