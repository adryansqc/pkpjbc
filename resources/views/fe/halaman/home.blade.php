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
                    Our Story
                  </a>

                  <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Progress</strong></a>
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

<section class="barista-section section-padding section-bg3" id="barista-team">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Informasi</em>
                <h2 class="text-white">Berita</h2>
            </div>

            @forelse($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card bg-dark h-100">
                        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('pkpjbc/images/E1a.jpg') }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;"
                             alt="{{ $item->judul }}">
                        <div class="card-body">
                            <h5 class="card-title text-white">
                                <a href="{{ route('frontend.berita.show', $item->slug) }}"
                                   class="text-white text-decoration-none">
                                    {{ $item->judul }}
                                </a>
                            </h5>
                            <div class="d-flex justify-content-between mb-2">
                                <small class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</small>
                                <small class="text-muted"><i class="bi-eye me-1"></i>{{ $item->view }}</small>
                            </div>
                            <p class="card-text text-white-50">
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-white">Belum ada berita yang ditampilkan.</p>
                </div>
            @endforelse

            <div class="col-12 text-center mt-4">
                <a href="{{ route('frontend.berita') }}" class="btn custom-btn custom-border-btn">
                    Lihat Selengkapnya
                    <i class="bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="barista-section section-padding section-bg" id="barista-team">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Produk Unggulan</em>
                <h2 class="text-white">Tipe Ruko Unggulan</h2>
            </div>

            @forelse($unggulan as $item)
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">
                            <p class="badge ms-4"><em>{{ optional($item->type)->nama ?? 'Tipe Tidak Diketahui' }}</em></p>
                        </div>
                    </div>

                    <div class="team-block-image-wrap">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('pkpjbc/images/E1a.jpg') }}"
                             class="team-block-image img-fluid"
                             alt="{{ optional($item->type)->nama ?? $item->nama ?? 'Gambar Ruko' }}">
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-white">Belum ada produk unggulan yang ditampilkan.</p>
            </div>
            @endforelse

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
                <em class="text-white">Data</em>

                <h2 class="text-white">Price List</h2>
            </div>
            <div style="text-align: right;" class="mb-3">
                <a href="{{ route('frontend.download-price-list') }}" class="btn custom-btn custom-border-btn mt-3">
                    <i class="fa fa-download me-2"></i>Download Price List
                </a>
            </div>
            <div class="table-responsive">
                <table id="table" class="table table-striped table-hover table-bordered table-sm"
                border="1">
                <thead class="table-dark">
                    <tr>
                        <th rowspan="2" style="text-align: center;">Status</th>
                        <th colspan="2" rowspan="2" style="text-align: center;">Nomor <br>Ruko</th>
                        <th colspan="3" style="text-align: center;">Ukuran Tanah</th>
                        <th colspan="2" style="text-align: center;">Bangunan</th>
                        <th rowspan="2" style="text-align: center;">Harga Jual <br> Exc. PPN</th>
                        <th rowspan="2" style="text-align: center;">PPN 11%</th>
                        <th rowspan="2" style="text-align: center;">Harga Jual<br> Inc. PPN</th>

                    </tr>
                    <tr>
                        <th style="text-align: center;">Lebar <br>(m)</th>
                        <th style="text-align: center;">Panjang <br>(m)</th>
                        <th style="text-align: center;">Luas <br>(m2)</th>
                        <th style="text-align: center;">Type</th>
                        <th style="text-align: center;">Luas <br>(m2)</th>
                    </tr>
                </thead>
                <tbody style="background-color: white">
                    @foreach ($listProduk as $item)
                        <tr>
                            <td>
                                @if ($item->status == '1')
                                    <span
                                        style="color: white; background-color: #ff3b55; border-radius:10px; padding:.25em .4em;">Terjual</span>
                                @else
                                    <span
                                        style="color: white; background-color: #32a852; border-radius:10px; padding:.25em .4em;">Tersedia</span>
                                @endif
                            </td>
                            <td>{{ $item->kode_ruko }}</td>
                            <td>{{ $item->no_ruko }}</td>
                            <td>{{ $item->l_tanah }}</td>
                            <td>{{ $item->p_tanah }}</td>
                            <td>{{ $item->luas_tanah }}</td>
                            <td>{{ $item->type_bangunan }}</td>
                            <td>{{ $item->l_bangunan }}</td>
                            <td align="right">
                                {{ number_format($item->h_jual_exc_ppn, 0, ',', '.') }}</td>
                            <td align="right">{{ number_format($item->ppn, 0, ',', '.') }}</td>
                            <td align="right">
                                {{ number_format($item->h_jual_inc_ppn, 0, ',', '.') }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- <hr>
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

                    </ol> --}}
            </div>
        </div>
    </div>
</section>


<section class="reviews-section2 section-padding section-bg" id="section_4">
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
</section>





{{-- FAQ Section --}}
<section class="section-padding section-bg2" id="faq-section"> {{-- Menggunakan section-bg2 untuk background berbeda --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 text-white"> {{-- Sesuaikan lebar kolom --}}
                <h2 class="text-center mb-4">FAQ</h2>

                <div class="accordion" id="faqAccordion">
                    {{-- FAQ Item 1 --}}
                    <div class="accordion-item bg-dark text-white border-secondary"> {{-- Sesuaikan warna background dan border --}}
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Di JBC itu akan dibangun apa saja?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white-50">
                                Kawasan Pusat Bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko.
                            </div>
                        </div>
                    </div>

                    {{-- FAQ Item 2 --}}
                    <div class="accordion-item bg-dark text-white border-secondary"> {{-- Sesuaikan warna background dan border --}}
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Kapan pembangunan mall akan selesai?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white-50">
                                Proses pembangunan Mall JBC sedang underconstruction yang akan di targetkan selesai pada akhir 2026!
                            </div>
                        </div>
                    </div>

                    {{-- Add more FAQ items here if needed --}}

                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.113162169635!2d103.58707458857812!3d-1.6186259495915778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2589d2b4f9cdc7%3A0xbb55e0d4b4bb59a7!2sJambi%20Business%20Center!5e0!3m2!1sid!2sid!4v1696439318921!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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