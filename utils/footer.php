<?php
if (!isset($footer)) {
    $footer = get_data_api("https://cms-pangalengan.desaumkm.com/api/footer?populate=*");
}

echo '<footer class="site-footer">

<img src="assets/images/icons/footer-bg-icon-2.png" class="site-footer__shape-2" alt="">
<div class="container">
    <div class="footer">
        <div class="footer-main">
            <div class="footer-widget">
                <a href="index.html" class="footer-widget__Logo">
                    <img src="https://cms-pangalengan.desaumkm.com' . $footer["data"]["attributes"]["logo_desaumkm"]["data"]["attributes"]["url"] . '" width="40%" alt="">
                </a>
                <p class="description">' . $footer['data']['attributes']['deskripsi_desaumkm'] . '
                </p>
                <div class=""></div>
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                <div class="footer__social">
                    <a href="' . $footer['data']['attributes']['url_sosial_media'] . '" class="fab fa-instagram"></a>
                    <a href="' . $footer['data']['attributes']['url_sosial_media'] . '"><i class="fab fa-twitter"></i></a>
                    <a href="' . $footer['data']['attributes']['url_sosial_media'] . '"><i class="fab fa-facebook"></i></a>
                </div><!-- /.topbar__social -->
            </div><!-- /.footer-widget -->
        </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
        <div class="footer-secondary">
            <div style="padding: 0">
                <div class="footer-widget footer-widget__links-widget">
                    <h3 class="footer-widget__title">Menu</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
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
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->

            <div style="padding:0; width:100%;">
                <h3 class="footer-widget__title">Kontak</h3><!-- /.footer-widget__title -->
                <ul class="list-unstyled footer-widget__contact">
                    <li>
                        <i class="agrikon-icon-telephone"></i>
                        <a href="https://wa.me/' . $nohp_desaumkm . '" target="_blank">' . $footer["data"]["attributes"]["nohp_desaumkm"] . '</a>
                    </li>
                    <li>
                        <i class="agrikon-icon-email"></i>
                        <a href="#">' . $footer["data"]["attributes"]["email_desaumkm"] . '</a>
                    </li>
                    <li>
                        <i class="agrikon-icon-pin"></i>
                        <a href="#">' . $footer["data"]["attributes"]["alamat_desaumkm"] . '</a>
                    </li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</footer><!-- /.site-footer -->
<div class="bottom-footer">
<div class="container" style="justify-content:center;">
    <p>© Copyright 2023 by KoLab</p>
</div><!-- /.container -->
</div><!-- /.bottom-footer -->';
