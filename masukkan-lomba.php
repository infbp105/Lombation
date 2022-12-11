<?php include 'fungsi/config.php';

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
    <link href="assets-user/css/style-add-lomba.css" rel="stylesheet" />
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
              <a href="#" class="nav-link scrollto "><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="website.html">Website</a></li>
                <li><a href="team.html">Tim</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
            <li><a class="nav-link scrollto" href="kontak.php">Kontak</a></li>
            <li class="dropdown">
              <a class="getstarted scrollto  active" href="#">Akun</a>
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
      <section class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Masukkan Lomba</h2>
            <p>Masukkan data dari lombamu disini!</p>
          </div>

          <form  method="post" role="form" class="php-email-form" enctype="multipart/form-data">
           
            <div class="form-group">
              <label for="name">Instansi Penyedia Lomba</label>
              <input placeholder="Masukkan instansi penyedia lomba..." type="text" name="penyedia" class="form-control" required > 
            </div>

            <div class="row">
            <div class="form-group col-md-9">
              <label for="name">Judul Lomba</label>
              <input placeholder="Masukkan judul lomba..." type="text" name="judul" class="form-control" required > 
            </div>
              <div class="form-group col-md-3">
                <label for="date">Batas Pendaftaran</label>
                <input type="date" name="deadline" id="deadline" class="form-control" required />
              </div>
              
            </div>
            
            

            <div class="row">
              <div class="checkbox col-md-2 row">
                <label class="form-label">Bidang Lomba</label>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Desain Website" />
                  <label class="form-check-label"><div class="checkbox_text">Desain Website</div></label>
                </div>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Video" />
                  <label class="form-check-label"><div class="checkbox_text">Video</div></label>
                </div>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Foto" />
                  <label class="form-check-label"><div class="checkbox_text">Foto</div></label>
                </div>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Poster" />
                  <label class="form-check-label"><div class="checkbox_text">Poster</div></label>
                </div>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Esai" />
                  <label class="form-check-label"><div class="checkbox_text">Esai</div></label>
                </div>
                <div class="checkbox">
                  <input class="kotak-check" type="radio" name="bidang" value="Bussiness Plan" />
                  <label class="form-check-label"><div class="checkbox_text">Bussiness Plan</div></label>
                </div>
              </div>
              <div class="form-group col-md-1"></div>
              
              <div class="form-group col-md-3">
                <label for="formFileLg" class="form-label">Poster (960 x 1280px)</label>
                <input type="file" name="poster" id = "poster">
              </div> 
              <div class="form-group col-md-3">
                <label for="formFileLg" class="form-label">Panduan (.pdf)</label>
                <input type="file" name="panduan" id = "panduan">
              </div> 
                
              


            </div>

           
            <div class="form-group">
              <label class="margin-desc" for="name">Deskripsi</label>
              <!-- <textarea placeholder="Masukkan Deskripsi Lomba..." class="form-control" name="message" rows="10" required></textarea> -->
              <textarea placeholder="Masukkan Deskripsi Lomba..."name="deskripsi" id="editor" class="form-control" rows="10" required ></textarea>
            </div>

        
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan kamu telah terkirim, terimakasih!</div>
            </div>
            <div class="row">
              <div class="col text-center">
                <button class="btn btn-primary" type="submit" name="btnsimpan">
				Simpan
			</button>
              </div>
            </div>
            
          </form>
          
		<?php if (isset($_POST['btnsimpan'])) {
			postLomba($_POST);
			echo "<meta http-equiv='refresh' content='1;url=beranda.php'>";
		} ?>
	
        </div>
      </section>
    </main>
    <!-- End #main -->
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
    <!-- <script src="assets-user/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets-user/js/main.js"></script>
  </body>
</html>
