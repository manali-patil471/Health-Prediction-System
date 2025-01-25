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


    //  $prob1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM problem WHERE ID='".$_GET['proid']."'"));

    // $dep=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM department WHERE ID='".$prob1[3]."'"));
   

?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health Prediction Syatem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

<style type="text/css">
  /* Custom CSS for check-list items */
.check-list {
  list-style-type: none;
  padding-left: 0;
}

.check-list li {
  padding-left: 30px;
  position: relative;
}

.check-list li:before {
  content: '\2022';
  color: #007bff;
  font-weight: bold;
  position: absolute;
  left: 0;
}

/* Additional styling */
.team .section-header span {
  font-size: 18px;
}

.team .section-header h2 {
  margin-top: 20px;
  font-size: 36px;
}

.features-item h3 {
  font-size: 24px;
  margin-bottom: 20px;
}
/* Custom CSS for check-list items */
.check-list {
  list-style-type: none;
  padding-left: 0;
}

.check-list li {
  padding-left: 30px;
  position: relative;
  transition: all 0.3s ease-in-out;
}

.check-list li:before {
  content: '\2022';
  color: #007bff;
  font-weight: bold;
  position: absolute;
  left: 0;
  transition: all 0.3s ease-in-out;
}

.check-list li:hover {
  transform: translateX(5px);
}

.check-list li:hover:before {
  color: #ffc107; /* Change color on hover */
}

/* Additional styling */
.team .section-header span {
  font-size: 18px;
}

.team .section-header h2 {
  margin-top: 20px;
  font-size: 36px;
}

.features-item h3 {
  font-size: 24px;
  margin-bottom: 20px;
}
.image-container:hover img {
        transform: scale(1.1); /* Increasing the scale on hover */
    }
    .image-container img {
        display: block;
        width: 100%;
        height: auto;
        transition: transform 0.3s ease; /* Adding smooth transition */
    }
    .image-container {
        position: relative;
        width: 350px; /* Adjust the width of the container */
        height: 250px; /* Adjust the height of the container */
        overflow: hidden;
    }


</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PREDIX</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="get-a-quote" href="patient_index.php">Home</a></li>
          
          <li><a class="get-a-quote" href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

 

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
<br>

<!-- ======= About Us Section ======= -->
<section id="team" class="team pt-5">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <span style="color: #6c757d;">Doctor Prediction For You</span>
      <h2 style="color: #343a40; font-weight: bold;">Doctor Prediction For You</h2>
    </div>
    
    <br>
    <div class="row gy-4 align-items-center features-item" data-aos="fade-right">
      <!-- Rest of your content goes here -->
      <div class="col-md-5 image-container">
            <img src="assets/img/allopathic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3 style="font-weight: bold;">Allopathic Solutions</h3>
            <p class="fst-italic">
               It's the usual medicine most doctors practice, using drugs and surgery to treat illnesses.
            </p>
            <ul class="check-list">
              <li><?php
            $pd1 = mysqli_query($con, "SELECT * FROM solution WHERE PROB_ID='" . $_GET['proid'] . "' && DOC_ID='" . $_GET['doc'] . "' && type=1");
            while ($pd = mysqli_fetch_row($pd1)) {
              echo '<li><i class="bi bi-check"></i> ' . $pd[3] . '</li>';
            }
            ?></li>
              
            </ul>
    </div>
  </div>
    <br><br>
    <div class="row gy-4 align-items-center features-item" data-aos="fade-left">
      <!-- Rest of your content goes here -->
      <div class="col-md-5 order-1 order-md-2 image-container">
            <img src="assets/img/homeopathic.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3 style="font-weight: bold;">Homeopathic Solutions</h3>
            <p class="fst-italic">
               It's an alternative approach using very diluted natural substances to trigger the body's own healing processes.
            </p>
            <ul class="check-list">
              <li><?php
            $pd1 = mysqli_query($con, "SELECT * FROM solution WHERE PROB_ID='" . $_GET['proid'] . "' && DOC_ID='" . $_GET['doc'] . "' && type=2");
            while ($pd = mysqli_fetch_row($pd1)) {
              echo '<li><i class="bi bi-check"></i> ' . $pd[3] . '</li>';
            }
            ?></li>
              
            </ul>
          </div>
    </div><br>
    <!-- Cautionary Note -->
    <div class="alert alert-warning" role="alert">
      <strong>Caution:</strong> Please note that the predictions provided here are for informational purposes only. For accurate diagnosis and treatment, it is recommended to consult a healthcare professional in person.
    </div>
    <!-- End Cautionary Note -->
  </div>
</section>
<!-- End About Us Section -->




        
<!-- End Our Team Section -->


   
  

  </main><!-- End #main -->

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