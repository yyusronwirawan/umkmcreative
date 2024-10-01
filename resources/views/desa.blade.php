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

        <title>UMKM Desa Tejoku</title>
    </head>

    <style>
    /* Section title */
    .section-title {
        font-size: 18px;
        color: #1f2f70;
        margin-bottom: 20px;
    }

    /* Category and tag sections */
    .category-section, .tag-section {
        margin-bottom: 20px;
    }

    /* List styles */
    .category-list, .tag-list {
        list-style: none;
        padding-left: 0; /* Hilangkan padding default */
        margin-left: 0; /* Hilangkan margin default */
    }

    /* List item styles */
    .category-list li {
        font-size: 14px;
        margin-bottom: 5px;
        padding: 5px 10px;
        transition: box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: transparent; /* Background tetap putih */
        cursor: pointer;
    }

    /* Shadow effect and text color change on hover for categories */
    .category-list li:hover {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Efek shadow */
    }

    /* Bold text for count in list items */
    .category-list li span {
        font-weight: bold;
        font-size: 14px;
        color: #1f2f70;
    }

    /* Tag styles */
    .tag-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tag {
        background-color: #F5F7FD;
        padding: 10px 15px;
        border-radius: 30px;
        font-size: 14px;
        color: #0F0B2D;
        white-space: nowrap;
        transition: box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    }

    /* Shadow effect, background color, and text color change on hover for tags */
    .tag:hover {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #6440FB; 
        color: #FFFFFF; 
    }

    /* Dark mode styles for tags */
    .dark-theme .tag {
        background-color: #1e2029;
        color: #acafb9;
    }

    .dark-theme .tag:hover {
        background-color: #6440FB;
        color: #ffffff;
    }

    /* Dark mode styles for categories */
    .dark-theme .category-list li span {
        color: #acafb9; /* Warna teks pada nomor 1, 2, 3 dalam mode gelap */
    }
</style>

    
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/desa_umkm"><img src="{{ asset('assets/img/tejoku.png') }}" alt="Logo Tejoku" width="48px" loading="lazy"></a>

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
                            <a href="/desa_umkm" class="nav__link active-link">
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

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <p>
                UMKM di Kecamatan Jetis, Kabupaten Ponorogo, memiliki karakteristik yang unik di setiap desanya.
              </p>
              <p>
                Desa Tegalsari dikenal dengan objek wisata Masjid Tegalsari, yang menjadi daya tarik wisata religi. UMKM di desa ini bergerak di sektor pariwisata, pengrajin oleh-oleh khas dan jasa wisata. 
              </p>
              <p>
                Desa Kutuwetan menonjol dengan kesenian Reog Ponorogo yang sudah mendunia. UMKM di desa ini berkembang di bidang seni budaya dan kerajinan tangan terkait Reog, seperti pembuatan topeng, kostum, dan suvenir Reog. 
              </p>
              <p>
                Desa Josari terkenal dengan produk khasnya yaitu Jenang Mirah. UMKM lokal di desa ini memproduksi jenang yang telah menjadi ciri khas dan oleh-oleh khas Ponorogo, yang terkenal dengan cita rasa manis dan tekstur lembutnya. 
              </p>
              <p>
                Masing-masing desa memiliki potensi UMKM yang mendukung perekonomian lokal, dengan fokus pada produk dan jasa yang berbasis budaya serta kearifan lokal.
              </p>
            </div>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Category Section -->
                        <section class="category-section">
                            <h3 class="footer__title">Kategori</h3>
                            <ul class="category-list">
                                <li>Wisata Edukasi<span>(1)</span></li>
                                <li>Wisata Religi<span>(2)</span></li>
                                <li>Wisata Budaya<span>(1)</span></li>

                            </ul>
                        </section>

                        <!-- Tag Section -->
                        <section class="tag-section">
                            <h3 class="footer__title">Tag</h3>
                            <div class="tag-list">
                                <span class="tag">#Tourism</span>
                                <span class="tag">#Village</span>
                                <span class="tag">#Smart City</span>
                                <span class="tag">#Tegalsari</span>
                                <span class="tag">#Josari</span>
                                <span class="tag">#Kutu Wetan</span>
                            </div>
          </div>
        </div>
      </section>

      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center"
            >Pilihan Favorit</span
          >
          <h2 class="section__title" style="text-align: center">
          Destinasi Populer
          </h2>

          <div class="popular__container swiper">
            <div class="swiper-wrapper">
                <article class="popular__card swiper-slide">
                    <a href="#">
                        <img
                            src="{{ asset('assets/img/tegal2.jpg') }}"
                            alt=""
                            class="popular__img"
                        />
                        <div class="popular__data">
                          <h3 class="popular__title">
                              Masjid Tegalsari
                          </h3>
                          <p class="popular__description">Masjid Tegalsari adalah salah satu masjid tertua di Indonesia yang didirikan sekitar abad ke-18. Masjid ini terletak di desa Tegalsari, kecamatan Jetis, kabupaten Ponorogo. Masjid ini merupakan peninggalan Kyai Ageng Hasan Besari, seorang ulama besar yang hidup sekitar tahun 1742 pada zaman pemerintahan Pakubuwono II.</p>
                        </div>
                    </a>
                </article>
                <article class="popular__card swiper-slide">
                    <a href="#">
                        <img
                            src="{{ asset('assets/img/kutuwetan.jpg') }}"
                            alt=""
                            class="popular__img"
                        />
                        <div class="popular__data">
                          <h3 class="popular__title">
                          Petilasan Ki Ageng Kutu
                          </h3>
                          <p class="popular__description">Petilasan Ki Ageng Kutu adalah situs sejarah di Jawa yang diyakini sebagai tempat pertapaan tokoh legendaris Ki Ageng Kutu, seorang bangsawan dan guru spiritual. Ia dikenal karena perannya dalam melawan ketidakadilan pada masa Majapahit.</p>
                        </div>
                    </a>
                </article>
                <article class="popular__card swiper-slide">
                    <a href="#">
                        <img
                            src="{{ asset('assets/img/josari2.jpg') }}"
                            alt=""
                            class="popular__img"
                        />
                        <div class="popular__data">
                          <h3 class="popular__title">
                              Jenang Mirah
                          </h3>
                          <p class="popular__description">Jenang Miraah Ponorogo adalah makanan tradisional khas Ponorogo yang terbuat dari bahan dasar beras ketan. Jenang ini memiliki tekstur lengket dan kenyal dengan cita rasa manis, biasanya dicampur dengan santan dan gula merah. Proses pembuatannya memakan waktu lama karena harus diaduk secara terus menerus hingga matang.</p>
                        </div>
                    </a>
                </article>
            </div>
            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
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
