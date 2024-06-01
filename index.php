<?php
require_once 'utils/curl.php';

// Get data from API
$activities = get_data_api('https://cms-pangalengan.desaumkm.com/api/activities?populate=*');
$mitras = get_data_api('https://cms-pangalengan.desaumkm.com/api/mitras?populate=*');
$umkms = get_data_api('https://cms-pangalengan.desaumkm.com/api/umkms?populate=*');
$home = get_data_api('https://cms-pangalengan.desaumkm.com/api/home?populate=*');
$kepengurusans = get_data_api('https://cms-pangalengan.desaumkm.com/api/kepengurusans?populate=*');
$contact = get_data_api("https://cms-pangalengan.desaumkm.com/api/contact?populate=*");
$footer = get_data_api("https://cms-pangalengan.desaumkm.com/api/footer?populate=*");
$kategoris = get_data_api("https://cms-pangalengan.desaumkm.com/api/kategoris?populate=*");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangalengan Desa UMKM</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="home" content="Pangalengan Desa UMKM">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/newcss.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/sass/main.css">
    <style>
        .product-card {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .product-image {
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-card h3.product-title {
            font-size: 28px;
            font-weight: 700;
            text-align: center;
            padding: 20px;
        }
    </style>
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
</head>

<body>
    <div class="page-wrapper">

        <?php include_once './utils/navigation.php' ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>

                <div class="swiper-wrapper">
                    <?php
                    foreach ($home['data']['attributes']['feature_image_top']['data'] as $homeimagetop) { ?>
                        <div class="swiper-slide">
                            <div class="image-layer" style="background-image: url('https://cms-pangalengan.desaumkm.com<?= $homeimagetop['attributes']['url'] ?>')" alt="">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7">
                                        <span class="tagline">WELCOME TO</span>
                                        <h2><span>Pangalengan</span> <br>Desa UMKM</h2>
                                        <p>Kami dengan gembira mengucapkan selamat datang kepada Anda di halaman website Desa UMKM ini. Jangan ragu untuk menjelajahi seluruh konten yang kami sediakan, berpartisipasi dalam diskusi, dan berbagi pengalaman Anda!</p>
                                        <a href="contact.php" class=" thm-btn">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="service-one">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($kategoris['data'] as $kategori) { ?>
                        <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="service-one__box">
                                <img src="https://cms-pangalengan.desaumkm.com<?= $kategori['attributes']['image_kategori']['data'][0]['attributes']['url'] ?>" width="300" height="300">
                                <div class="service-one__box-content">
                                    <h3><a href="umkm.php"><?= $kategori['attributes']['nama_kategori'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Organic Services</a></h3>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="" padding-top="0"> <!-- about-one -->
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container" padding-top="0">
                <div class="about-one__content">
                    <div class="block-title text-left">
                        <!-- <div class=""><img src="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>" width="20" alt=""></div> -->
                        <p>SELAMAT DATANG WIRAUSAHAWAN</p>
                        <h3>Menginspirasi Desa Melalui UMKM </h3>
                    </div><!-- /.block-title -->
                    <div class="about-one__tagline">
                        <p>Kami memiliki 5 tahun pengalaman dalam memperbesar UMKM di berbagai desa di Bandung</p>
                    </div><!-- /.about-one__tagline -->
                    <div class="about-one__summery">
                        <p>UMKM di Pangalengan, Jawa Barat, adalah cerminan dari semangat kewirausahaan yang kuat di kalangan masyarakat setempat. Dengan beragam produk unggulan mulai dari hasil pertanian, kerajinan tangan, hingga kuliner khas, UMKM di Pangalengan berperan penting dalam perekonomian lokal dan memberikan kontribusi signifikan terhadap peningkatan kesejahteraan masyarakat. Dengan dukungan pemerintah daerah dan berbagai pihak terkait, UMKM di Pangalengan terus berkembang dan berinovasi. Melalui berbagai pelatihan dan pendampingan, para pelaku UMKM di Pangalengan terus meningkatkan kapasitas mereka untuk menghasilkan produk yang berkualitas dan berdaya saing tinggi. Secara keseluruhan, UMKM di Pangalengan adalah contoh nyata dari bagaimana sektor UMKM dapat memberikan dampak positif bagi perekonomian lokal dan masyarakat sekitar. Dengan semangat kewirausahaan yang kuat dan dukungan yang tepat, UMKM di Pangalengan akan terus tumbuh dan berkembang menjadi lebih baik lagi di masa depan.</p>
                    </div><!-- /.about-one__summery -->
                    <div class="about-one__icon-row">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-farmer"></i>
                                    <h4>UMKM Berkarya</h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-agriculture"></i>
                                    <h4>UMKM Maju</h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-one__icon-row -->
                    <!-- <a href="list-umkm.php" class="thm-btn">Discover More</a> -->
                </div><!-- /.about-one__content -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="service-two">
            <div class="service-two__bottom-curv"></div>
            <div class="container">
                <div class="block-title text-center">
                    <!-- <div class=""><img src="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>" width="20" alt=""></div> -->
                    <p>Aktifitas kami</p>
                    <h3>Apa yang kami lakukan</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <?php
                    foreach ($activities['data'] as $activity) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="service-two__card">
                                <div class="service-two__card-image">
                                    <img src="https://cms-pangalengan.desaumkm.com<?= $activity['attributes']['gambar_aktivitas']['data']['attributes']['url'] ?>" width="200" height="200" alt="">
                                </div><!-- /.service-two__card-image -->
                                <div class="service-two__card-content" style="margin-top: -1.2rem; padding-top: 0.5rem; padding-bottom: 1rem;">
                                    <h3><a href="#"><?= $activity['attributes']['judul_aktivitas'] ?></a></h3>
                                    <p><?= $activity['attributes']['deskripsi_aktivitas'] ?></p>
                                </div><!-- /.service-two__card-content -->
                            </div><!-- /.service-two__card -->
                        </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <?php
                    }
                    ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->

        <!-- UMKM KAMI -->
        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <h3>UMKM KAMI</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <!-- Looping Data UMKM KAMI -->
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($umkms['data'] as $umkm) { ?>
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <img src="https://cms-pangalengan.desaumkm.com<?= $umkm['attributes']['profile_picture_umkm']['data']['attributes']['url'] ?>" class="product-image">
                                    <h3 class="product-title"><?= $umkm['attributes']['nama_umkm'] ?></h3>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <!-- Kata Kata Pengurus -->
        <section class="testimonials-one">
            <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
            <div class="container">
                <!-- <h2 class="testimonials-one__title">Testimonials</h2> -->
                <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($kepengurusans['data'] as $kepengurusan) { ?>
                            <div class="swiper-slide">
                                <p><?= $kepengurusan['attributes']['testimoni_kepengurusan'] ?></p>
                            </div><!-- /.swiper-slide -->
                        <?php
                        }
                        ?>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__carousel -->

                <div id="testimonials-one__thumb" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $base_url = 'https://cms-pangalengan.desaumkm.com';
                        foreach ($kepengurusans['data'] as $kepengurusan) { ?>
                            <div class="swiper-slide">
                                <div class="testimonials-one__image">
                                    <?php
                                    $foto_pengurus = $base_url . $kepengurusan['attributes']['foto_pengurus']['data'][0]['attributes']['url'];
                                    echo '<img src="' . $foto_pengurus . '" alt="">';
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($kepengurusans['data'] as $kepengurusan) { ?>
                            <div class="swiper-slide">
                                <div class="testimonials-one__meta">
                                    <h4><?= $kepengurusan['attributes']['nama_pengurus'] ?></h4>
                                    <span><?= $kepengurusan['attributes']['jabatan_kepengurusan'] ?></span>
                                </div><!-- /.testimonials-one__meta -->
                            </div><!-- /.swiper-slide -->
                        <?php
                        }
                        ?>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__meta.swiper-container -->

                <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div>
                            <div class="contact-two__image-bubble-2"></div>
                            <div class="contact-two__image-bubble-3"></div>
                            <img src="https://cms-pangalengan.desaumkm.com<?= $home['data']['attributes']['feature_image_button']['data'][0]['attributes']['url'] ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <!-- <div class=""><img src="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>" width="20" alt=""></div> -->
                                <p>Hubungi Kami</p>
                                <h3>Tinggalkan Pesan</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-two__summery">
                                Kami senang jika anda memiliki pertanyaan, saran, atau ingin berbicara lebih lanjut, jangan ragu untuk menghubungi kami melalui WhatsApp. Kami siap menjawab semua pertanyaan Anda. <br> <br>
                                <div class="">
                                    <a href="https://wa.me/<?= $nohp_desaumkm ?>" target="_blank" class="thm-btn">
                                        <i class="agrikon-icon-phone-call"></i>
                                        <span class="">Kirim Pesan Ke WhatsApp</span>
                                    </a><!-- /.main-header__info-phone -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.contact-two__summery -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->

        <!-- Logo Mitra -->
        <div class="client-carousel client-carousel__has-border-top">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <!-- Looping Data Logo Mitra -->
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($mitras['data'] as $mitra) { ?>
                            <div class="swiper-slide">
                                <img src="https://cms-pangalengan.desaumkm.com<?= $mitra['attributes']['foto_mitra']['data'][0]['attributes']['url'] ?>" width="200" alt="" style="max-width: 170%;">
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include_once './utils/footer.php' ?>
        <!-- Footer End -->

    </div><!-- /.page-wrapper -->

    <!-- Mobile Nav Start -->
    <?php include_once './utils/mobile-nav.php' ?>
    <!-- Mobile Nav Stop -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>
</body>

</html>