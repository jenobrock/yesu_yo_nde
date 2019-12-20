<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>Rien que Jesus</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/1.png" rel="icon">
  <link href="img/1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
      <div class="container-fluid">
  
        <div id="logo" class="pull-left">
          <h1><a href="#intro" class="scrollto">Rien Que Jesus</a></h1>
        </div>
  
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="index.php">Accueil</a></li>
            <li><a href="Activites.php">Nos Activités</a></li>
            <li><a href="gallerie.php">Gallerie</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->
  <main id="main">

    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Predications</h3>
        </header>

        <div class="row about-cols">
          <?php
          include('vues/predicationvues.php');
          $h=new predicationvue();
          $h->tous();
          ?>
        </div>

      </div>
    </section>
 
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nos Partenaires</h3>
        </header>

        <div class="owl-carousel clients-carousel">
        <?php
          $h->tous1();
          ?>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Quelques Temoignages</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
        <?php
        
        $h->tous2();
        ?>
        </div>

      </div>
    </section><!-- #testimonials -->


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>Rien que Jésus</h3>
            <p>Rien que Jésus est une plateforme pour la promotion du nom de Jésus Christ, par les differents moyen fes medias(réseaux sociaux, ...) toutes les plateformes de communication <blockquote>" pour que tous flechissent et que toutes langues que Jesus Christ est seigneur a la gloire de Dieu le Père " </blockquote></p>
          </div>
          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rien que Jesus</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Jenovic Nginamau CodeX
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>