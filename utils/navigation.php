<?php
$contact = get_data_api("https://cms-pangalengan.desaumkm.com/api/contact?populate=*");

$nohp_desaumkm = $contact["data"]["attributes"]["nohp_desaumkm"];
$nohp_desaumkm = str_replace("08", "+628", $nohp_desaumkm);

echo '<header class="main-header">
<nav class="main-menu">
    <div class="container">
        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="https://cms-pangalengan.desaumkm.com' . $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] . ' " width="80" alt=""></a>
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
            <a href="https://wa.me/'. $nohp_desaumkm . '" target="_blank" class="main-header__info-phone">
                <i class="agrikon-icon-phone-call"></i>
                <span class="main-header__info-phone-content">
                    <span class="main-header__info-phone-text">Hubungi kami</span>
                    <span class="main-header__info-phone-title">' . $contact["data"]["attributes"]["nohp_desaumkm"] . '</span>
                </span><!-- /.main-header__info-phone-content -->
            </a><!-- /.main-header__info-phone -->
        </div><!-- /.main-header__info -->
    </div><!-- /.container -->
</nav><!-- /.main-menu -->
</header><!-- /.main-header -->';
