<?php include 'fungsi/config-login.php'; ?>

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
          <a class="nav-link" href="admin-dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Tabel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-tabel-data.php">
              <i class="bi bi-circle"></i><span>Lomba</span>
            </a>
          </li>
          <li>
            <a href="admin-tabel-kontak.php">
              <i class="bi bi-circle"></i><span>Pesan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

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
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                 
                  <div class="card-body">
                    <h5 class="card-title">Lomba <span>| Semua</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-trophy"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php 
$con=mysqli_connect('localhost','root','','lombati1_lombation');
$byk_lomba=mysqli_query($con,"select * from lomba");
$jml_lomba=mysqli_num_rows($byk_lomba);
echo $jml_lomba;
?></h6>
                        <span class="text-success small pt-1 fw-bold">Lomba</span> <span class="text-muted small pt-2 ps-1">tersedia</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                 
                  <div class="card-body">
                    <h5 class="card-title">User <span>| Semua</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php 
                          $con=mysqli_connect('localhost','root','','lombati1_lombation');
                          $byk_user=mysqli_query($con,"select * from user where user_role='user'");
                          $jml_user=mysqli_num_rows($byk_user);
                          echo $jml_user;
                          ?>
                          </h6>
                        <span class="text-success small pt-1 fw-bold">User</span> <span class="text-muted small pt-2 ps-1">terdaftar</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  

                  <div class="card-body">
                    <h5 class="card-title">Admin <span>| Semua</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-check"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php 
                        $con=mysqli_connect('localhost','root','','lombati1_lombation');
                        $byk_admin=mysqli_query($con,"select * from user where user_role='admin'");
                        $jml_admin=mysqli_num_rows($byk_admin);
                        echo $jml_admin;
                        ?>
                        </h6>
                        <span class="text-danger small pt-1 fw-bold">Admin</span> <span class="text-muted small pt-2 ps-1">terdaftar</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->


              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Data User dan Admin <span>| Semua</span></h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Email</th>
                          <th scope="col">Tipe User</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $data = tampilUser(); foreach($data as $row): ?>
                        <tr>
                          <th scope="row"><a href="#"><?= $row['id'] ?></a></th>
                          <td><?= $row['name'] ?></td>
                          <td><a href="#" class="text-primary"><?= $row['email'] ?></a></td>
                          <td><?= $row['user_role'] ?></td>
                          <td class="actions">

               
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">
                    <i class="bi bi-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="hapus<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data <?= $row['user_role'] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah anda yakin untuk menghapus data <?= $row['user_role'] ?> bernama <?= $row['name'] ?>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button onclick="location.href='hapusUser.php?id=<?=$row['id']?>'" type="button" name="btn-hapus" class="btn btn-primary">Hapus</button>
                          </div>
                        </div>
                      </div>
                    </div>    
                  </td>
                        </tr>
                        
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- End Recent Sales -->

            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
            
            
            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">User Traffic <span>| Semua</span></h5>

                <div id="trafficChart" style="min-height: 400px" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: "item",
                      },
                      legend: {
                        top: "5%",
                        left: "center",
                      },
                      series: [
                        {
                          name: "Access From",
                          type: "pie",
                          radius: ["40%", "70%"],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: "center",
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: "18",
                              fontWeight: "bold",
                            },
                          },
                          labelLine: {
                            show: false,
                          },
                          data: [
                            {
                              value: <?php 
                          $con=mysqli_connect('localhost','root','','lombati1_lombation');
                          $byk_user=mysqli_query($con,"select * from user where user_role='user'");
                          $jml_user=mysqli_num_rows($byk_user);
                          echo $jml_user;
                          ?>,
                              name: "User",
                            },
                            {
                              value: <?php 
                        $con=mysqli_connect('localhost','root','','lombati1_lombation');
                        $byk_admin=mysqli_query($con,"select * from user where user_role='admin'");
                        $jml_admin=mysqli_num_rows($byk_admin);
                        echo $jml_admin;
                        ?>,
                              name: "Admin",
                            },
                         
                          ],
                        },
                      ],
                    });
                  });
                </script>
              </div>
            </div>
            <!-- End Website Traffic -->

          </div>
          <!-- End Right side columns -->
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
