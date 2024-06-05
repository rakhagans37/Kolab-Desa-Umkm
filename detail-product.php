<?php
require_once 'utils/curl.php';
$umkms = get_data_api('https://cms-pangalengan.desaumkm.com/api/umkms?populate=*');
$contact = get_data_api('https://cms-pangalengan.desaumkm.com/api/contact?populate=*');
$footer = get_data_api('https://cms-pangalengan.desaumkm.com/api/footer?populate=*');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $products = get_data_api("https://cms-pangalengan.desaumkm.com/api/produks/{$id}?populate=*");
    $productName = $products['data']['attributes']['nama_produk'];
    $productDescription = $products['data']['attributes']['deskripsi_produk'];
    $rangeProductPrice = $products['data']['attributes']['harga_produk'];
    $umkmName = $products['data']['attributes']['umkm']['data']['attributes']['nama_umkm'];
    $umkmAddress = $products['data']['attributes']['umkm']['data']['attributes']['alamat_umkm'];
    $featureImageProduct = $products['data']['attributes']['foto_produk']['data'][0]['attributes']['url'];
} else {
    echo "Products ID Not Found";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangalengan Desa UMKM</title>
    <link rel="apple-touch-icon" href="" sizes="180x180">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cms-pangalengan.desaumkm.com<?= $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] ?>">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="home" content="Pangalengan Desa UMKM">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Red+Hat+Display:ital,wght@1,300&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="assets/css/product-detail.css">



    <style>
        html {
            scroll-behavior: smooth;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iframe-container {
            text-align: center;
        }
    </style>
    <!-- template styles -->
    <link rel="stylesheet" href="assets/sass/main.css">
</head>

<body>
    <div class="page-wrapper">

        <?php include_once './utils/navigation.php' ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="page-header">
            <div class="page-header__bg" style="background-image:url('https://cms-pangalengan.desaumkm.com<?= $contact["data"]["attributes"]["slide_image"]["data"]["attributes"]["url"] ?>')" alt=""></div>
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li></li>
                    <li></li>
                    <li><span></span></li>
                </ul>
                <h2><?= $umkmName ?></h2>
            </div>
        </section>

        <section id="product-detail" class="product-details">
            <div class="container">
                <div class="product-detail__image">
                    <div class="product-detail__future-image"><img id="featureImage" class="future-image" src="https://cms-pangalengan.desaumkm.com<?= $featureImageProduct ?>" alt="produkUMKM"></div>

                    <div class="product-detail__list-image">
                        <?php foreach ($products['data']['attributes']['foto_produk']['data'] as $product) { ?>
                            <img class="" src="https://cms-pangalengan.desaumkm.com<?= $product['attributes']['url'] ?>" alt="produkUMKM" onclick="changeFeatureImage('<?= $product['attributes']['url'] ?>')">
                        <?php } ?>
                    </div>
                </div>
                <div class="product-detail__information">
                    <div>
                        <h1><?= $productName ?></h1>
                    </div>
                    <div>
                        <p><?= $rangeProductPrice ?></p>
                    </div>
                    <div>
                        <h1>Deskripsi Produk</h1>
                        <p><?= $productDescription ?></p>
                    </div>
                    <div>
                        <h1>Alamat UMKM</h1>
                        <p><?= $umkmAddress ?></p>
                    </div>
                    <!-- <div class="product-detail__marketplace">
                        <h1>Marketplace</h1>
                        <div class="product-detail__marketplace-list">
                            <a class="product-detail__marketplace-tokopedia" href="https://www.tokopedia.com/"><img src="assets/images/shopee-seeklogo.jpg" alt=""></a>
                            <a class="product-detail__marketplace-shopee" href="https://www.tokopedia.com/"><img src="assets/images/shopee-seeklogo.jpg" alt=""></a>
                        </div>
                    </div> -->
                </div>

            </div>

        </section>


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
    <script>
        const baseURL = "https://cms-pangalengan.desaumkm.com";

        function changeFeatureImage(imageUrl) {
            document.getElementById('featureImage').src = baseURL + imageUrl;
        }

        document.addEventListener("DOMContentLoaded", function() {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    changeFeatureImage(this.src);
                });
            });
        });
    </script>
</body>

</html>