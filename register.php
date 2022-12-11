<?php

@include 'fungsi/config-login.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_role = $_POST['user_role'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user(name, email, password, user_role) VALUES('$name','$email','$pass','$user_role')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Registrasi - Lombation</title>
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
    <main>
      <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets-user/img/lombation.png" alt="" />
                    <span class="d-none d-lg-block">Lombation</span>
                  </a>
                </div>
                <!-- End Logo -->

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                      <p class="text-center small">Masukkan data berikut untuk membuat akun</p>
                    </div>

                    <form class="row g-3 needs-validation"  action="" method="post" novalidate>
                      <div class="col-12">
                        <label for="yourName" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" id="yourName" required />
                        <div class="invalid-feedback">Silahkan masukkan nama lengkap!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required />
                        <div class="invalid-feedback">Silahkan masukkan alamat email!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required />
                        <div class="invalid-feedback">Silahkan masukkan password!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="cpassword" class="form-control" id="yourPassword" required />
                        <div class="invalid-feedback">Konfirmasi password!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourRole" class="form-label">Daftar Sebagai</label>
                      <select id="inputState" class="form-select" name="user_role">
                          <option value="user" selected>User</option>
                          <option value="admin" >Admin</option>
                        </select>
                      </div>

                      <div class="col-12">
                        <button type="submit" name="submit" value="register now" class="btn btn-primary w-100" type="submit">Registrasi</button>
                        <!-- <input type="submit" name="submit" value="register now" class="form-btn"> -->
                      </div>
                      <?php
                      if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                      };
                      ?>
                      <div class="col-12">
                        <p class="small mb-0">Sudah punya akun? <a href="index.php">Login</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- End #main -->

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
