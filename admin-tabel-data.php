<?php include 'fungsi/config.php'; ?>
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

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Data Tabel</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Data Tabel</li>
            <li class="breadcrumb-item active">Lomba</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data lomba</h5>
                <div class="position-relative">
<!-- <div class="card-body position-absolute top-50 start-0 translate-middle-y">Data lomba</div> -->
<h5 class="card-body position-absolute top-50 end-0 translate-middle-y">Total Lomba: <?php 
$con=mysqli_connect('localhost','root','','lombati1_lombation');
$byk_lomba=mysqli_query($con,"select * from lomba");
$jml_lomba=mysqli_num_rows($byk_lomba);
echo $jml_lomba;
?></h5>
</div>
                <button onclick="location.href='masukkan-lomba.php'"  type="button" class="btn btn-primary">Tambah Data Lomba</button>
                <button onclick="location.href='laporanexcel.php'"  type="button" class="btn btn-success">Eksport Excel</button>
                <button onclick="location.href='laporanpdf.php'"  type="button" class="btn btn-success">Export PDF</button>
                <br></br>
               
                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Penyedia</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Bidang</th>
                      <th scope="col">Deadline</th>
                      <th scope="col">Poster</th>
                      <th scope="col">Panduan</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php $data = tampilLomba(); foreach($data as $row): ?>
                    <tr>
                      <th scope="row"><?= $row['id'] ?></th>
                      <td><?= $row['penyedia'] ?></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['bidang'] ?></td>
                      <td><?= $row['deadline'] ?></td>
                      <td><?= $row['poster'] ?></td>
                      <td><?= $row['panduan'] ?></td>
                      <td><?= $row['deskripsi'] ?></td>
                      <td class="actions">

                    <button onclick="location.href='editLomba.php?id=<?=$row['id']?>'"  type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                    
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">
                    <i class="bi bi-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="hapus<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Lomba: <?= $row['id'] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah anda yakin untuk menghapus <?= $row['judul'] ?> dengan id: <?= $row['id'] ?>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button onclick="location.href='hapusLomba.php?id=<?=$row['id']?>'" type="button" class="btn btn-primary">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>    
                      </td>
                    </tr>
                     <?php endforeach ?>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; <strong><span>Lombation 2022</span></strong
        >. Hak Cipta Dilindungi
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Desain oleh <a href="team.html">Tim Pengembang Lombation</a>
      </div>
    </footer>
    <!-- End Footer -->

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
