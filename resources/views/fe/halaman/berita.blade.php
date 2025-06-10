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

<section class="news-section section-padding section-bg">
    <div class="container">
        <div class="row g-4">
            @forelse($berita as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card news-card bg-dark">
                        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                             class="card-img-top news-image"
                             alt="{{ $item->judul }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <small class="text-muted">
                                    <i class="bi-calendar me-1"></i>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </small>
                                <small class="text-muted">
                                    <i class="bi-eye me-1"></i>
                                    {{ $item->view }} views
                                </small>
                            </div>
                            <h5 class="card-title text-white">{{ $item->judul }}</h5>
                            <p class="card-text text-white-50">
                                {{ Str::limit(strip_tags($item->isi), 150) }}
                            </p>
                            <a href="{{ route('frontend.berita.show', $item->slug) }}"
                               class="btn custom-btn custom-border-btn btn-sm mt-2">
                                Baca Selengkapnya
                                <i class="bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        Belum ada berita yang ditampilkan.
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection