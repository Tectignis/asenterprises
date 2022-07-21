<?php
include("include/config.php");
                       ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fav.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <?php include("include/header.php"); ?>
  <!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
      <?php 
                     $id=$_GET['id'];
                     $sql=mysqli_query($conn,"select * from `property` where id='$id'");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
        <div class="row gy-4">

          <div class="col-lg-8">
         
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide" style="height:340px; width:420px;">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img src="admin/dist/img/<?php echo $arr['image'];?>" alt=""></a>
                </div>

                <div class="swiper-slide" style="height:340px; width:420px;">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img src="admin/dist/img/<?php echo $arr['image2'];?>" alt=""></a>
                </div>


                
                <div class="swiper-slide" style="height:340px; width:420px;">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img src="admin/dist/img/<?php echo $arr['image3'];?>" alt=""></a>
                </div>


                
                <div class="swiper-slide" style="height:340px; width:420px;">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img src="admin/dist/img/<?php echo $arr['image4'];?>" alt=""></a>
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $arr['building_name'];?></h2>
              <p>
              <?php echo $arr['description'];?>
              </p>
            </div>
            
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" style="height: 383px;">
              <h3>DETAILS</h3>
              <ul>
                <li><strong>Price</strong>: <?php echo $arr['price'];?></li>
                <li><strong>Flat</strong>: <?php echo $arr['flat'];?></li>
                <li><strong>Carpet Area</strong>: <?php echo $arr['carpet_area'];?></li>
                <li><strong>Builtup Area</strong>: <?php echo $arr['builtup_area'];?></li>
                <li><strong>Water Source</strong>: <?php echo $arr['water_source'];?></li>
                <li><strong>Age Of Construction</strong>: <?php echo $arr['age_of_construction'];?></li>
                <li><strong>Power Backup</strong>: <?php echo $arr['power_backup'];?></li>
                <li><strong>Facing</strong>:<?php echo $arr['facing'];?></li>
                <li><strong>Furnishing</strong>: <?php echo $arr['furnishing'];?></li>
                
              </ul>
            </div>
            <div class="portfolio-info mt-2" style="height: 189px;">
            <h3>Amenities</h3>
            </div>

           
          </div>

        
        </div>
<?php } ?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php"); ?>
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>