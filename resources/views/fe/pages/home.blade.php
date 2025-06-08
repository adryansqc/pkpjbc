@extends('fe.layouts.app')

@section('title')
    Beranda
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .chart-container {
            position: relative;
            margin: auto;
        }
    </style>
@endpush

@section('content')
    <!-- Header Start -->
    <div class="container-fluid header  p-0" style="background-color: #FFEBCD;">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">PT. <span class="text-primary">Putra Kurnia Properti</span></h1>
                <p class="animated fadeIn mb-4 pb-2">Mempersembahkan Properti Yang Berkualitas</p>
                <a href="{{ route('frontend.tentang') }}" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Tentang Kami</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    @forelse($imageSlider as $slider)
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{ asset('storage/' . $slider->foto) }}" alt="{{ $slider->nama }}">
                        </div>
                    @empty
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{ asset('real') }}/img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{ asset('real') }}/img/carousel-2.jpg" alt="">
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
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
    <!-- Search End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('real') }}/img/bg1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Tentang Kami</h1>
                    <p class="mb-4">Jambi Business Center dikembangkan oleh PT. Putra Kurnia Properti merupakan bagian dari PKP Group, perusahaan real estate dan developer skala nasional yang telah membangun berbagai proyek proyek perumahan, townhouse, kawasan komersial, mall, villa, hotel dan apartemen yang tersebar di berbagai daerah di Indonesia antara lain di Batam, Jabodetabek, Pekanbaru, Jambi, Bintan, Semarang, Pekalongan, Purwokerto, Yogyakarta, Bali dan Lombok.</p>
                    <p class="mb-4">Hampir 30 tahun berkiprah, selama itu pula PKP Group dikenal sebagai pengembang besar dan terpercaya. Memiliki keunggulan dari sisi kualitas produk dan legalitas terjamin, menjadikan karya PKP Group selalu menjadi pilihan utama masyarakat dalam memiliki produk property. PT PKP memberikan kemudahan bagi masyarakat untuk memiliki produk property melalui pembiayaan perbankan, karena telah menjalin kerjasama dengan berbagai bank pemerintah dan bank umum nasional.</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('frontend.tentang') }}">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tipe Properti</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="">
                        <div class="rounded p-4 h-100">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{ asset('real') }}/img/icon-housing.png" alt="Icon">
                            </div>
                            <h6>Area pusat Bisnis</h6>
                            <span>3 lantai ruko dengan konsep shopping area dan perkantoran</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="">
                        <div class="rounded p-4 h-100">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{ asset('real') }}/img/icon-condominium.png" alt="Icon">
                            </div>
                            <h6>Pusat Perbelanjaan Terlengkap</h6>
                            <span>Sebuah tempat yang menawarkan pengalaman belanja yang paling lengkap dan komprehensif. Dengan berbagai macam toko, merek, dan layanan yang tersedia di satu lokasi</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3 h-100" href="">
                        <div class="rounded p-4 h-100">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{ asset('real') }}/img/icon-apartment.png" alt="Icon">
                            </div>
                            <h6>Hotel & convention center</h6>
                            <span>Dengan kenyamanan menginap dan fasilitas pertemuan yang canggih, hotel & convention center menyediakan pengalaman yang lengkap bagi tamu yang membutuhkan keduanya dalam satu lokasi.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->



    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Daftar Unggulan</h1>
                        <p>Temukan properti unggulan kami yang telah diseleksi dengan cermat untuk memberikan nilai dan kualitas terbaik.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @forelse($unggulan as $item)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        {{ $item->status ? 'Terjual' : 'Ready' }}
                                    </div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        {{ $item->type->nama }}
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Rp {{ number_format($item->harga, 0, ',', '.') }}</h5>
                                    <a class="d-block h5 mb-2" href="">{{ $item->nama }}</a>
                                    <p>{{ Str::limit($item->keterangan, 100) }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center">
                            <p>Tidak ada produk unggulan</p>
                        </div>
                        @endforelse

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="{{ route('frontend.unggulan') }}">Lihat Semua Properti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->


    <!-- News Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Berita Terbaru</h1>
                <p>Informasi terkini seputar Jambi Business Center</p>
            </div>
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

                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="{{ route('frontend.berita') }}">Lihat Semua Berita</a>
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->
    <!-- Chart Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Statistik Properti</h1>
                <p>Visualisasi data ketersediaan properti Jambi Business Center</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card shadow-sm hover-shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center mb-4">Status Properti</h5>
                            <div style="height: 250px;">
                                <canvas id="pieChart"></canvas>
                            </div>
                            <div class="text-center mt-3" id="pieLegend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card shadow-sm hover-shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center mb-4">Tipe Bangunan</h5>
                            <div style="height: 250px;">
                                <canvas id="donutChart"></canvas>
                            </div>
                            <div class="text-center mt-3" id="donutLegend"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Daftar Harga</h1>
                <p>Informasi detail harga dan spesifikasi properti Jambi Business Center</p>
                <a href="{{ route('frontend.download-price-list') }}" class="btn btn-primary py-2 px-4 mt-3">
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
                <tbody>
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
            <hr>
                    <strong>KETENTUAN:</strong>
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
    <!-- Gallery Start -->




    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Galeri Foto</h1>
                <p>Dokumentasi progress pembangunan dan fasilitas Jambi Business Center</p>
            </div>
            <div class="row g-4">
                @forelse($galeri as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul_foto }}">
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                {{ $item->judul_foto }}
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-body mb-3">{{ Str::limit($item->keterangan, 100) }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>Belum ada foto dalam galeri</p>
                </div>
                @endforelse

                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="{{ route('frontend.galeri') }}">Lihat galeri</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Kontak Kami</h1>
                <p>Hubungi kami untuk informasi lebih lanjut mengenai properti Jambi Business Center</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-square bg-primary rounded-circle mx-auto mb-4">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>Alamat Kantor</h5>
                            <p class="mb-0">Jl. Kapt. A. Bakaruddin, Kelurahan Selamat, Kecamatan Danau Sipin, Kota Jambi, 36124</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-square bg-primary rounded-circle mx-auto mb-4">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>Email</h5>
                            <p class="mb-0"><a href="mailto:sales@pkpjbc.com" class="text-body">sales@pkpjbc.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-square bg-primary rounded-circle mx-auto mb-4">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>Telepon/WhatsApp</h5>
                            <p class="mb-0"><a href="https://wa.me/628117101880" target="_blank" class="text-body">+62 811 710 188</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-square bg-primary rounded-circle mx-auto mb-4">
                                <i class="fab fa-instagram text-white"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>Instagram</h5>
                            <p class="mb-0"><a href="https://www.instagram.com/jambibusinesscenter" target="_blank" class="text-body">@jambibusinesscenter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl mb-5">
        <div class="container px-0">
            <div class="map-container wow fadeInUp" data-wow-delay="0.1s">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2232859241335!2d103.58572047510722!3d-1.6201699360824602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2589d2b4f9cdc7%3A0xbb55e0d4b4bb59a7!2sJambi%20Business%20Center%20(JBC)!5e0!3m2!1sen!2sid!4v1745851827558!5m2!1sen!2sid"
                    class="w-100"
                    height="500"
                    style="border: 0; border-radius: 5px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@push('script')
