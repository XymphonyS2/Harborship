<?php
require_once "./actions/c-cari.php";

if (empty($_SESSION['harborship'])) {
  header('location: login.php');
}
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


  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    // gtag('consent', 'default', {
    //     'ad_storage': 'denied',
    //     'analytics_storage': 'denied'
    // });
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-PXD9JT");
  </script>
  <!-- End Google Tag Manager -->
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
                <img src="./assets/img/ProyekBaru.svg" alt="logo" >
              </a>
              <div class="header-main__right" style="text-align: right;">
                <div class="header-main__user">
                  <strong class="header-main__link hidden-sm" data-controller="login"
                    data-action="click->login#register">Muhammad Hafiz Assyifa</strong>
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

      <main class="container py-4" style=" min-width: 1200px; max-width: 1200px;">
        <div class="search-container" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
          <h4 class="mb-4">Cari Tiket Anda</h4>
          
          <form method="POST">
              <!-- First Row -->
              <div class="row mb-3">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Pelabuhan Asal</label>
                      <select class="form-select">
                          <option>Pilih Asal</option>
                      </select>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Pelabuhan Tujuan</label>
                      <select class="form-select">
                          <option>Pilih Tujuan</option>
                      </select>
                  </div>
              </div>

              <!-- Second Row -->
              <div class="row mb-3">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Kelas Layanan</label>
                      <select class="form-select">
                          <option>Pilih Layanan</option>
                      </select>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Jenis Pengguna Jasa</label>
                      <select class="form-select">
                          <option>Pilih Jenis Pengguna</option>
                      </select>
                  </div>
              </div>

              <!-- Third Row -->
              <div class="row mb-3">
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Jadwal Masuk Pelabuhan</label>
                      <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label class="form-label">Pilih Jam</label>
                      <input type="text" class="form-control" placeholder="--:--">
                  </div>
              </div>

              <div class="row mb-4">
                  <div class="col-md-3 mb-3">
                      <label class="form-label">Jumlah Lansia</label>
                      <input type="number" class="form-control" value="0" min="0">
                  </div>
                  <div class="col-md-3 mb-3">
                      <label class="form-label">Jumlah Dewasa</label>
                      <input type="number" class="form-control" value="0" min="0">
                  </div>
                  <div class="col-md-3 mb-3">
                      <label class="form-label">Jumlah Anak</label>
                      <input type="number" class="form-control" value="0" min="0">
                  </div>
                  <div class="col-md-3 mb-3">
                      <label class="form-label">Jumlah Bayi</label>
                      <input type="number" class="form-control" value="0" min="0">
                  </div>
              </div>

            <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" style="max-width: 400px;">CARI JADWAL</button>
                    </div>
                </div>
          </form>
      </div>
      </main>

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

  <script type="application/ld+json">
        {
          "@context": "https:\/\/schema.org",
          "@type": "Organization",
          "name": "Awwwards",
          "url": "https:\/\/www.awwwards.com",
          "logo": "https:\/\/assets.awwwards.com\/assets\/images\/logo-schema.png",
          "sameAs": [
            "https:\/\/www.facebook.com\/awwwards\/",
            "https:\/\/twitter.com\/awwwards",
            "https:\/\/www.youtube.com\/channel\/UCYWGYef22gx8PaXZMLHAQsw",
            "https:\/\/www.instagram.com\/awwwards\/",
            "https:\/\/www.linkedin.com\/company\/awwwards",
            "https:\/\/www.pinterest.es\/awwwardscom\/"
          ]
        }
      </script>
  <script>
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src =
      "https://www.google.com/recaptcha/api.js?render=6LdYct0kAAAAAHlky5jhQhrvSRt_4vOJkzbVs2Oa";
    script.async = true;
    document.body.appendChild(script);
  </script>

  <!-- Modal for passenger selection -->
  <div class="modal fade" id="passengerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passengerModalLabel">Penumpang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Dewasa (Usia 5 th keatas)</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button">-</button>
              <input type="text" class="form-control text-center" value="0" readonly>
              <button class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Lansia (Usia 60 th keatas)</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button">-</button>
              <input type="text" class="form-control text-center" value="0" readonly>
              <button class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Anak (Usia 2-5 th)</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button">-</button>
              <input type="text" class="form-control text-center" value="0" readonly>
              <button class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Bayi (Di bawah 2 th)</label>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button">-</button>
              <input type="text" class="form-control text-center" value="0" readonly>
              <button class="btn btn-outline-secondary" type="button">+</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Selesai</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>