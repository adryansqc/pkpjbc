@extends('fe.layouts.app')

@section('title')
    Tentang
@endsection

@section('content')
<div class="container-fluid header p-0" style="background-color: #FFEBCD;">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Tentang Kami</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="{{ asset('real') }}/img/bg1.jpg" alt="">
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
                <h1 class="mb-4">JBC ADALAH</h1>
                <p class="mb-4">
                    Jambi Business Center (JBC) merupakan kawasan pusat bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko. Luas kawasan ini adalah 73.938 m2 yang berlokasi di antara 3 jalan utama yaitu Jl. Kapt. A. Bakaruddin, Jl. Patimura dan Jl. Amir Hamzah.</p>
            </div>

            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                <p class="mb-4">Di sekitar kawasan juga sudah terbentuk menjadi kawasan bisnis. Ada mall, hotel, rumah sakit, sekolah dan ruko yang begitu dekat bahkan menempel dengan kawasan JBC. Lalu lintas depan kawasan yang selalu ramai menjadikannya sebagai kawasan bisnis yang hidup sampai tengah malam yang sulit ditemui di kawasan lain.</p>

                <p class="mb-5">Dan dengan adanya jalan tol Trans Sumatera yang direncanakan Pemerintah tersambung hingga Jambi pada 2026 akan membuat kunjungan ke Kota Jambi meningkat dan akan berpengaruh terhadap perekonomian. Kawasan JBC mempersiapkan infrastruktur yang mampu menampung wisatawan dengan jalan yang lebar dan kapasitas parkir yang banyak.</p>

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="bg-light rounded p-4 mb-4">
                            <h2 class="mb-4">VISI KAMI</h2>
                            <p class="mb-0">Jambi Business Center menjadi Pusat Bisnis dan Destinasi Utama Berbelanja di Kota Jambi</p>
                        </div>

                        <div class="bg-light rounded p-4">
                            <h2 class="mb-4">MISI KAMI</h2>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">✓ Menjadikan Kawasan JBC menjadi Kawasan paling ramai di Kota Jambi</li>
                                <li class="mb-2">✓ Mendatangkan tenant-tenant terbaik dari Jambi maupun dari luar Jambi</li>
                                <li class="mb-2">✓ Membentuk management mall dan hotel yang professional</li>
                                <li class="mb-2">✓ Mengoptimalkan harga sewa di Kawasan JBC</li>
                                <li class="mb-2">✓ Mewujudkan infrastruktur yang bagus dan terawat</li>
                                <li>✓ Membina hubungan yang baik dengan mitra pemerintah, pemerintah setempat dan masyarakat sekitar</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="bg-light rounded p-4">
                            <h2 class="mb-4">NILAI - NILAI</h2>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="border-start border-primary border-5 px-3 mb-4">
                                        <h5>Integritas tinggi</h5>
                                        <small>walk the talk</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-start border-primary border-5 px-3 mb-4">
                                        <h5>Dahulukan yang utama</h5>
                                        <small>priority scale</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-start border-primary border-5 px-3 mb-4">
                                        <h5>Orientasi pada kualitas dan waktu</h5>
                                        <small>result and time oriented</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-start border-primary border-5 px-3 mb-4">
                                        <h5>Berpikir menang-menang</h5>
                                        <small>think win-win</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-start border-primary border-5 px-3">
                                        <h5>Harmonis</h5>
                                        <small>harmony</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Call to Action Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="{{ asset('real') }}/img/call-to-action.jpg" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="mb-4">
                            <h1 class="mb-3">Contact With Our Certified Agent</h1>
                            <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                        <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Call to Action End -->


<!-- Team Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Agents</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('real') }}/img/team-1.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('real') }}/img/team-2.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('real') }}/img/team-3.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('real') }}/img/team-4.jpg" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Full Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection