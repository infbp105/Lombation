<?php include 'fungsi/config.php'; ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Lombation</title>
    <meta content="Website Penyedia Informasi Terkait Lomba" name="description" />
    <meta content="lomba, info lomba, informasi lomba, kumpulan lomba, kategori lomba, media lomba, kompetisi, kompetisi lomba" name="keywords" />

    <!-- Favicons -->
    <link href="assets-user/img/lombation.png" rel="icon" />
    <link href="assets-user/img/lombation.png" rel="apple-touch-icon" />

    <!-- Google Fonts - Open Sans, Josh, Poppins-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Josh:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets-user/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets-user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets-user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets-user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets-user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets-user/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File - Letak file css nya -->
    <link href="assets-user/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- di class a ada me-auto-->
        <a href="beranda.php" class="logo"><img src="assets-user/img/lombation.png" alt="" class="img-fluid" /></a>
        <h1 class="logo me-auto"><a href="beranda.php">Lombation</a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="beranda.php">Beranda</a></li>
            <li class="dropdown">
              <a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="website.html">Website</a></li>
                <li><a href="team.html">Tim</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
            <li><a class="nav-link scrollto" href="kontak.php">Kontak</a></li>
            <li class="dropdown">
              <a class="getstarted scrollto" href="#">Akun</a>
              <ul>
                <li><a href="masukkan-lomba.php">Masukkan Lomba</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container"> 
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center"> <!-- Buat pembagian size nya -->
          <div data-aos="zoom-out">
            <h1>Cari Lomba bersama Lomba<span>tion</span></h1>
            <h2>Website penyedia informasi berbagai lomba yang bisa dicari dengan mudah!</h2>
            <h2>Klik <strong>"Cari Lomba"</strong> untuk memulai pencarian dan <strong>"Masukkan Lomba"</strong> untuk promosikan lombamu di <strong>Lombation</strong>!</h2>
            <div class="text-center text-lg-start margin-bottom">
              <a href="#portfolio" class="btn-get-started scrollto">Cari Lomba</a>
            </div>
          </div>
        </div>  
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300"> 
          <img src="assets-user/img/piala.png" class="img-fluid animated" alt="">      
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#f3f5fa">
      </g>
    </svg>

  </section><!-- End Hero -->

    <main id="main">
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Lomba</h2>
          <p></p>
        </div>

        <div id="lomba" class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div class="search justify-content-center">
              <input class="align-items-center" type="text" name="" id="find" placeholder="Cari lomba disini..." onkeyup="search()" />
          </div>
          <div class="search justify-content-center"> 
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-desain-website">Desain Website</li>
              <li data-filter=".filter-video">Video</li>
              <li data-filter=".filter-foto">Foto</li>
              <li data-filter=".filter-poster">Poster</li>
              <li data-filter=".filter-esai">Esai</li>
              <li data-filter=".filter-bussiness-plan">Bussiness Plan</li>
            </ul>
          </div>

          <div  class="row gy-4 portfolio-container">

            <?php $data = tampilLomba(); foreach($data as $row): ?>
            <div class="col-xl-3 col-md-4 portfolio-item filter-desain-website">
              
              <div class="portfolio-wrap">
                <a href="img/<?= $row['poster'] ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img width="800px" height="800px" src="img/<?= $row['poster'] ?>"></a>
                <div class="portfolio-info">
                  <h4><a href="detail.php?id=<?= $row['id'] ?>">
					            <?= $row['judul'] ?>
				          </a></h4>
                <div class="entry-meta">
                  <li class="d-flex align-items-center margintop"> <i class="bi bi-calendar-event"></i> <a href="#">Batas Pendaftaran <?= $row['deadline'] ?></a></li>
                  <li class="d-flex align-items-center margintop"><i class="bi bi-person"></i> <a href="#"><?= $row['penyedia'] ?></a></li>
              
                  <ul>
                    <li class="d-flex align-items-center margintop"><i class="bi bi-tags"></i> <a href="#"><?= $row['bidang'] ?></a></li>
                    <li class="d-flex align-items-center margintop"><i class="bi bi-chat-dots"></i> <a href="#"><?= jumlahKomentar($row['id']) ?>  Komentar</a></li>
                  </ul>
  
                  
                  
                </div>
                  <!-- <a href="editLomba.php?id=<?= $row['id'] ?>">
					<i class="glyphicon glyphicon-edit"></i>
				</a>
				<a href="hapusLomba.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">
					<i class="glyphicon glyphicon-trash"></i>
				</a> -->
                </div>
              </div>
              
            </div><!-- End Portfolio Item -->
          <?php endforeach ?>
      </div>
    </section><!-- End Portfolio Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-12 footer-contact">
              <h3>Lombation</h3>
              <p>
                Website penyedia informasi terkait lomba yang bertujuan agar pengguna mudah dalam mencari lomba yang diinginkan, yang bisa mencari lomba berdasarkan klasifikasi dan juga bisa menambahkan informasi lomba secara gratis untuk
                dilihat oleh pengguna lain.<br />
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/lombation" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCskdnv79N5PqU_9hNKS5KiQ" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://instagram.com/lombation" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
              </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Kategori</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#lomba">Desain Website</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#lomba">Video</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#lomba">Foto</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#lomba">Poster</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#lomba">Dan lain-lain</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Link Tautan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="website.html">Tentang Website</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="team.html">Tentang Tim</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="faq.html">FAQ</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="kontak.php">Kontak</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-contact">
              <h4>Kontak Kami</h4>
              <p>
                Jl. Kumbang No.14, Babakan<br />
                Kecamatan Bogor Tengah<br />
                Kota Bogor, Jawa Barat 16128<br />
                Indonesia <br />
                <br />
                <strong>Telepon:</strong> +62851-7311-3736<br />
                <strong>Email:</strong> lombation@gmail.com<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; <strong><span>Lombation</span> 2022</strong>. Hak Cipta Dilindungi
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Desain oleh <a href="team.html">Tim Pengembang Lombation</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets-user/vendor/aos/aos.js"></script>
    <script src="assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets-user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-user/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets-user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets-user/js/main.js"></script>

    <script type="text/javascript">
      function search() {
        let filter = document.getElementById("find").value.toUpperCase();
        let item = document.querySelectorAll(".portfolio-wrap");
        let l = document.getElementsByTagName("h4");
        for (var i = 0; i <= l.length; i++) {
          let a = item[i].getElementsByTagName("h4")[0];
          let value = a.innerHTML || a.innerText || a.textContent;
          if (value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.display = "";
          } else {
            item[i].style.display = "none";
          }
        }
      }
    </script>
  </body>
</html>
