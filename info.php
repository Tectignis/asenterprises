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
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
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
 <style>
  .pdisable p:last-child{
    visibility:hidden;
  }
  
 </style>
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

                <div class="swiper-slide" >
                <a href="info.php?id=<?php echo $arr['id'];?>"><img  class="photo" src="admin/dist/img/<?php echo $arr['image'];?>" 
                style="height:405px; width:740px;" alt=""></a>
                </div>

                <div class="swiper-slide">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img class="photo" src="admin/dist/img/<?php echo $arr['image2'];?>" style="height:405px; width:740px;" alt=""></a>
                </div>


                
                <div class="swiper-slide">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img class="photo" src="admin/dist/img/<?php echo $arr['image3'];?>" style="height:405px; width:740px;" alt=""></a>
                </div>


                
                <div class="swiper-slide">
                <a href="info.php?id=<?php echo $arr['id'];?>"><img class="photo" src="admin/dist/img/<?php echo $arr['image4'];?>" style="height:405px; width:740px;" alt=""></a>
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
            <div class="portfolio-info" style="">
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
            <div class="portfolio-info my-2" >
            <h3>Amenities</h3>
            <ul>
              <li>
              <?php 
              $icon='';
              // $amenities=$arr['amenities'];
             

              ?>
              
                <li class="pdisable"><?php 
                $links = array();
                $parts =explode(',',$arr['amenities']);
                foreach ($parts as $amenities){
                  if($amenities=="Lift"){
                    $icon= '<i class="fas fa-tram"></i>';
                  }else if($amenities=="Gymnasium"){
                    $icon= '<i class="nav-icon fas fa-solid fa-dumbbell"></i>';
                  }else if($amenities=="Security"){
                    $icon= '<i class="fas fa-user-lock"></i>';
                  }else if($amenities=="Kids Play Area"){
                    $icon= '<i class="fas fa-skating"></i>';
                  }else if($amenities=="Swimming Pool"){
                    $icon= '<i class="fas fa-swimmer"></i>';
                   } else if($amenities=="Terrace garden"){
                    $icon= '<i class="nav-icon fas fa-solid fa-building"></i>';
                    }
                  else if($amenities=="Club House"){
                    $icon= '<i class="fas fa-dice"></i>';
                  }else if($amenities=="Cycling & Jogging Track"){
                    $icon= '<i class="fas fa-biking"></i>';
                  }else if($amenities=="Reserved Parking"){
                    $icon= '<i class="fas fa-parking"></i>';
                  }else if($amenities=="Kids Splash Pool"){
                    $icon= '<i class="fas fa-bath"></i>';
                  }else if($amenities=="Volleyball court"){
                    $icon= '<i class="fas fa-volleyball-ball"></i>';
                  }else if($amenities=="Intercom Facility"){
                    $icon= '<i class="fas fa-newspaper"></i>';
                  }
                  $link[]="<p>$icon $amenities</p>";
                }
                echo implode("<br>", $link );?></li>
               
            </li>
              </ul>
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