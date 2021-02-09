<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking Covid-19</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset ('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Tracking<span>Covid-19</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="http://127.0.0.1:8000/">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{route('login')}}">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>TrackingCovid-19</spa>
        </h1>
        <h2>Coronavirus Indonesia & Global Live Data</h2>
        </div>
    </section>
  <!-- End Hero -->

  <main id="main">
    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="col text-center">
            <h4><p>Update terakhir : </p></h4>
        </div> <br>
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-plus"></i> <br>
              <h5><p>Positif</p></h5>  
              <span data-toggle="counter-up">232</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-heart-beat-alt"></i> <br>
              <h5><p>Sembuh</p></h5>
              <span data-toggle="counter-up">521</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-skull-danger"></i> <br>
              <h5><p>Meninggal</p></h5>
              <span data-toggle="counter-up">1,463</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-globe"></i> <br>
              <h5><p>Total Dunia</p></h5>
              <span data-toggle="counter-up">15</span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <h3>Berikut <span>Layanan</span></h3>
          <p>beberapa lembaga mengenai tentang coronavirus</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-out" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="https://www.unicef.org/indonesia/id/coronavirus">
                Novel Coronavirus (COVID-19)</a></h4>
              <p>Hal-hal yang perlu anda ketahui</p><br>
              <p>Unicef</p>
            </div>
          </div>

          <div class="col-lg-4 col-md d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-out" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
                Daftar Rumah Sakit</a></h4>
              <p>Daftar 100 rumah sakit di Indoneis rujukan penanganan virus corona</p><br>
              <p>Kompas</p>
            </div>
          </div>

          <div class="col-lg-4 col-md d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-out" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="https://infeksiemerging.kemkes.go.id/">
                Media Informasi</a></h4>
              <p>Media informasi resmi penyakit Infeksi Emerging</p><br>
              <p>Kementrian Kesehatan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Pertanyaan yang Sering <span>Dijawab</span></h3>
          <p>Berikut beberapa jawaban dari pertanyaan yang sering di tanya</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Apa itu Coronavirus atau Covid-19? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
              Virus korona adalah sebutan untuk jenis virus yang dapat menyebabkan penyakit pada hewan dan manusia. 
              Disebut korona karena bentuknya yang seperti mahkota (korona ~ crown = mahkota dalam bahasa Latin).
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Bagaimana COVID-19 menular? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Penularan terjadi melalui droplet (butir-butir tetesan cairan) dari hidung atau mulut yang menyebar saat pembawa virus COVID-19 batuk, bersin atau meler. 
                Tetesan cairan tersebut akan menempel pada benda atau permukaan di sekitarnya. Dan kemudian masuk ke mulut, hidung atau mata. 
                Atau menyentuh permukaan bekas terkena butir cairannya dengan tangan lalu tangan mengusap mulut, hidung atau mata. 
                Inilah alasan pentingnya sering-sering cuci tangan dan jangan menyentuh muka dengan tangan. <br>

                Orang sehat dapat tertular saat tangan mereka menyentuh permukaan yang terkena tetesan tersebut dan kemudian tanpa sadar menyentuh mata, 
                mulut, ataupun hidung (selaput lendir). Virus juga bisa masuk saat orang sehat secara tidak sengaja menghirup tetesan cairan saat si pembawa virus batuk atau bersin.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Kita harus bagaimana?  <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                  1. Ketika keluar rumah, pakailah masker. Jika bersin, tutup mulut dan hidung dengan tisu dan buang tisunya sesegera mungkin.  <br>
                  2. Rajinlah mencuci tangan dengan sabun atau pembersih tangan berbasis alkohol min. 60% <br>
                  3. Jaga jarak dengan orang yang tampak sakit sepanjang kurang lebih 1 meter <br>
                  4. Jika sakit, pastikan untuk tidak menyebarkan virus ke orang lain dengan mengurangi bepergian. 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Jika seseorang terinfeksi virus ini, berapa lama sampai muncul gejala? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
              Masa inkubasi (dari masuknya virus ke dalam tubuh sampai munculnya gejala awal) adalah 1 – 14 hari, dengan rata-rata timbulnya gejala selama 5 hari.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Seberapa banyak pasien yang akan mengalami gejala serius? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Dari data yang tersedia saat ini, kita belum bisa menyimpulkan secara persis seberapa parah wabah COVID-19 ini. 
                Tingkat keparahan dan mortalitas suatu wabah juga akan sangat tergantung pada kapasitas sistem kesehatan publik setempat dalam menangani kasus yang ada. 
                Namun, temuan awal mengindikasikan bahwa tingkat keparahan COVID-19 lebih rendah dibandingkan SARS. 
                Berdasarkan data dari 44 ribu pasien yang dirilis oleh Centre of Disease Control di Tiongkok, 
                proporsi pasien dengan gejala ringan/serius/kritis dan tingkat kematiannya adalah sebagai berikut: <br><br>
                -Gejala ringan seperti flu biasa: 81% (tingkat kematian: 0) <br>
                -Gejala lebih serius seperti sesak napas dan pneumonia (radang paru-paru): 14% (tingkat kematian: 0) <br>
                -Perlu masuk ICU dengan kondisi kritis karena gagal pernapasan, syok septik, dan gagal multi-organ: 5% (tingkat kematian: 50%)
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Apa yang harus saya sampaikan kepada tenaga medis jika saya batuk pilek demam dan sulit bernafas? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                1. Riwayat perjalanan (jika ada, ke Tiongkok atau negara-negara yang sudah terjangkit COVID-19, seperti Singapura, Jepang, Korea Selatan, dan Italia) <br>
                2. Kapan gejala mulai timbul <br> 
                3. Adakah kontak selama 14 hari terakhir dengan seseorang yang memiliki gejala pernapasan dan baru datang dari salah satu daerah yang ditemukan memiliki kasus COVID-19
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Kontak Kami</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jl. Situ Tarate</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>info@smkassalaambandung.sch.id</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Nomor Kami</h3>
              <p>022 5420-220</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://goo.gl/maps/o1csNgqLTSCNomgi8" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-8 footer-contact">
            <h3>Tracking<span>Covid-19</span></h3>
            <p>
              Jl. Situ Tarate, Cibaduyut Raya <br>
              Kec. Dayeuhkolot<br>
              Kabupaten Bandung <br><br>
              <strong>Phone:</strong> 022 5420-220<br>
              <strong>Email:</strong> info@smkassalaambandung.sch.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-8 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('FrontEnd.index') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">F.A.Q</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-8 footer-links">
            <h4>Media Sosial Kami</h4>
            <p>Ini dianatara nya media sosial kami</p>
            <div class="social-links mt-6">
              <a href="https://www.facebook.com/smkassalaam/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/smkassalaam/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://twitter.com/smkassalaam/" class="twitter"><i class="bx bxl-twitter"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>TrackingCovid-19</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://smkassalaambandung.sch.id/">SMK ASSALAAM BANDUNG</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('assets/js/main.js') }}"></script>

</body>

</html>