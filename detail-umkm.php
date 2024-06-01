<?php
require_once 'utils/curl.php';
$umkms = get_data_api('https://cms-pangalengan.desaumkm.com/api/umkms?populate=*');
$contact = get_data_api('https://cms-pangalengan.desaumkm.com/api/contact?populate=*');
$produks = get_data_api('https://cms-pangalengan.desaumkm.com/api/produks?populate=*');
$footer = get_data_api("https://cms-pangalengan.desaumkm.com/api/footer?populate=*");




if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];
    foreach ($umkms['data'] as $umkm) {
        if ($umkm['id'] == $requestedId) {

            $namaUmkm = $umkm['attributes']['nama_umkm'];
            $tahunberdiri = $umkm['attributes']['tahun_berdiri_umkm'];
            $kategori = $umkm['attributes']['kategoris']['data']['attributes']['nama_kategori'];
            $foto_umkm = $umkm['attributes']['profile_picture_umkm'];
            $alamat = $umkm['attributes']['alamat_umkm'];
            $visi = $umkm['attributes']['visi_umkm'];
            $misi = $umkm['attributes']['misi_umkm'];
            $deskripsiUmkm = $umkm['attributes']['deskripsi_umkm'];
            $pemilikUmkm = $umkm['attributes']['pemilik_umkm'];
            $video = $umkm['attributes']['url_video_profile'];
            $sosialMedia = $umkm['attributes']['url_socialmedia_umkm'];
            $marketplace = $umkm['attributes']['url_marketplace'];
            $noHpUmkm = $umkm['attributes']['nohp_umkm'];

            break;
        }
    }
} else {
    echo "ID umkm tidak ada di cms";
}

$umkmId = isset($_GET['id']) ? intval($_GET['id']) : 0;


$filteredProducts = [];


foreach ($produks['data'] as $produk) {
    if (isset($produk['attributes']['umkm']['data']['id']) && $produk['attributes']['umkm']['data']['id'] == $umkmId) {
        $filteredProducts[] = $produk;
    }
}

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Red+Hat+Display:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/produk.css">
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

    <style>
        html {
            scroll-behavior: smooth;
        }

        .list-group .list-group-item.active {
            background-color: #255946;
            border: #255946;
        }

        .list-group .list-group-item {
            color: #255946;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iframe-container {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        img {
            display: block;
        }

        /* Header Styles */
        .header-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 100px;
            gap: 30px;
            width: 60%;
        }

        .header-image {
            width: 285px;
            height: 200px;
            object-fit: cover;
            border-radius: 0;
        }

        .header-details {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .header-title {
            font-weight: bold;
            font-size: 32px;
        }

        .header-subtitle {
            font-weight: light;
            font-size: 20px;
        }

        .header-links {
            display: flex;
            flex-direction: row;
            gap: 16px;
            width: 100%;
            margin: 0;
        }

        .link-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-weight: bold;
            font-size: 14px;
            border-radius: 4px;
        }

        .whatsapp-link {
            width: 50%;
        }

        .whatsapp-content {
            background-color: #255946;
            color: white;
            justify-content: space-evenly;
        }

        .detail-link {
            width: 50%;
        }

        .detail-content {
            border: 1px solid #255946;
            color: #255946;
            height: 100%;
            justify-content: end;
        }

        .detail-text {
            width: 100%;
            text-align: center;
        }

        .expand-icon-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-color: #255946;
            width: 52px;
            border-radius: 2px;
        }

        .icon {
            width: 24px;
            height: 24px;
        }

        /* Content Styles */
        .content-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            width: 100%;
            gap: 20px;
            margin-top: 40px;
        }

        /* Product Styles */
        .products-container {
            grid-column: 2 / span 3;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 100%;
            gap: 14px;
        }

        .product-card {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 12px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .products-container h3.product-title {
            margin: auto;
            font-size: 20px;
            text-align: center;
            padding: 20px;
        }

        /* List Group Styles */
        .list-group-item {
            cursor: pointer;
        }

        .list-group-item.active {
            background-color: #007bff;
            color: white;
        }

        .p-6 {
            padding: 6px !important;
        }

        /* Media Queries */

        /* Medium */
        @media (max-width: 1200px) {
            .header-container {
                gap: 20px;
                width: 80%;
            }
        }

        /* Small */
        @media (max-width: 992px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
                width: 100%;
            }

            .header-image {
                width: 100%;
                height: 200px;
                object-fit: cover;
                border-radius: 12px;
            }

            .header-details {
                width: 100%;
            }

            .header-title {
                font-size: 24px;
            }

            .header-subtitle {
                font-size: 16px;
            }

            .header-links {
                gap: 10px;
            }

            .link-content {
                font-size: 12px;
            }

            .whatsapp-link {
                width: 100%;
            }

            .detail-link {
                width: 100%;
            }

            .products-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Small */
        @media screen and (max-width: 768px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
                grid-column: 1;
            }

            .content-container {
                grid-template-columns: 1fr;
            }
        }

        /* Extra Small */
        @media screen and (max-width: 576px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
                grid-column: 1;
                gap: 18px;
            }

            .content-container {
                grid-template-columns: 1fr;
            }

            .product-card h3.product-title {
                font-size: 16px;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .product-card img.product-image {
                height: 150px;
            }
        }
    </style>
    <!-- template styles -->
    <link rel="stylesheet" href="assets/sass/main.css">
</head>

<body>
    <div class="page-wrapper">

        <?php include_once './utils/navigation.php' ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="project-details">
            <div class="container" style="gap: 40px;">
                <!-- Header -->
                <div class="header-container">
                    <img src="https://cms-pangalengan.desaumkm.com<?= $foto_umkm['data']['attributes']['url'] ?>" alt="Image 1" class="header-image">
                    <div class="header-details">
                        <h1 class="header-title"><?= $namaUmkm ?></h1>
                        <h2 class="font-weight-light" style="font-size: 20px;">Sejak <?= $tahunberdiri ?></h2>
                        <div class="header-links">
                            <a href="https://wa.me/<?= $nohp_desaumkm ?>" class="whatsapp-link">
                                <div class="link-content whatsapp-content p-6">
                                    <img src="./assets/images/icons/whatsapp.png" alt="Whatsapp" class="icon">
                                    <span>Whatsapp</span>
                                </div>
                            </a>
                            <a href="./detail.php?id=<?= $umkmId ?>" class="detail-link">
                                <div class="link-content detail-content">
                                    <span class="detail-text">Detail UMKM</span>
                                    <div class="expand-icon-container">
                                        <img src="./assets/images/icons/Expand_right.png" alt="Expand" class="icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="content-container">
                    <!-- Category Box -->
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                        <a class="list-group-item" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                        <a class="list-group-item" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                        <a class="list-group-item" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>

                    <!-- Products -->
                    <div class="products-container">
                        <?php foreach ($filteredProducts as $product) { ?>
                            <div class="product-card">
                                <a href="detail-product.php?id=<?= $product['id']?>">
                                    <img src="https://cms-pangalengan.desaumkm.com<?= $product['attributes']['foto_produk']['data'][0]['attributes']['url'] ?>" alt="<?= $product['attributes']['nama_produk'] ?>" class="product-image">
                                    <h3 class="product-title"><?= $product['attributes']['nama_produk'] ?></h3>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>


            </div><!-- /.container -->
        </section><!-- /.project-details -->

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