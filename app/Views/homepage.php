<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<!-- Mashead header-->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Showcase your mobile beautifully.</h1>
                    <p class="lead fw-normal text-muted mb-5">Belanja produk Apple lebih mudah dari rumah . Gratis Ongkir dan banyak diskon lainnya .</p>

                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source src="<?= base_url('assets/img/demo-screen.mp4') ?>" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
                <div class="h2 fs-1 text-white mb-4">"Semakin produktif dirumah bersama pilihan terbaik"</div>
            </div>
        </div>
    </div>
</aside>
<!-- App features section-->
<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Garansi Resmi</h3>
                                <p class="text-muted mb-0">Produk Bergaransi Resmi/ Garansi TAM</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Layanan Pelanggan</h3>
                                <p class="text-muted mb-0">Tim Kami Siap Membantu Seputar Produk</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Jasa Pengiriman</h3>
                                <p class="text-muted mb-0">Pengiriman Dan Keamanan Terpercaya</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Keuntungan Belanja</h3>
                                <p class="text-muted mb-0">Promo dan Info Terkini Produk Gadget Terbaru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source src="<?= base_url('assets/img/demo-screen.mp4') ?>" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic features section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Tentang Kami</h2>
                <p class="lead fw-normal text-muted mb-5 mb-lg-0">Shippy adalah sebuah platform E-Commerce Apple Premium Reseller di Indonesia yang mengkhususkan diri dalam produk-produk Apple dan berbagai macam aksesoris pelengkap, software dan produk lainnya.</p>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="cta">
    <div class="cta-content">
        <div class="container px-5">
            <h2 class="text-white display-1 lh-1 mb-4">
                Stop waiting.
                <br />
                Start trying.
            </h2>
            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="<?= site_url('etalase/index') ?>" target="_blank">Beli Sekarang</a>
        </div>
    </div>
</section>


<?= $this->endSection() ?>