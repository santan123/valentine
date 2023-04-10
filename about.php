<?php
session_start();
require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us|<?= $_ENV['APP_NAME']; ?></title>
  <?php require_once __DIR__ . "/inc/head.php"; ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



</head>

<body id="body" class="body-wrapper static">
  <div class="se-pre-con"></div>
  <div class="main-wrapper">
    <!-- HEADER -->
    <?php require_once __DIR__ . "/inc/header.php"; ?>

    <!-- PAGE TITLE SECTION -->
    <section class="clearfix pageTitleArea" style="background-image: url(img/blog/pageTitle-bg.jpg);">
      <div class="container">
        <div class="pageTitle">
          <h1>About Us</h1>
        </div>
      </div>
    </section>


    <!-- ABOUT SECTION -->
    <section class="container-fluid clearfix aboutSection patternbg">
      <div class="aboutInner">
        <div class="sepcialContainer">
          <div class="row">
            <div class="col-sm-6 col-xs-12 rightPadding">
              <div class="imagebox ">
                <img class="img-responsive lazyestload" data-src="img/home/home-about.jpg" src="img/home/home-about.jpg" alt="Image About">
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="aboutInfo">
                <h2><?= $_ENV['APP_NAME']; ?></h2>
                <p>Welcome to our ecommerce website, where three bright and creative students have come together to bring you a unique online shopping experience. Our team has pooled our diverse talents and skills to create a platform that seamlessly combines cutting-edge technology with modern design to deliver exceptional service.

                  We understand the challenges of online shopping and the importance of a user-friendly interface. That's why we've made it our mission to create an ecommerce website that's not only easy to use but also enjoyable to explore. From our carefully curated selection of products to our secure checkout process, we strive to ensure that our customers have the best possible experience.

                  At the heart of our project is a passion for innovation and a commitment to excellence. We believe that every detail matters, and we've gone the extra mile to ensure that our website is not only aesthetically pleasing but also functionally robust. Our team has leveraged the latest technologies and design trends to create a website that's both visually stunning and incredibly responsive.

                  We invite you to explore our website and experience the passion, creativity, and intelligence that went into its creation. We're confident that you'll love what you find, and we look forward to serving you for many years to come. Thank you for choosing our ecommerce website, and we hope to exceed your expectations with every visit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






    <!-- FOOTER -->
    <?php require_once __DIR__ . "/inc/footer.php"; ?>

  </div>





  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src='plugins/selectbox/jquery.selectbox-0.1.3.min.js'></script>
  <script src='plugins/owl-carousel/owl.carousel.min.js'></script>

  <script src="js/mailchimp.js"></script>


  <script src='plugins/datepicker/bootstrap-datepicker.min.js'></script>

  <script src="plugins/lazyestload/lazyestload.js"></script>


  <script src="plugins/smoothscroll/SmoothScroll.js"></script>


  <script src="js/custom.js"></script>

  <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");
    });
  </script>

</body>

</html>