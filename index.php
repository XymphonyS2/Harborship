<?php
require_once "./actions/c-cari.php";

if (empty($_SESSION['harborship'])) {
    header('location: login.php');
}

$page = empty($_GET['page']) ? "cari" : $_GET['page'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="referrer" content="origin-when-cross-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Harborship</title>
    <meta name="keywords" content="Website Awards, Web Design Inspiration, Webdesign Trends" />
    <meta property="og:site_name" content="Awwwards" />
    <meta property="og:image" content="https://assets.awwwards.com/assets/images/pages/about-certificates/awwwards.jpg" />
    <meta property="og:title" content="Awwwards - Website Awards - Best Web Design Trends" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.awwwards.com/" />
    <meta property="og:description"
        content="Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world." />
    <meta name="description"
        content="Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world." />
    <link rel="canonical" href="https://www.awwwards.com/" />
    <link rel="icon" href="./assets/img/favicon.svg" type="image/svg+xml" />
    <link rel="mask-icon" href="https://assets.awwwards.com/assets/images/favicon-safari.svg" color="#000000" />
    <link rel="apple-touch-icon" href="https://www.awwwards.com/apple-touch-icon.png" />
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-light-pro.woff2" as="font"
        crossorigin />
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-regular-pro.woff2" as="font"
        crossorigin />
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-bold-pro.woff2" as="font"
        crossorigin />
    <link rel="stylesheet" href="./assets/css/syarat/syarat.css" />
    <link rel="stylesheet" href="./assets/css/port.css" />
    <link rel="stylesheet" href="./assets/css/syarat/syarat.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://assets.awwwards.com/assets/redesign/css/home.css?v=1.99" />
</head>

<body class="has-header-above has-content-header">
    <div class="eu-location" data-eu="0"></div>
    <div class="wrapper">
        <header id="header" data-controller="search" data-search-url-value="tv_search_inspiration"
            data-search-selected-type-value="inspiration">
            <div class="inner">
                <div class="c-header-main">
                    <div class="header-main" data-search-target="headerMain">
                        <div class="header-main__container" style="justify-content: space-between; ">
                            <a href="/" class="header-main__logo" aria-label="Awwwards"
                                style="width: 10%; height: 10%; margin-top: -50px;">
                                <img src="./assets/img/ProyekBaru.svg" alt="logo">
                            </a>
                            <div class="header-main__right" style="text-align: right;">
                                <div class="header-main__user">
                                    <strong class="header-main__link hidden-sm"><a href="./logout.php"><?= $_SESSION['harborship']['nama_lengkap'] ?></a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="content" style="padding-bottom: -20%;">
            <div class="anchor-section" id="sotd">
                <div class="content-header" style="padding-bottom: 5px"></div>
            </div>

            <?php
            if (empty($_GET['page'])) {
                include 'cari.php';
            } else {
                include $page . ".php";
            }
            ?>

        </section>

        <footer id="footer">
            <div class="footer__bottom" style="margin-bottom: -0px; margin-top: 5%;">
            </div>
            <div class="inner">
                <div class="footer__top">
                    <div class="footer__wrapper">
                        <div class="footer__grid">
                            <a href="./homepage.html" class="footer__logo footer__logo--small">
                                <img src="./assets/img/ProyekBaru.svg" alt="hi" style="width: 90%; height: 90%;">
                            </a>
                            <ul class="footer__menu">
                                <li><span>Kontak Kami</span></li>
                                <li><a style="font-weight: lighter;" href="tel:(021) 191" target="_blank">Call Center</a></li>
                                <li><a style="font-weight: lighter;" href="https://wa.me/+6282181512200" target="_blank">Whatsapp</a></li>
                                <li><a style="font-weight: lighter;" href="mailto:cs@harborship.co.id">Email</a></li>
                            </ul>
                            <ul class="footer__menu">
                                <li><span>Ikuti Kami</span></li>
                                <li><a style="font-weight: lighter;" href="https://www.facebook.com/himatro.unila?mibextid=ZbWKwL"
                                        target="_blank">Facebook</a></li>
                                <li><a style="font-weight: lighter;"
                                        href="https://www.instagram.com/hafizxymphony/profilecard/?igsh=NnhjbHJxc204cDc5"
                                        target="_blank">Instagram</a>
                                </li>
                                <li><a style="font-weight: lighter;" href="https://www.youtube.com/@HimatroTV" target="_blank">Youtube</a>
                                </li>
                            </ul>
                            <ul class="footer__menu">
                                <li><span rel="nofollow">Dukungan</span></li>
                                <li><a style="font-weight: lighter;" href="tel:(021) 191" target="_blank">Syarat & Ketentuan</a></li>
                                <li><a style="font-weight: lighter;" href="https://wa.me/+6282181512200" target="_blank">Kebijakan
                                        Privasi</a></li>
                                <li><a style="font-weight: lighter;" href="./golkendaraan.html">Golongan Kendaraan</a></li>
                            </ul>
                        </div>
                        <div class="box-featured" style="margin-right: 3%;">
                            <div class="box-featured__content">
                                Get It On
                                <svg class="ico-svg box-featured__m" viewbox="0 0 20 20" width="20">
                                    <use xlink:href="https://www.awwwards.com/assets/redesign/images/sprite-icons.svg?v=11-2024#calendar">
                                    </use>
                                </svg>

                                <strong><a href="https://play.google.com/store/apps/details?id=com.tencent.ig"
                                        class="link-underlined">Google Play</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://assets.awwwards.com/dist/js/runtime.d9fe9b44.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/5716.3c7fee44.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/188.68d847a8.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/9755.1603470d.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/9521.4ec1ad74.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/9805.824771e4.js" defer></script>
        <script src="https://assets.awwwards.com/dist/js/home_homepage.4831587d.js" defer></script>


</body>

</html>