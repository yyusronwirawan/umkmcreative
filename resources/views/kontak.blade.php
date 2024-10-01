<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <link rel="shortcut icon" href=" {{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href=" {{ asset('assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <title>Kontak Tejoku</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/kontak"><img src="{{ asset('assets/img/tejoku.png') }}" alt="Logo Tejoku" width="48px" loading="lazy"></a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/home" class="nav__link">
                                <i class="bx bx-home-alt"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/tentang" class="nav__link">
                                <i class="bx bx-map-alt"></i>
                                <span>Tentang</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/desa_umkm" class="nav__link">
                                <i class="bx bx-building-house"></i>
                                <span>Umkm Desa</span>
                            </a>
                            </li>
                        <li class="nav__item">
                        <a href="/galeri" class="nav__link">
                            <i class="bx bx-images"></i>
                            <span>Galeri</span>
                        </a>
                        </li>
                        <li class="nav__item">
                            <a href="/kontak" class="nav__link  active-link">
                                <i class="bx bx-info-circle"></i>
                                <span>Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- theme -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>

            </nav>
        </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/tegal2.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Eksplore</h2>
                  <h1 class="islands__title">Desa Tegalsari</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/kutuwetan.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Eksplore</h2>
                  <h1 class="islands__title">Desa Kutuwetan</h1>
                </div>
              </div>
            </section>

            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
              <img src="{{ asset('assets/img/josari2.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Eksplore</h2>
                  <h1 class="islands__title">Desa Josari</h1>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
            <img
              src="{{ asset('assets/img/tegal2.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/kutuwetan.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
            <img
              src="{{ asset('assets/img/josari2.jpg') }}"
              alt=""
              class="controls__img swiper-slide"
            />
          </div>
        </div>
      </section>

            <!-- contact -->
            <!--==================== CONTACT ====================-->
            <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                        <div>
                        <img src="{{ asset('assets/img/tejoku.png') }}" alt="Seputar Desa" style="max-width: 290px; display: block; margin: 0 auto;" class="img-responsive">
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <span class="section__subtitle">Kontak Kami</span>
                            <h2 class="section__title">
                                Jangan ragu untuk menghubungi kami
                            </h2>
                            <p class="contact__description">
                                Berikut merupakan kontak dari umkm tejoku
                                yang dapat anda hubungi.
                            </p>
                        </div>

                        <div class="contact__card">
                            <a href="https://maps.app.goo.gl/bM3Hxj3weFHJwYuV9" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-map"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Alamat
                                        </h3>
                                        <p class="contact__card-description">
                                            Jetis, Ponorogo, Jawa Timur 63473
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="tel:+6285319093803" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxs-phone-call"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Telepon
                                        </h3>
                                        <p class="contact__card-description">
                                            085319093803
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://web.facebook.com/" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxl-facebook"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Facebook
                                        </h3>
                                        <p class="contact__card-description">
                                            
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://www.instagram.com/" class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class="bx bxl-instagram-alt"></i>
                                    <div>
                                        <h3 class="contact__card-title">
                                            Instagram
                                        </h3>
                                        <p class="contact__card-description">
                                            
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="/kontak">
                    <img src="{{ asset('assets/img/tejoku.png') }}" alt="Seputar Desa" style="max-width: 150px; margin-right: 20px;" class="img-responsive">
                    </a>
                    <p class="footer__description" style="text-align: justify;">
    Tejoku merupakan situs resmi yang mencakup Desa Tegalsari,<br />
    Desa Josari, dan Desa Kutu Wetan, sebagai media promosi potensi<br />
    wisata dan budaya lokal.
</p>

                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Tentang Kami</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="/tentang" class="footer__link">About us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Eksplore</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="/desa_umkm" class="footer__link">Destinasi Populer</a>
                            </li>
                    </div>
                    <div>
                        <h3 class="footer__title">Hubungi Kami</h3>

                        <ul class="footer__links">
                            <li>
                            <a href="tel:+6285319093803" class="footer__link">+6285319093803</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="https://www.youtube.com/" class="footer__social-link">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; <a href="https://umkm.tejoku.co.id">UMKM Tejoku 2024.</a> All rights reserved
                </span>
                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-chevrons-up"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('assets/libraries/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('assets/libraries/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        var gallerySwiper = new Swiper('.popular__container.gallery', {
            spaceBetween: 32,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var umkmSwiper = new Swiper('.popular__container:not(.gallery)', {
            spaceBetween: 32,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 0,
      });

      let galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        loop: true,

        thumbs: {
          swiper: galleryThumbs,
        },
      });
    </script>
</body>
</html>