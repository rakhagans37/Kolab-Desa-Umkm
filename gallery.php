<?php
require_once 'utils/curl.php';

// Get data from API
$contact = get_data_api("https://cms-pangalengan.desaumkm.com/api/contact?populate=*");
$footer = get_data_api("https://cms-pangalengan.desaumkm.com/api/footer?populate=*");
$gallerys = get_data_api('https://cms-pangalengan.desaumkm.com/api/galeris?populate=*');
$umkms1 = get_data_api('https://cms-pangalengan.desaumkm.com/api/umkms/1?populate=*');
$umkms2 = get_data_api('https://cms-pangalengan.desaumkm.com/api/umkms/11?populate=*');
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
    <meta name="gallery" content="Pangalengan Desa UMKM">

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
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="page-wrapper">

        <?php include_once './utils/navigation.php' ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2>Galeri</h2>
            </div>
        </section>

        <div class="projects-one">
            <div class="container">
                <div class="row">
                    <?php foreach ($gallerys['data'] as $gallery) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="projects-one__single">
                                <img src="https://cms-pangalengan.desaumkm.com<?= $gallery['attributes']['image_kegiatan']['data'][0]['attributes']['url']; ?>" width="400" height="225" alt="">

                            </div>
                        </div>
                    <?php } ?>
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