@extends('fe.layouts.app')

@section('title')
    {{ $berita->judul }}
@endsection

@section('content')
<div class="container-fluid header p-0" style="background-color: #FFEBCD;">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">{{ $berita->judul }}</h1>
            <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.berita') }}">Berita</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">{{ Str::limit($berita->judul, 30) }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        {{-- <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0 py-3">
                            <option selected>Property Type</option>
                            <option value="1">Property Type 1</option>
                            <option value="2">Property Type 2</option>
                            <option value="3">Property Type 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0 py-3">
                            <option selected>Location</option>
                            <option value="1">Location 1</option>
                            <option value="2">Location 2</option>
                            <option value="3">Location 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
        </div> --}}
    </div>
</div>

<!-- Article Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Article Content -->
                <div class="mb-5">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <span class="text-primary me-2">
                                <i class="fa fa-user text-primary me-2"></i>{{ $berita->user->name }}
                            </span>
                            <span class="text-primary me-2">
                                <i class="fa fa-calendar text-primary me-2"></i>{{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d M Y') }}
                            </span>
                        </div>
                        <span class="text-primary">
                            <i class="fa fa-eye text-primary me-2"></i>{{ number_format($berita->view) }} views
                        </span>
                    </div>

                    <div class="content">
                        {!! $berita->isi !!}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Berita Lainnya</h3>
                    </div>
                    @foreach($recentNews as $recent)
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('storage/' . $recent->gambar) }}"
                            style="width: 100px; height: 100px; object-fit: cover;"
                            alt="{{ $recent->judul }}">
                        <a href="{{ route('frontend.berita.show', $recent->slug) }}"
                            class="h6 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                            {{ Str::limit($recent->judul, 50) }}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Article End -->
@endsection

@push('style')
<style>
    .content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }
</style>
@endpush
