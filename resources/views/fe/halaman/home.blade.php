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

                <p2 class="text-white">Jambi Business Center dikembangkan oleh PT. Putra Kurnia Properti merupakan bagian dari PKP Group, perusahaan real estate dan developer skala nasional yang telah membangun berbagai proyek perumahan, townhouse, kawasan komersial, mall, villa, hotel dan apartemen yang tersebar di berbagai daerah di Indonesia antara lain di Batam, Jabodetabek, Pekanbaru, Jambi, Bintan, Semarang, Pekalongan, Purwokerto, Yogyakarta, Bali dan Lombok.</p>

                <p2 class="text-white">Hampir 30 tahun berkiprah, selama itu pula PKP Group dikenal sebagai pengembang besar dan terpercaya. Memiliki keunggulan dari sisi kualitas produk dan legalitas terjamin, menjadikan karya PKP Group selalu menjadi pilihan utama masyarakat dalam memiliki produk property. PT PKP memberikan kemudahan bagi masyarakat untuk memiliki produk property melalui pembiayaan perbankan, karena telah menjalin kerjasama dengan berbagai bank pemerintah dan bank umum nasional.<a rel="nofollow" href="https://www.pkpjbc.com" target="_blank">pkpjbc</a>.</p>

                <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Type Ruko</a>
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

<section class="barista-section section-padding section-bg2" id="barista-team">
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
                            <h5 class="card-title text-white">{{ $item->judul }}</h5>
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


<section class="menu-section section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="menu-block-wrap">
                    <div class="text-center mb-4 pb-lg-2">
                        <em class="text-white">Daftar HARGA</em>
                        <h4 class="text-white">Ruko</h4>
                    </div>

                    <div class="menu-block">
                        <div class="d-flex">
                            <h6>E1 01-42</h6>

                            <span class="underline"></span>

                            <strong class="ms-auto">Rp.2.000.000.000 - Rp.4.000.000.000</strong>
                        </div>

                        <div class="border-top mt-2 pt-2">
                            <small>Lebar(m) 6,50 | Panjang(m) 15,00 | Luas(m2) 97,50</small>
                        </div>
                    </div>

                    <div class="menu-block my-4">
                        <div class="d-flex">
                            <h6>
                                E2 17-32
                            </h6>

                            <span class="underline"></span>

                            <strong class="text-white ms-auto"><del>Rp.4.000.000.000</del></strong>

                            <strong class="ms-2">Rp.2.000.000.000</strong>
                        </div>

                        <div class="border-top mt-2 pt-2">
                            <small>Lebar(m) 5,00 | Panjang(m) 16,00 | Luas(m2) 80,00</small>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="d-flex">
                            <h6>W1 01-37
                                <span class="badge ms-3">Recommend</span>
                            </h6>

                            <span class="underline"></span>

                            <strong class="ms-auto">Rp.2.000.000.000 - Rp.4.000.000.000</strong>
                        </div>

                        <div class="border-top mt-2 pt-2">
                            <small>Lebar(m) 5,00 | Panjang(m) 16,00 | Luas(m2) 80,00</small>
                        </div>
                    </div>

                    <div class="menu-block my-4">
                        <div class="d-flex">
                            <h6>W2 01-29</h6>

                            <span class="underline"></span>

                            <strong class="ms-auto">Rp.2.000.000.000 - Rp.4.000.000.000</strong>
                        </div>

                        <div class="border-top mt-2 pt-2">
                            <small>Lebar(m) 5,00 | Panjang(m) 15,00 | Luas(m2) 75,00</small>
                        </div>
                    </div>

                    <div class="menu-block">
                        <div class="d-flex">
                            <h6>S</h6>

                            <span class="underline"></span>

                            <strong class="ms-auto">Rp.3.000.000.000 - Rp.5.000.000.000</strong>
                        </div>

                        <div class="border-top mt-2 pt-2">
                            <small>Lebar(m) 6,00 | Panjang(m) 20,00 | Luas(m2) 100,00</small>
                        </div>
                    </div>

                    <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="https://api.whatsapp.com/send/?phone=62811710188&text=Halo,+saya+tertarik+untuk+membeli+Ruko+Di+JBC&type=phone_number&app_absent=0">
                        Pesan Sekarang Juga
                      </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="reviews-section2 section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Data</em>

                <h2 class="text-white">Price List</h2>
            </div>
            <div style="text-align: right;" class="mt-3 mb-3">
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
    </div>
</section>
<section class="reviews-section section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <em class="text-white">Reviews by Customers</em>

                <h2 class="text-white">Testimonials</h2>
            </div>

            <div class="timeline">
                <div class="timeline-container timeline-container-left">
                    <div class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <img src="{{ asset('pkpjbc') }}/images/reviews/young-woman-with-round-glasses-yellow-sweater.jpg" class="reviews-block-image img-fluid" alt="">

                                <div class="">
                                    <h6 class="text-white mb-0">Sandra</h6>
                                    <em class="text-white"> Customers</em>
                                </div>
                            </div>

                            <div class="reviews-block-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="d-flex border-top pt-3 mt-4">
                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                    <div class="reviews-group ms-auto">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-container timeline-container-right">
                    <div class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <img src="{{ asset('pkpjbc') }}/images/reviews/senior-man-white-sweater-eyeglasses.jpg" class="reviews-block-image img-fluid" alt="">

                                <div class="">
                                    <h6 class="text-white mb-0">Don</h6>
                                    <em class="text-white"> Customers</em>
                                </div>
                            </div>

                            <div class="reviews-block-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="d-flex border-top pt-3 mt-4">
                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                    <div class="reviews-group ms-auto">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-container timeline-container-left">
                    <div class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <img src="{{ asset('pkpjbc') }}/images/reviews/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg" class="reviews-block-image img-fluid" alt="">

                                <div class="">
                                    <h6 class="text-white mb-0">Olivia</h6>
                                    <em class="text-white"> Customers</em>
                                </div>
                            </div>

                            <div class="reviews-block-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <div class="d-flex border-top pt-3 mt-4">
                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                    <div class="reviews-group ms-auto">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <em class="text-white">Say Hello</em>
                <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
            </div>

            <div class="col-lg-6 col-12">
                <form action="#" method="post" class="custom-form contact-form" role="form">

                <div class="row">

                    <div class="col-lg-6 col-12">
                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                        <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <label for="email" class="form-label">Email Address</label>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">How can we help?</label>

                        <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto mt-3">
                    <button type="submit" class="form-control">Send Message</button>
                </div>
            </form>
            </div>

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