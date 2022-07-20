<?php
include("include/config.php");
                       ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Featured Property</title>
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
  <style>
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

  .r_property{
    color:#106eea !important;

  }
  .r_property:before{
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
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
 
  
  <?php include("include/header.php"); ?>

 

  <main id="main">

  

 
  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
      <div class="row" style="background:white; border-radius:10px; ">
          <form method="post">
                        <div class="option-bar d-none1 d-xl-block d-lg-block d-md-block d-sm-block">
                    		<div class="row" style="height:60px;">
                        <div class="col-lg-1 col-md-1 col-sm-1" >
                        
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8" style="margin-top:3px; margin-top:9px;">
                     
                        <label>Sort by:</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php 
                        
                        
                        ?>
                           <input type="checkbox" class="bhk" id="RK" value="1rk" name="rk1[ ]">&nbsp;<label for="1rk">1 RK</label>
						   &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						   <input type="checkbox" class="bhk" id="bhk1" value="1bhk" name="rk1[ ]">&nbsp;<label for="bhk1">1 BHK</label>
						   &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						   <input type="checkbox" class="bhk" id="bhk2" value="2bhk" name="rk1[ ]">&nbsp;<label for="bhk2">2 BHK</label>
						   &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						   <input type="checkbox" class="bhk" id="bhk3" value="3bhk" name="rk1[ ]">&nbsp;<label for="bhk3">3 BHK</label>
						   
                           &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" class="bhk" id="bhk4" value="4bhk" name="rk1[ ]">&nbsp;<label for="bhk4">4 BHK</label>
						   
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   <input type="submit" class="btn btn-primary" value="Sort" name="sortbhk" onclick="sort_listing();">
						   
                        </div>
                            
                            </div>
                			</div>

                        </form>
</div>
        <div class="section-title">
          <!-- <h2>Team</h2> -->
          <h3> FEATURED <span>PROPERTIES </span></h3>
          <!-- <p>...</p> -->
        </div>

        <div class="row">
        <?php 
                      if(isset($_POST['sortbhk'])){   
                        $rk=$_POST['rk1'];
                        foreach($rk as $bhk){
                         $sql=mysqli_query($conn,"select * from `property` where flat='$bhk' and feature='YES'");
                        
                 
                      while($arr=mysqli_fetch_array($sql)){
                     ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          
            <div class="member">
           
              <div class="member-img" style="height:340px; width:420px;">
          
                <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
                <div class="tag">
               <span><?php echo $arr['property'];?></span>
                      </div>
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
          <?php } } 
        } else{
          $sql=mysqli_query($conn,"select * from `property` where  feature='YES'");
                    
                 
          while($arr=mysqli_fetch_array($sql)){
        ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          
          <div class="member">
         
            <div class="member-img" style="height:340px; width:420px;">
        
              <img src="admin/dist/img/<?php echo $arr['image'];?>" class="img-fluid" alt="">
              <div class="tag">
             <span><?php echo $arr['property'];?></span>
                    </div>
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
        <?php } }  ?>
        </div>
          

      </div>
    </section><!-- End Team Section -->
 
 
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