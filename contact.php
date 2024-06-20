<?php
require_once 'utils/curl.php';

// Get data from API
$footer = get_data_api("https://cms-pangalengan.desaumkm.com/api/footer?populate=*");
$home = get_data_api('https://cms-pangalengan.desaumkm.com/api/home?populate=*');
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
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/footer.css">
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
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="page-wrapper">

        <?php include_once './utils/navigation.php' ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="page-header">
            <div class="page-header__bg" style="background-image:url('https://cms-pangalengan.desaumkm.com<?= $contact["data"]["attributes"]["slide_image"]["data"]["attributes"]["url"] ?>')" alt=""></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Hubungi Kami</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                            <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                            <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                            <img src="https://cms-pangalengan.desaumkm.com<?= $home['data']['attributes']['feature_image_button']['data'][0]['attributes']['url'] ?>" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p>Hubungi Kami</p>
                                <h3>Tinggalkan Pesan</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__summery">
                                <p style="text-align: justify; line-height: 1.5; margin: 0 0 50px;">
                                    Kami senang jika anda memiliki pertanyaan, saran, atau
                                    ingin berbicara lebih lanjut,
                                    jangan ragu untuk menghubungi kami
                                    melalui WhatsApp. Kami siap menjawab
                                    semua pertanyaan Anda.
                                </p>
                            </div><!-- /.contact-one__summery -->
                            <div class="contact-one__social">
                                <a href="<?= $contact['data']['attributes']['url_sosialmedia'] ?>"><i class="fab fa-instagram"></i></a>
                                <a href="<?= $contact['data']['attributes']['url_sosialmedia'] ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?= $contact['data']['attributes']['url_sosialmedia'] ?>"><i class="fab fa-facebook"></i></a>
                            </div><!-- /.contact-one__social -->
                            <div style="margin-top:40px">
                                <a href="https://wa.me/<?= $nohp_desaumkm ?>" target="_blank" class="thm-btn">
                                    <i class="agrikon-icon-phone-call"></i>
                                    <span class="">Kirim Pesan Ke WhatsApp</span>
                                </a><!-- /.main-header__info-phone -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-infos">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Tentang Kami</h3>
                                <p><?= $footer['data']['attributes']['deskripsi_desaumkm'] ?></p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Kunjungi Kami</h3>
                                <p><?= $contact["data"]["attributes"]["alamat_desaumkm"] ?></p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single" style="margin-left:-25px;">
                                <?php
                                $nohp_desaumkm = $contact["data"]["attributes"]["nohp_desaumkm"];
                                $nohp_desaumkm = str_replace("08", "+62", $nohp_desaumkm); ?>
                                <h3>Hubungi Kami</h3>
                                <p><a href="#"><?= $contact["data"]["attributes"]["email_desaumkm"] ?></a> <br>
                                    <a href="https://wa.me/<?= $nohp_desaumkm ?>"><?= $contact["data"]["attributes"]["nohp_desaumkm"] ?></a>
                                </p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.contact-infos -->

        <div class="google-map__home-two">
            <iframe title="template google map" src="<?= $contact['data']['attributes']['url_lokasi'] ?> " class="map__home-two" allowfullscreen></iframe>
        </div><!-- /.google-map -->

        <!-- Footer Start -->
        <?php include_once './utils/footer.php' ?>
        <!-- Footer End -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

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