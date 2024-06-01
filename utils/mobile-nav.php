<?php
echo '<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

    <div class="logo-box">
        <a href="index.php" aria-label="logo image"><img src="https://cms-pangalengan.desaumkm.com' . $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] . '" width="120" alt=""></a>
    </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container">
        <div class="container">
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="https://cms-pangalengan.desaumkm.com' . $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] . '" width="120" alt=""></a>
                <span class="fa fa-bars mobile-nav__toggler"></span>
            </div><!-- /.logo-box -->
            <ul class="main-menu__list">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="umkm.php">UMKM</a>
                </li>
                <li>
                    <a href="gallery.php">Galeri</a>
                </li>
                <li>
                    <a href="contact.php">Kontak</a>
                </li>
            </ul>
            <!-- /.main-menu__list -->

            <div class="main-header__info">
                <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a>
                <a href="https://wa.me/' . $nohp_desaumkm . '" class="main-header__info-phone">
                    <i class="agrikon-icon-phone-call"></i>
                    <span class="main-header__info-phone-content">
                        <span class="main-header__info-phone-text">Hubungi kami</span>
                        <span class="main-header__info-phone-title">' . $contact["data"]["attributes"]["nohp_desaumkm"] . '</span>
                    </span><!-- /.main-header__info-phone-content -->
                </a><!-- /.main-header__info-phone -->
            </div><!-- /.main-header__info -->
        </div><!-- /.container -->
    </div>
    <!-- /.mobile-nav__container -->

    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="agrikon-icon-email"></i>
            <a href="mailto:' . $footer["data"]["attributes"]["email_desaumkm"] . '">' . $footer["data"]["attributes"]["email_desaumkm"] . '</a>
        </li>
        <li>
            <i class="agrikon-icon-telephone"></i>
            <a href="https://wa.me/' . $nohp_desaumkm . '">' . $contact["data"]["attributes"]["nohp_desaumkm"] . '</a>
        </li>
    </ul><!-- /.mobile-nav__contact -->
    <div class="mobile-nav__top">
        <div class="mobile-nav__social">
            <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
            <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
        </div><!-- /.mobile-nav__social -->
    </div><!-- /.mobile-nav__top -->



</div>
<!-- /.mobile-nav__content -->
</div>';
