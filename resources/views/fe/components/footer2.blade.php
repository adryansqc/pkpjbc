<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-12 me-auto">
                <em class="text-white d-block mb-4">Where to find us?</em>

                <strong class="text-white">
                    <i class="bi-geo-alt me-2"></i>
                    {{ $config['alamat'] ?? 'Jl. Kapt. A. Bakaruddin, Kelurahan Selamat, Kecamatan Danau Sipin, Kota Jambi, 36124' }}
                </strong>

                <ul class="social-icon mt-4">
                    <li class="social-icon-item">
                        <a href="{{ $config['facebook'] }}" class="social-icon-link bi-facebook" target="_blank">
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="{{ $config['twitter'] }}" target="_new" class="social-icon-link bi-twitter" target="_blank">
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="{{ $config['whatsapp'] }}" class="social-icon-link bi-whatsapp" target="_blank">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                <em class="text-white d-block mb-4">Contact</em>

                <p class="d-flex mb-1">
                    <strong class="me-2">Phone:</strong>
                    <a href="tel: 305-240-9671" class="site-footer-link">
                        +{{ $config['phone'] ?? '62 811 710 188' }}
                    </a>
                </p>

                <p class="d-flex">
                    <strong class="me-2">Email:</strong>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        {{ $config['email'] ?? 'sales@pkpjbc.com' }}
                    </a>
                </p>
            </div>


            <div class="col-lg-5 col-12">
                <em class="text-white d-block mb-4">Opening Hours.</em>

                <ul class="opening-hours-list">
                    <li class="d-flex">
                        Monday - Friday
                        <span class="underline"></span>

                        <strong>9:00 - 18:00</strong>
                    </li>

                    <li class="d-flex">
                        Saturday
                        <span class="underline"></span>

                        <strong>9:00 - 15:00</strong>
                    </li>

                    <li class="d-flex">
                        Sunday
                        <span class="underline"></span>

                        <strong>Closed</strong>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 col-12 mt-4">
                <p class="copyright-text mb-0">Copyright © PKPJBC 2025
            </div>
    </div>
</footer>