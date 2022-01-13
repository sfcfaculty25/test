<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
include 'connection.php';
?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registration</h2>
          <p>Register Form</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-8 mt-5 mt-lg-0">

          <?php
          $msg="";



          
          if(isset($_POST['reg1']))
{
    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];



$q = "insert into reg values('','$fname','$lname','$username','$email','$pass') ";

$result = mysqli_query($conn,$q);

$msg="inserted";

}
?>

            <form action="reg.php" method="post" class="">
            <div class="php-email-form"> 
            <div class="row ">
                <div class="col-md-12 form-group">
                  <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" required>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" required>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="user" class="form-control" id="name" placeholder="username" required>
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="pass" id="subject" placeholder="Password" required>
              </div>
              </div>
              <div class="text-center"><input type="submit" name="reg1" value="Register"/></div>
              <h2><?php
              echo $msg;
              ?></h2>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

      <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>