<?php
include 'fungsi/functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO pesan VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $notelp, $pesan]);
    // Output message
    $msg = 'Pesan berhasil terkirim!';
}
?>

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
    <link href="assets-user/css/style-kontak.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex align-items-center">
        <!-- di class a ada me-auto-->
        <a href="beranda.php" class="logo"><img src="assets-user/img/lombation.png" alt="" class="img-fluid" /></a>
        <h1 class="logo me-auto"><a href="beranda.php">Lombation</a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="beranda.php">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="nav-link scrollto"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="website.html">Website</a></li>
                <li><a href="team.html">Tim</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
            <li><a class="nav-link scrollto active" href="kontak.php">Kontak</a></li>
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

    <main id="main">
      <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>KONTAK</h2>
            <p>Silakan hubungi kami untuk menemukan solusi seputar pertanyaan atau mengirim pesan terkait website Lombation</p>
          </div>

          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p>Jl. Kumbang No.14, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128, Indonesia</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>lombation@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>+62851-7311-3736</p>
                </div>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4628251636286!2d106.80611479999999!3d-6.5892504999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSekolah%20Vokasi%20Institut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1664021368513!5m2!1sid!2sid"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="kontak.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required />
                    <!-- <input type="text" name="nama" id="nama"> -->
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required />
                    <!-- <input type="text" name="email" id="email"> -->
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">No Telepon</label>
                  <input type="text" class="form-control" name="notelp" id="notelp" required />
                  <!-- <input type="text" name="notelp" id="notelp"> -->
                </div>
                <div class="form-group">
                  <label for="name">Pesan</label>
                  <textarea class="form-control" name="pesan" rows="10" required></textarea>
                  <!-- <input type="text" name="pesan" id="pesan"> -->
                </div>
                <!-- <input type="submit" value="Create"> -->
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>

              </form>
             
            </div>
          </div>
        </div>
      </section>
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

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets-user/vendor/aos/aos.js"></script>
    <script src="assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets-user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-user/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- <script src="assets-user/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets-user/js/main.js"></script>
  </body>
</html>
