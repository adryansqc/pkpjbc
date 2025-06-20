
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Jambi Business Center</title>
    <meta
        content="Jambi Business Center dikembangkan oleh PT. Putra Kurnia Properti merupakan bagian dari PKP Group,
    perusahaan real estate dan developer skala nasional yang telah membangun berbagai proyek perumahan,
    townhouse, kawasan komersial, mall, villa, hotel dan apartemen yang tersebar di berbagai daerah di
    Indonesia antara lain di Batam, Jabodetabek, Pekanbaru, Jambi, Bintan, Semarang, Pekalongan,
    Purwokerto, Yogyakarta, Bali dan Lombok."
        name="description">
    <meta content="JBC, Jambi business, jambi,center kota jambi properti" name="keywords">
    {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description"> --}}

    <!-- Favicon -->
    <link href="{{ asset('real') }}/images/logojbc.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('real') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('real') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('real') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('real') }}/css/style.css" rel="stylesheet">
    @stack('style')
</head>

<body>
    <div class="container-xxl p-0" style="background-color: #FFEBCD;">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('fe.components.navbar')

        @yield('content')

        @include('fe.components.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('real') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('real') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('real') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('real') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('real') }}/js/main.js"></script>
    @stack('script')
</body>

</html>