<script src="{{ asset('plugins') }}/jquery/jquery.min.js"></script>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const propertyData = @json($listProduk);

    // Process data for status chart
    const statusData = propertyData.reduce((acc, item) => {
        const status = item.status == 1 ? 'Terjual' : 'Tersedia';
        acc[status] = (acc[status] || 0) + 1;
        return acc;
    }, {});

    // Process data for type chart
    const typeData = propertyData.reduce((acc, item) => {
        acc[item.type_bangunan] = (acc[item.type_bangunan] || 0) + 1;
        return acc;
    }, {});

    // Common chart options
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.label || '';
                        const value = context.parsed || 0;
                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                        const percentage = Math.round((value * 100) / total);
                        return `${label}: ${value} (${percentage}%)`;
                    }
                }
            }
        },
        animation: {
            onComplete: function() {
                createCustomLegend(this, this.canvas.id === 'pieChart' ? 'pieLegend' : 'donutLegend');
            },
            animateScale: true,
            animateRotate: true,
            duration: 2000
        }
    };

    // Pie Chart
    const pieChart = new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: Object.keys(statusData),
            datasets: [{
                data: Object.values(statusData),
                backgroundColor: ['#ff3b55', '#32a852'],
                borderWidth: 2,
                borderColor: '#ffffff',
                hoverOffset: 10
            }]
        },
        options: commonOptions
    });

    // Donut Chart
    const donutChart = new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: {
            labels: Object.keys(typeData),
            datasets: [{
                data: Object.values(typeData),
                backgroundColor: [
                    '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'
                ],
                borderWidth: 2,
                borderColor: '#ffffff',
                hoverOffset: 10
            }]
        },
        options: {
            ...commonOptions,
            cutout: '60%'
        }
    });

    // Custom legends
    function createCustomLegend(chart, elementId) {
        const legendContainer = document.getElementById(elementId);
        legendContainer.innerHTML = chart.data.labels.map((label, index) => {
            const color = chart.data.datasets[0].backgroundColor[index];
            const value = chart.data.datasets[0].data[index];
            const total = chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
            const percentage = Math.round((value * 100) / total);
            return `
                <span class="mx-2" style="display: inline-flex; align-items: center;">
                    <span style="width: 12px; height: 12px; background-color: ${color};
                           display: inline-block; margin-right: 5px; border-radius: 2px;"></span>
                    <span style="font-size: 0.9rem;">${label} (${percentage}%)</span>
                </span>
            `;
        }).join('');
    }

    // Create legends
    createCustomLegend(pieChart, 'pieLegend');
    createCustomLegend(donutChart, 'donutLegend');

    // Update legends on chart changes
    // Remove these lines at the bottom
    // pieChart.options.plugins.animation.onComplete = () => createCustomLegend(pieChart, 'pieLegend');
    // donutChart.options.plugins.animation.onComplete = () => createCustomLegend(donutChart, 'donutLegend');
</script>
@endpush