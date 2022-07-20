<?php
include("include/config.php");
                       ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASENTERPRISES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
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
  <link rel="stylesheet" href="ribbon.css">
  <!-- <script src="toruskit.js"></script> -->

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
  .viewMore{
    background-image: linear-gradient(310deg,#7928ca,#106eea);
  }
  .ddhome{
    color:#106eea !important;
  }
  .ddhome:before{
  content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -6px;
    left: 0;
    background-color: #106eea;
    width: 100% !important;
    transition: all 0.3s ease-in-out 0s;
    text-decoration: underline;
}
  .tag{
    position: absolute;
    top: 10px;
    left: 10px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    background-image: linear-gradient(230deg,#7928ca,#106eea);
    color: #fff;
    border-radius: 5px;
    padding: 5px 15px;
  }
  .price-box{
    position: fixed;
    top: 324px;
    right: 22px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    background-image: linear-gradient(310deg,#7928ca,#106eea);
    color: #fff;
    border-radius: 5px;
    padding: 5px 15px;
  }
  .saleTag{
    position: absolute;
    top: 10px;
    left: 10px;
  }

  .nav-link{


  }
  
  </style>

</head>


<body>

  <!-- ======= Top Bar ======= -->


  <?php include("include/header.php"); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>ASENTERPRISES</span></h1>
      <h2>Where Dreams Come Home.</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Featured Services Section ======= -->
   <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bx-buildings'></i></div>
             
              <h4 class="title"><a href="">Maximum Choices</a></h4>
              <p class="description">4 Lac + & counting. New Properties every hour to help buyers and the right home</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class='bx bx-store-alt'></i></div>
              <h4 class="title"><a href="">Sellers Prefer Us</a></h4>
              <p class="description">4,000 new properties posted daily, making us the biggest platform to sell & rent properties</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class='bx bxs-book-alt'></i></div>
              <h4 class="title"><a href="">Expert Guidance</a></h4>
              <p class="description">Advice from the largest panel of industry experts to help you make smart property decisions</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bxs-heart"></i></div>
              <h4 class="title"><a href="">Buyers Trust Us</a></h4>
              <p class="description">1 La users visit us every month for their buying and renting needs</p>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Featured Services Section -->

     <!-- ======= Team Section ======= -->
     <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Team</h2> -->
          <h3> FEATURED  <span>PROPERTIES </span></h3>
          <!-- <p>...</p> -->
        </div>


        <div class="row">
        <?php 
                     
                     $sql=mysqli_query($conn,"select * from `property` where feature='YES' limit 4");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch ps-0" data-aos="fade-up" data-aos-delay="100">
          
            <div class="member p-0">
            <div class="ribbon-corner ribbon-fold" style="z-index:99999999;" data-tor="place.left place.top"> <span><?php echo $arr['property'];?></span></div>
           
              <div class="member-img" style="height:340px; width:420px;">
          
                <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
               
                <div class="price-box">
              <span>₹<?php echo $arr['price'];?></span>
              </div>
              </div>
              <div class="member-info d-flex">
                <div class="col-8">
                <h4><a href="info.php?id=<?php echo $arr['id'];?>"><?php echo $arr['building_name'];?></a></h4>
                <span><?php echo $arr['location'];?></span>
                </div>
               
                <div class="col-4">
                <h6><?php echo $arr['flat'];?></h6>
                <span><?php echo $arr['carpet_area'];?>sq.ft <span>
                </div>

               
            </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="text-center">
        <button type="button" class="btn viewMore" style="float:center;"><a href="f_property.php" style="color:white;">View More</a></button> 
        </div>
      </div>
    </section><!-- End Team Section -->
 

   

  
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Team</h2> -->
          <h3> SALE  <span>PROPERTIES </span></h3>
          <!-- <p>...</p> -->
        </div>

        <div class="row">
        <?php 
                     
                     $sql=mysqli_query($conn,"select * from `property` where property='project'  limit 4");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          
            <div class="member">
           
              <div class="member-img" style="height:340px; width:420px;">

          
                <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
               
                <div class="price-box">
              <span>₹<?php echo $arr['price'];?></span>
              </div>
              </div>
              <div class="member-info d-flex">
                <div class="col-8">
                <h4><a href="info.php?id=<?php echo $arr['id'];?>"><?php echo $arr['building_name'];?></a></h4>
                <span><?php echo $arr['location'];?></span>
                </div>
                
                <div class="col-4">
                <h6><?php echo $arr['flat'];?></h6>
                <span><?php echo $arr['carpet_area'];?>sq.ft <span>
                </div>

               
            </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="text-center">
        <button type="button" class="btn viewMore" style="float:center;"><a href="sale_property.php" style="color:white;">View More</a></button> 
        </div>
      </div>
    </section><!-- End Team Section -->
 


    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Team</h2> -->
          <h3> RESALE  <span>PROPERTIES </span></h3>
          <!-- <p>...</p> -->
        </div>

        <div class="row">
        <?php 
                     
                     $sql=mysqli_query($conn,"select * from `property` where property='resale'  limit 4");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          
            <div class="member">
           
              <div class="member-img" style="height:340px; width:420px;">
          
                <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
             
                <div class="price-box">
              <span>₹<?php echo $arr['price'];?></span>
              </div>
              </div>
              <div class="member-info d-flex">
                <div class="col-8">
                <h4><a href="info.php?id=<?php echo $arr['id'];?>"><?php echo $arr['building_name'];?></a></h4>
                <span><?php echo $arr['location'];?></span>
                </div>
                
                <div class="col-4">
                <h6><?php echo $arr['flat'];?></h6>
                <span><?php echo $arr['carpet_area'];?>sq.ft <span>
                </div>

               
            </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="text-center">
        <button type="button" class="btn viewMore" style="float:center;"><a href="resale_property.php" style="color:white;">View More</a></button> 
        </div>

      </div>
    </section><!-- End Team Section -->
 
  

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          <?php 
                     
                     $sql=mysqli_query($conn,"select * from `testimonials`");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="admin/dist/img/<?php echo $arr['image'];?>" class="testimonial-img" alt="">
                <h3><?php echo $arr['name'];?></h3>
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $arr['description'];?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
<?php } ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  

   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients section-bg">
  
      <div class="container" data-aos="zoom-in">
      <div class="section-title">
      
          <h4>Our Partners </h4>
        
        </div>
        
        <div class="row">
<?php 
                     
                     $sql=mysqli_query($conn,"select * from `partners`");
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
          
          </div>

         <?php } ?>
 
        </div>
     
      </div>
   
    </section><!-- End Clients Section -->

 

   

  </main><!-- End #main -->

  <?php include("include/footer.php"); ?>

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