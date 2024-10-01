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

        <title>Tentang Tejoku</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/tentang"><img src="{{ asset('assets/img/tejoku.png') }}" alt="Logo Tejoku" width="48px" loading="lazy"></a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/home" class="nav__link">
                                <i class="bx bx-home-alt"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/tentang" class="nav__link active-link">
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
                            <a href="/kontak" class="nav__link">
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
              <img src="{{ asset('assets/img/front.gif') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                <h2 class="islands__subtitle">Eksplore</h2>
                  <h1 class="islands__title">Tentang Tejoku</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <p>
                <h2 style="text-align: center;">Profil Tejoku</h2>
              </p>
              <img src="{{ asset('assets/img/tejoku.png') }}" alt="Seputar Desa" style="max-width: 290px; display: block; margin: 0 auto;" class="img-responsive">
              <h3 style="text-align: center; margin-top: 10px;">Tejoku UMKM Creative</h3>
              <h3 style="text-align: center; margin-top: 10px;">Empowering Local Businesses</h3>
              <h3 style="text-align: center; margin-top: 10px;"></h3>
              <p class="value__description">
                Tejoku adalah platform branding dan promosi kreatif untuk UMKM. Kami membantu usaha kecil menengah membangun identitas merek yang kuat dan menarik perhatian pasar luas. 
                Dengan Tejoku, Anda bisa mengoptimalkan strategi promosi dengan cara yang kreatif dan efektif. Tingkatkan visibilitas produk lokal Anda, dan raih kesuksesan lebih besar. 
                Tejoku, solusi branding cerdas untuk UMKM berkembang!
              </p>
              <p>
                <h2>Peta Desa Tejoku</h2>
              </p>
              <p>
                <div class="map-responsive">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.721511545299!2d111.48894601535258!3d-7.8689399943301565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a5278c0dc2ab%3A0x503e1f8e441c8a0!2sJosari%2C%20Tegalsari%2C%20Ponorogo%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1693215768000!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                </div>
              </p>
            </div>
            <div class="package-travel">
              <h3 style="margin-bottom: 1rem">Destinasi Populer</h3>
              <article class="popular__card">
                  <a href="/tegalsari">
                      <img
                          src="{{ asset('assets/img/tegal2.jpg') }}"
                          alt=""
                          class="popular__img"
                      />
                      <div class="popular__data">
                          <h3 class="popular__title">
                              Masjid Tegalsari
                          </h3>
                      </div>
                  </a>
              </article>
              <article class="popular__card">
                  <a href="/josari">
                      <img
                          src="{{ asset('assets/img/josari2.jpg') }}"
                          alt=""
                          class="popular__img"
                      />
                      <div class="popular__data">
                          <h3 class="popular__title">
                              Jenang Mirah
                          </h3>
                      </div>
                  </a>
              </article>
              <article class="popular__card">
                  <a href="/kutuwetan">
                      <img
                          src="{{ asset('assets/img/kutuwetan.jpg') }}"
                          alt=""
                          class="popular__img"
                      />
                      <div class="popular__data">
                          <h3 class="popular__title">
                              Petilasan Ki Ageng Kutu
                          </h3>
                      </div>
                  </a>
              </article>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="/home">
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
    <script>
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

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
