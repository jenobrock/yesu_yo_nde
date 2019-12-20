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
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header tit-up">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Besoin de Prière
            personnelle</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body customer-box row">
          <div class="col-md-12">
            <div class="container">
              <div class="col-md-12">
                  <i class="fa fa-phone"></i>
                +24385963215
              </div>
              <div class="col-md-12">
                  <i class="fa fa-send"></i> +24385963215
              </div>
              <div class="col-md-12">
                  <i class="fa fa-google-plus"></i> info@gmail.com
              </div>
              <div class="col-md-12">
                 Nous sommes a votre ecoute
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
    <section id="lect">
      <div class="col-md-12">
        <header class="section-header">
          <h3>Prions ensemble</h3>
        </header>
        <div id="ok" class="col-md-7 ">
        <?php
        include('vues/prierevues.php');
        $h=new prierevues();
        $h->tous();
        ?>
        </div>
      </div>
      <div class="col-md-12">
        <div><img src="" alt="" srcset=""></div>
      </div>
    </section>
    <section>
      <div id="priere" class="container">
        <div class="col-md-12">
          <a class="col-md-4" data-toggle="modal" data-target="#login">Prière Personnelle</a>
          <a class="col-md-4" href="conseils.php">Conseil</a>
        </div>
      </div>
    </section>

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