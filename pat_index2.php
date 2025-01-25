<!DOCTYPE html>
 
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","health_predix",3306)or die("Database Error....!");
session_start();
    if(isset($_SESSION['patient']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../index.php";
        </script>
        ';
    }
    $pid=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM patient WHERE ID='".$_SESSION['patient']."'"));

?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health Prediction Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <script>
    var swiper = new Swiper('.slides-1', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  <style type="text/css">
    .service-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.service-item .icon {
  font-size: 24px;
  color: blue;
}

.service-item .readmore:hover {
  color: #007bff;
}
.featured-services h5 {
    font-size: 36px;
}

.service-item {
    padding: 30px;
}

.service-item .icon {
    font-size: 36px;
}

.service-item h4 {
    font-size: 24px;
}
.flex-column h2 {
    font-size: 80px;
}
.flex-column {
    height: 300px; /* Increase the height */
}

.flex-column h2 {
    font-size: 80px; /* Increase the font size */
    margin-left: 50px; /* Adjust the margin */
    margin-top: 50px; /* Adjust the margin */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for better visibility */
    color: #fff; /* Change the text color */
}

/* Add animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.flex-column h2 {
    animation: fadeIn 1s ease-in-out; /* Apply animation */
}


/* Add more animations or effects as needed */

  </style>
  
  <link href="assets/img/logoi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 
</head>

<body>

  <!-- ======= Header ======= -->
  
  
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PREDIX</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          

          
          <!-- <li><a href="contact.php" style="color: black;">Contact</a></li> -->
          <li><a class="get-a-quote" href="index.php">Home</a></li>
          <li><a class="get-a-quote" href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>

  <!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center" style="width: 100%; min-height: 50vh; background-image: url('assets/img/hero1.png'); background-size: cover; background-position: center; position: relative; padding: 120px 0 60px 0;">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up" style="color: white; font-size: 60px; margin-left: 180px">Welcome</h2>
        <h2 data-aos="fade-up" style="color: white; font-size: 60px; margin-left: 150px"><?php echo $pid[1]?></h2>
          <br>
          <br>
          <br>
          

          

          
        </div>

        

      </div>
    </div>
  </section><!-- End Hero Section -->



<section id="featured-services" class="featured-services">
  <div class="container">
    <h5 style="text-align: center; font-weight: bold; color: blue;">Select Your Health Concern Department</h5>
    <br>
    <br>
    <div class="row">
      <div class="col-lg-8">
        <div class="row gy-4" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
    <?php
        $res = mysqli_query($con, "SELECT * FROM department");
        while ($row = mysqli_fetch_row($res)) {
    ?>
    <div class="col-lg-3 service-item d-flex" data-aos="fade-up" style="border-top: 2px solid blue; border-radius: 10px; padding: 30px; transition: all 0.3s; width: 200px; margin-bottom: 40px;">
        <div class="icon flex-shrink-0" style="margin-right: 10px;"><i class="fa fa-building"></i></div>
        <div>
            <h4 class="title" style="font-size: 24px; margin-bottom: 15px;"><?php echo $row[1]; ?></h4>
            <a href="problem1.php?did=<?php echo $row[0]; ?>" class="readmore stretched-link" style="display: inline-block; color: blue; font-weight: bold; text-decoration: none; transition: color 0.3s;"><span>Learn More</span><i class="bi bi-arrow-right" style="margin-left: 5px;"></i></a>
        </div>
    </div>
    <?php } ?>
    <!-- End Service Item -->
</div>
      </div>
      <div class="col-lg-4">
        <img src="assets/img/hosp.gif" height="300px" width="440px">
      </div>
      
    </div>

  </div>
</section>














  
    
  <!-- ======= Footer ======= -->
  <?php
    include('index_footer.php');
  ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>