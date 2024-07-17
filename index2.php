<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>


<!-- HTML code for the appointment page goes here -->




<!DOCTYPE html>
<html lang="en">

<head>

  <title>Ladies Salon Management System || Home Page</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Style -->
  <link href="css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
</head>

<body>
  <?php include_once('includes/header2.php'); ?>

  <!-- home page  -->
  <div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1 class="hero-title">Where Every Style Tells A Story</i></h1>
          <p class="hero-text" style="font-size: 1px;"><strong><span style="font-size: 48px;">Empowering Beauty Enriching Lives</span></strong></p>';
          <p class="hero-text2"><strong>ANY TIME ANYWHERE "24X7" OPEN</strong> </p>
          <a href="login.php" class="btn btn-default">Make an Appointment <i class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- home page end -->

  <!-- about us section-->
  <div class="space-medium bg-default">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt=""
            class="img-responsive"></div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="well-block">
            <?php
            $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

              ?>
              <h1>
                <?php echo $row['PageTitle']; ?>
              </h1>
              <h5 class="small-title ">Exceptional Beauty Services</h5>
              <p>
                <?php echo $row['PageDescription']; ?>
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about us section end-->

  <h2 class="mission_vision-title">Misson & Vision</h2>

<!-- mission vision section -->
<section class="mission-vision">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="mission">
          <h3>Our Mission <i class="fa fa-user-secret"></i></h3>
          <p>At our salon management system, our mission is to provide top-notch salon services to our clients by
            using high-quality products, providing personalized attention, and creating a relaxing atmosphere. We
            strive to exceed our clients' expectations by staying up-to-date with the latest trends and techniques,
            while also maintaining an eco-friendly and sustainable approach to our business.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="vision">
          <h3>Our Vision <i class="fa fa-opencart"></i></h3>
          <p>Our vision is to become a leading salon management system by empowering salon owners to streamline their
            operations, enhance their customer experiences, and increase their profitability. We aim to achieve this
            vision by leveraging cutting-edge technology, fostering a culture of innovation and collaboration, and
            providing unparalleled customer service to our clients.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- mission vision end -->
  

  <!-- what we do section -->
  <div class="what-we-do">
    <h2>What We Do</h2>
    <ul>
      <li> <i class="fa fa-check-circle-o"></i> <b>Haircuts:</b> Stay on trend with our professional haircuts, designed to complement your style and personality.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Bridal Dressing: </b>Our bridal experts create stunning looks tailored to make your special day unforgettable.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Fantasy Makeup: </b>Unleash your creativity with our fantasy makeup services, perfect for special events or photoshoots.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Facials: </b>Rejuvenate your skin with our luxurious facial treatments, customized to your skin type and needs.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Hair Colouring: </b>Transform your look with our expert hair coloring services, offering a range of shades from subtle highlights to bold fashion colors.
    </ul>
  </div>
  <!-- what we do section end -->


  <!-- why choose us section -->
  <section id="why-choose">
    <div class="container">
      <h2 class="section-title">Why Choose Us?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-scissors"></i>
            <h3>Experienced Stylists</h3>
            <p>our stylists bring years of experience and a commitment to staying up-to-date with the latest styles and techniques. You can trust our team to provide expert care and exceptional results.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-trophy"></i>
            <h3>Quality Service</h3>
            <p>We pride ourselves on delivering top-notch service, ensuring every customer leaves our salon looking and feeling their best.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-money"></i>
            <h3>Affordable Prices</h3>
            <p>Our Salon offers competitive prices and a variety of packages and deals to ensure you get the most value for your money. We believe in making exceptional beauty services accessible to everyone.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose us section end-->


  <!-- our services section -->
  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service">
            <img src="images\bridall.jpg" alt="Haircut">
            <h3>Bridal Dressing <i class="fa fa-paint-brush"aria-hidden="true"></i> </h3>
            <p>Our bridal experts work closely with you to create a stunning look for your special day, ensuring you feel beautiful and confident as you walk down the aisle.</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images\color hair.jpg" alt="Color">
            <h3>Hair Coloring <i class="fa fa-adjust"></i> </h3>
            <p> Transform your look with our expert hair coloring services, offering a range of options from subtle highlights to bold, vibrant hues.</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images\fantacy1.jpg" alt="Color">
            <h3>Fantasy Makeup <i class="fa fa-adjust"></i> </h3>
            <p> Whether for a special event or photoshoot, our creative makeup artists will craft a unique and eye-catching look that stands out.</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images\cut.jpg" alt="Color">
            <h3>Hair Cut <i class="fa fa-adjust"></i> </h3>
            <p> From classic styles to modern trends, our skilled stylists will give you a haircut that complements your personality and enhances your features.</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images\facial.jpg" alt="Styling">
            <h3>Facials<i class="fa fa-hand-peace-o"></i></h3>
            <p>Our luxurious facial treatments are designed to rejuvenate and refresh your skin, tailored to your specific skin type and concerns.</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our services section end-->


  <!-- photo gallery section -->
  <section class="gallery">
    <h2>Photo Gallery</h2>
    <div class="gallery-container">
      <img src="images\bride4.jpg" alt="Photo 1">
      <img src="images\bride hindi.png" alt="Photo 2">
      <img src="images\cut 1.jpg" alt="Photo 3">
      <img src="images\faceee.jpg" alt="Photo 4">
      <img src="images\color hair 2.jpg" alt="Photo 5">
      <img src="images\fantyy.jpg" alt="Photo 6">
    </div>
  </section>
  <!-- photo gallery section end here-->


  <!-- book appointment section -->
  <div class="space-small bg-primary">
    <!-- call to action -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
          <h1 class="cta-title">Book your online Appointment</h1>
        </div>
        <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
          <a href="login.php" class="btn btn-white btn-lg mt20">Book Appointment <i
              class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- book appointment section end -->

  
  <!-- /.footer-->
  <?php include_once('includes/footer2.php'); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menumaker.js"></script>
  <!-- sticky header -->
  <script src="js/jquery.sticky.js"></script>
  <script src="js/sticky-header.js"></script>


  <!-- javascript for mission vision -->
  <!-- <script>
    const elts = {
      text1: document.getElementById("text1"),
      text2: document.getElementById("text2")
    };

    const texts = [
      "OUR",
      "SALON",
      "MISSION",
      "AND",
      "VISION",
      ":)",

    ];

    const morphTime = 1;
    const cooldownTime = 0.25;

    let textIndex = texts.length - 1;
    let time = new Date();
    let morph = 0;
    let cooldown = cooldownTime;

    elts.text1.textContent = texts[textIndex % texts.length];
    elts.text2.textContent = texts[(textIndex + 1) % texts.length];

    function doMorph() {
      morph -= cooldown;
      cooldown = 0;

      let fraction = morph / morphTime;

      if (fraction > 1) {
        cooldown = cooldownTime;
        fraction = 1;
      }

      setMorph(fraction);
    }

    function setMorph(fraction) {
      elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
      elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

      fraction = 1 - fraction;
      elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
      elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

      elts.text1.textContent = texts[textIndex % texts.length];
      elts.text2.textContent = texts[(textIndex + 1) % texts.length];
    }

    function doCooldown() {
      morph = 0;

      elts.text2.style.filter = "";
      elts.text2.style.opacity = "100%";

      elts.text1.style.filter = "";
      elts.text1.style.opacity = "0%";
    }

    function animate() {
      requestAnimationFrame(animate);

      let newTime = new Date();
      let shouldIncrementIndex = cooldown > 0;
      let dt = (newTime - time) / 1000;
      time = newTime;

      cooldown -= dt;

      if (cooldown <= 0) {
        if (shouldIncrementIndex) {
          textIndex++;
        }

        doMorph();
      } else {
        doCooldown();
      }
    }

    animate();
  </script> -->
  <!-- javascript for mission vision end -->

</body>

</html>