@extends('fe.layouts.app')

@section('title')
    Berita
@endsection

@section('content')
<div class="container-fluid header p-0" style="background-color: #FFEBCD;">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Berita Terbaru</h1>
            <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Berita</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="{{ asset('real') }}/img/bg1.jpg" alt="">
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

<!-- News List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @forelse($berita as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}">
                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="text-primary mb-3">{{ Str::limit($item->judul, 50) }}</h5>
                        <div class="d-flex justify-content-between mb-3">
                            <small><i class="fa fa-user text-primary me-2"></i>{{ $item->user->name }}</small>
                            <small><i class="fa fa-eye text-primary me-2"></i>{{ number_format($item->view) }}</small>
                        </div>
                        <p class="text-body mb-3">{!! Str::limit(strip_tags($item->isi), 100) !!}</p>
                        <a class="btn btn-primary" href="{{ route('frontend.berita.show', $item->slug) }}">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Belum ada berita</p>
            </div>
            @endforelse

            <div class="col-12">
                {{ $berita->links() }}
            </div>
        </div>
    </div>
</div>
<!-- News List End -->
@endsection