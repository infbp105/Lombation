<?php include 'fungsi/config.php'; $row = detailLomba($_GET['id']) ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin - Lombation</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets-user/img/lombation.png" rel="icon" />
    <link href="assets-user/img/lombation.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
<!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="admin-dashboard.php" class="logo d-flex align-items-center">
          <img src="assets-user/img/lombation.png" alt="" />
          <span class="d-none d-lg-block">Lombation</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          
          <!-- End Notification Nav -->

        

          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets-user/img/team/default.jpg" alt="Profile" class="rounded-circle" />
              <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span> </a
            ><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Admin</h6>
                <!-- <span>Web Designer</span> -->
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="admin-profile.php">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
      
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="admin-dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Data Tabel</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="admin-tabel-data.php" class="active"> <i class="bi bi-circle"></i><span>Lomba</span> </a>
            </li>
            <li>
              <a href="admin-tabel-kontak.php "> <i class="bi bi-circle"></i><span>Pesan</span> </a>
            </li>
          </ul>
        </li>

       <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="admin-charts.php"> <i class="bi bi-circle"></i><span>Pie Chart</span> </a>
            </li>
        
          </ul>
        </li>
        <!-- End Charts Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="admin-profile.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

      </ul>
    </aside>
    <!-- End Sidebar-->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data Lomba</li>
          <li class="breadcrumb-item active">Edit Lomba</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Lomba</h5>
<?php if (isset($_POST['btnedit'])) {
			editLomba($_POST, $_GET['id']);
			echo "<meta http-equiv='refresh' content='1;url=admin-tabel-data.php'>";
		} ?>
              <!-- General Form Elements -->
              <form method="post">
				<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Penyedia</label>
                  <div class="col-sm-10">
                    <input type="text" name="penyedia" class="form-control"value="<?= $row['penyedia'] ?>"required>
                  </div> 
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul Lomba</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control"value="<?= $row['judul'] ?>"required>
                  </div>
                </div>
				
				<div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Batas Pendaftaran</label>
                  <div class="col-sm-10">
                    <input type="date" name="deadline" class="form-control"value="<?= $row['deadline'] ?>"required>
                  </div>
                </div>
				<div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Poster</label>
                  <div class="col-sm-10">
                    <input type="file" name="poster" id = "poster"required>
                  </div>
                </div>
				<div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Panduan</label>
                  <div class="col-sm-10">
                    <input type="file" name="panduan" id = "panduan"required>
                  </div>
                </div>
				               

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Bidang Lomba</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value="Desain Website">
                      <label class="form-check-label" for="gridRadios1">
                        Desain Website
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value="Video">
                      <label class="form-check-label" for="gridRadios1">
                        Video
                      </label>
                    </div>
					
					<div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value="Foto">
                      <label class="form-check-label" for="gridRadios1">
                        Foto
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value=Poster">
                      <label class="form-check-label" for="gridRadios1">
                        Poster
                      </label>
                    </div>
					<div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value="Esai">
                      <label class="form-check-label" for="gridRadios1">
                        Esai
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="bidang" value="Bussiness Plan">
                      <label class="form-check-label" for="gridRadios1">
                        Bussiness Plan
                      </label>
                    </div>
                  </div>
                </fieldset>

				<div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi" style="height: 100px"required><?= $row['deskripsi'] ?></textarea>
                  </div>
                </div>



                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Edit Data</label>
                  <div class="col-sm-10">
                    <button class="btn btn-secondary" type="submit" onclick="location.href='admin-tabel-data.php'">Batal</button>
                    <button class="btn btn-primary" type="submit" name="btnedit">Submit</button>
                  </div>
                  
                </div>

              </form><!-- End General Form Elements -->
			  

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

