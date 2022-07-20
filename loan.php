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

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include("include/header.php"); ?>

 
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
   
        <div class="align-items-center" style="text-align:center;">
           <h2>  HOME LOANS STARTS @7.30%</h2>
          
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class=" align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/img.jpg" alt="">
                </div>

                

              </div>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>HOME LONES</h3>
              <ul>
                <li>SBI Home Loans</li>
                <li> AXIS Bank Home Loan</li>
                <li> HDFC Home Loan</li>
                <li> Bank Of India Home Loan</li>
                <li>ICICI Home Loan</li>
                <li>PNB Home Loan</li>
              </ul>
            </div>
            
          </div>
          <div class="portfolio-description">
              <h5>HOME LOANS! CHOOSE HOW WOULD YOU LIKE TO AVAIL YOUR HOME LOAN</h5>
              <p>
              As a piece of the general bundle, we at The Property Adviser offer you a different sum solely for this reason. Invest the energy in making your home your home as opposed to on documents. While we finance your fantasy home we likewise comprehend that you have to spend on the apparatuses and fittings to make the place yours.

              </p>
              <ul>
                <li> Hassle-Free Home Loans.</li>
                <li>Services From Your house for your New house.</li>
                <li> No Hidden Charges.</li>
                <li>  Maximum Funding</li>
               
              </ul>
              <p>In the event that you have bought your property inside the most recent a year with your own assets, you can benefit from our renegotiate choice and take a credit up to the enrolled estimation of your property.
Terms and Conditions</p>
            </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
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