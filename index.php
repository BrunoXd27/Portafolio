<?php
include ('qrys\videoPortada.php');


$vPortada = refVideoPortada();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Karla Espino</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!--<i class="bi bi-camera"></i> -->
        <h1>Karla Espino</h1>
        <p>Dise&ntilde;adora multimedia | Artista digital</p>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Inicio</a></li>
          <li><a href="about.php">acerca de mi</a></li>
          <li><a href="contact.php">Contacto</a></li>
          <li><a class="login" href="login.html"><i class="bi bi-bucket-fill"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>I'm <span>Karla Espino</span> a Professional Photographer from New York City</h2>
          <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero.
            Qui voluptas amet.</p>
          <a href="contact.php" class="btn-get-started">Disponible para contrataci&oacute;n</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <div id="video-container" class="video-container d-flex justify-content-center">
      <div>
        <video autoplay controls muted loop class="video">
          <source src="<?php echo $vPortada; ?>" type="video/mp4">

          <!-- <source src="assets/img/gallery/Portafolio-animado.mp4" type="video/mp4"> -->
        </video>
      </div>
    </div>

    <div class="categories">
      <ul>
        <li><a href="#ilus">Ilustraci&oacute;n</a></li>
        <li><a href="#design">Dise&ntilde;o de personaje</a></li>
        <li><a href="#edition">Edici&oacute;n de video</a></li>
        <li><a href="#animation">Animaci&oacute;n</a></li>
      </ul>
    </div>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="category">
        <h2 id="ilus">Ilustraci&oacute;n</h2>
      </div>

      <div class="container-fluid Ilustracion">
        <div class="row gy-4 justify-content-center">

          <?php

          $directorio = "assets\img\ilustraciones";
          $archivos = scandir($directorio);
          foreach ($archivos as $archivo) {
            if ($archivo != "." && $archivo != "..") {
              $rutaArchivo = $directorio . DIRECTORY_SEPARATOR . $archivo;
              ?>


              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                  <!-- <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""> -->
                  <img src="<?php echo $rutaArchivo; ?>" class="img-fluid" alt="">
                  <div class="gallery-links d-flex align-items-center justify-content-center">
                    <a href="<?php echo $rutaArchivo; ?>" title="Gallery 1" class="glightbox preview-link"><i
                        class="bi bi-arrows-angle-expand"></i></a>
                  </div>
                </div>
              </div>

              <?php
            }
          }
          ?>

        </div>
      </div>

      <div class="category">
        <h2 id="design">Dise&ntilde;o de personaje</h2>
      </div>
      <div class="container-fluid Design_personaje">
        <div class="row gy-4 justify-content-center">

          <?php

          $directorio = "assets\img\diseñoPersonaje";
          $archivos = scandir($directorio);
          foreach ($archivos as $archivo) {
            if ($archivo != "." && $archivo != "..") {
              $rutaArchivo = $directorio . DIRECTORY_SEPARATOR . $archivo;
              ?>


              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                  <!-- <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""> -->
                  <img src="<?php echo $rutaArchivo; ?>" class="img-fluid" alt="">
                  <div class="gallery-links d-flex align-items-center justify-content-center">
                    <a href="<?php echo $rutaArchivo; ?>" title="Gallery 1" class="glightbox preview-link"><i
                        class="bi bi-arrows-angle-expand"></i></a>
                    <!-- <a href="forms\eliminar_imagen_Cat.php" title="Gallery 5" class="glightbox preview-link"><i -->
                    <a href="forms\eliminar_imagen_Cat.php?dato=<?php echo $rutaArchivo ?>"><i class="bi bi-x-lg"></i></a>
                  </div>
                </div>
              </div>

              <?php
            }
          }
          ?>

        </div>
      </div>

      <div class="category">
        <h2 id="edition">Edici&oacute;n de video</h2>
      </div>
      <div class="container-fluid Edicion_video">
        <div class="row gy-4 justify-content-center">

          <?php

          $directorio2 = "assets\img\\editVideo";
          $archivos = scandir($directorio2);
          foreach ($archivos as $archivo) {
            if ($archivo != "." && $archivo != "..") {
              $rutaArchivo = $directorio2 . DIRECTORY_SEPARATOR . $archivo;
              ?>


              <div class="col-xl-6 col-lg-4 col-md-6">
                <div class="gallery-item h-100 d-flex align-items-center">
                  <div>
                    <video class="video-gallery">
                      <source src="<?php echo $rutaArchivo; ?>" type="video/mp4" class="img-fluid">
                    </video>
                  </div>
                  <div class="gallery-links d-flex align-items-center justify-content-center">
                    <a href="<?php echo $rutaArchivo; ?>" class="glightbox preview-link"><i
                        class="bi bi-arrows-angle-expand"></i></a>

                  </div>
                </div>
              </div><!-- End Gallery Item -->




              <?php
            }
          }
          ?>

        </div>
      </div>

      <div class="category">
        <h2 id="animation">Animaci&oacute;n</h2>
      </div>
      <div class="container-fluid Animacion">
        <div class="row gy-4 justify-content-center">

          <?php

          $directorio2 = "assets\img\\Animacion";
          $archivos = scandir($directorio2);
          foreach ($archivos as $archivo) {
            if ($archivo != "." && $archivo != "..") {
              $rutaArchivo = $directorio2 . DIRECTORY_SEPARATOR . $archivo;
              ?>
              <div class="col-xl-6 col-lg-4 col-md-6">
                <div class="gallery-item h-100 d-flex align-items-center">
                  <div>
                    <video class="video-gallery">
                      <source src="<?php echo $rutaArchivo; ?>" type="video/mp4" class="img-fluid">
                    </video>
                  </div>
                  <div class="gallery-links d-flex align-items-center justify-content-center">
                    <a href="<?php echo $rutaArchivo; ?>" class="glightbox preview-link"><i
                        class="bi bi-arrows-angle-expand"></i></a>
                  </div>
                </div>
              </div><!-- End Gallery Item -->

              <?php
            }
          }
          ?>


        </div>
      </div>
      </div>
      </div>

    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Donaciones a la cuenta de karlamichelespinoarriaga@gmail.com <a href="https://www.paypal.com/mx/home"><i class="bi bi-paypal"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>