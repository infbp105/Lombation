<?php
include 'fungsi/config.php';
$rowLomba  = detailLomba($_GET['id']);
$rowKomentar = tampilKomentar($_GET['id']);
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
    <link href="assets-user/css/style-lomba-details.css" rel="stylesheet" />
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
            <li><a class="nav-link scrollto active" href="beranda.php">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="nav-link scrollto"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
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

    <main id="main">
      <section id="blog" class="blog section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-8">
              <article class="blog-details">
                <div class="post-img">
                  <img src="img/<?= $rowLomba['poster'] ?>" alt="" class="img-fluid" />
                </div>

                <h2 class="title"><?= $rowLomba['judul'] ?></h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#profil"><?= $rowLomba['penyedia'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-tags"></i> <a href=index.html"><?= $rowLomba['bidang'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-calendar-event"></i> <a href=index.html"><?= $rowLomba['deadline'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#comment-1"> <?= jumlahKomentar($rowLomba['id']) ?> Komentar</a></li>
                  </ul>
                </div>
                <!-- End meta top -->

                <div class="content">
                  <h3>Deskripsi Lomba</h3>
                  <p>
                    <?= $rowLomba['deskripsi'] ?>
                  </p>
                <h3>Panduan</h3>
                  <div style="--aspect-ratio: 16/9">
                    <iframe src="pdf/<?= $rowLomba['panduan'] ?>" width="789" height="900" frameborder="0"> </iframe>
                  </div>

		<hr>
                </div>
                <!-- End post content -->

                <!-- End meta bottom -->
              </article>
              <!-- End blog post -->

              <!-- <div id="profil" class="post-author d-flex align-items-center">
                <img src="assets-user/img/blog/logo-olivia.png" class="rounded-circle flex-shrink-0" alt="" />
                <div>
                  <h4>OLIVIA</h4>
                  <div class="social-links">
                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                  </div>
                  <p>
                    OLIVIA (Olimpiade Vokasi Indonesia) merupakan kompetisi bergengsi tingkat nasional yang menjadi agenda tahunan dalam peningkatan kompetensi dan marwah inovasi bagi mahasiswa vokasi Indonesia. Perlombaan ini diprakarsai
                    oleh Forum Pendidikan Tinggi Vokasi Indonesia (FPTI).
                  </p>
                </div>
              </div> -->
              <!-- End post author -->

              <div class="comments">
                <h4 class="comments-count"> <?= jumlahKomentar($rowLomba['id']) ?> Komentar</h4>

              <?php
			if (isset($_POST['btnkomen'])) {
				postKomentar($_POST, $_GET['id']);

				echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id=".$rowLomba['id']."'>";
			}
		?>
		<!-- <div class="alert alert-success">asdasd</div> -->
		<?php foreach ($rowKomentar as $row): ?>
			
		
		
                <div id="comment-3" class="comment">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets-user/img/team/default.jpg" alt="" /></div>
                    <div>
                      <h5>
                        <a href=""><?= $row['nama'] ?></a> <a href="#" class="reply"><i class=" "></i></a>
                      </h5>
                      <time datetime=""><?php echo date("Y/m/d");?></time>
                      <p><?= $row['deskripsi'] ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach ?>


                <!-- End comment #3 -->
                <div class="reply-form">
                  <h4>Kirim Komentar</h4>
                  <p>Kirim komentar komentar terhadap lomba ini!</p>
                  <form action="" method="POST">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input name="nama" type="text" class="form-control" placeholder="Nama" />
                      </div>
           
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <textarea name="deskripsi" class="form-control" placeholder="Komentar"></textarea>
						
                      </div>
                    </div>
                   
					<button class="btn btn-primary" type="submit" name="btnkomen">
				Kirim Komentar
			</button>
                  </form>
                </div>
				
              </div>
              <!-- End blog comments -->
            </div>

            <div class="col-lg-4">
               
              <div class="sidebar">
                <div class="sidebar-item categories borderbawah">
                  <h3 class="sidebar-title">Detail</h3>
                  <ul class="mt-3">
                    <li>
                      <p class="p-kategori">Penyedia Lomba: <a href="#"><?= $rowLomba['penyedia'] ?></a></p>
                    </li>
                    <li>
                      <p class="p-kategori">Bidang Lomba: <a href="#"><?= $rowLomba['bidang'] ?></a></p>
                    </li>
                    <li>
                      <p class="p-kategori">Batas Pendaftaran: <a href="#"><?= $rowLomba['deadline'] ?></a></p>
                    </li>
                    <li>
                      <p class="p-kategori">Komentar: <a href="#"><?= jumlahKomentar($rowLomba['id']) ?> Komentar</a></p>
                    </li>
                    <li>
                     
                    </li>
          
                  </ul>
                </div>
<div class="sidebar-item categories borderbawah">
                  <h3 class="sidebar-title">Berkas Lomba</h3>
                  <ul class="mt-3">
                    <li>
                      <p class="p-kategori bi bi-file-earmark-pdf"><a href="pdf/<?= $rowLomba['panduan'] ?>"> Panduan Lomba</a></p>
                    </li>
                  </ul>
                </div>
          
               
                  </div>
                  
                </div>
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog Details Section -->

      <!-- End Team Section -->
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
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Bidang Lomba</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Tingkatan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Batas Pendaftaran</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Jenjang</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Gratis/Bayar</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Link Tautan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="beranda.php">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="website.html">Tentang Website</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="team.html">Tentang Tim</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="faq.html">FAQ</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="kontak.html">Kontak</a></li>
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
  </body>
</html>



