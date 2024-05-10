<?php
include ('qrys\videoPortada.php');

$vPortada = refVideoPortada();


/* $directorioAnimacion = "..\assets\img\ilustraciones";
$archivos = scandir($directorioAnimacion); */
 

?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Contact</title>
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

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!--<i class="bi bi-camera"></i> -->
        <h1>Karla Espino</h1>
        <p>Dise&ntilde;adora multimedia | Artista digital</p>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="about.php">Acerca de mi</a></li>
          <li><a href="contact.php" class="active">Contacto</a></li>
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

  <main id="main" class="admin-page" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Categorias</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!--
        <div id="video-container" class="video-container" >
            <video autoplay controls muted loop class="video">
                <source src="assets/img/gallery/KuruKuru.mp4" type="video/mp4">
            </video>
        </div>
        -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="category">
        <h2>Subir o cambiar un video</h2>

        <form action="forms/edit_presentacion.php" method="post" role="form" class="php-edit-form"
          enctype="multipart/form-data">
          <input type="file" name="video" accept="video/*">
          <input type="submit" value="Subir">
        </form>

        <div id="video-container" class="video-container d-flex justify-content-center">
          <div>
            <video autoplay controls muted loop class="video">
              <source src="<?php echo $vPortada; ?>" type="video/mp4">
              <!-- <source src="assets/img/gallery/Portafolio-animado.mp4" type="video/mp4"> -->
            </video>
          </div>
        </div>
      </div>

      <div class="category-edit">
        <h2 id="ilus">Ilustraci&oacute;n</h2>
        <form action="forms\edit_Cat_Ilustracion.php" method="post" role="form" class="php-edit-form"
          enctype="multipart/form-data">
          <input type="file" name="imagen" accept="image/*" required>
          <input type="submit" value="Subir">
        </form>
      </div>

      <!-- ************************************************************************** -->

    
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
              <img src="<?php echo $rutaArchivo;?>" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="<?php echo $rutaArchivo;?>" title="Gallery 1" class="glightbox preview-link"><i
                    class="bi bi-arrows-angle-expand"></i></a>
                    <!-- <a href="forms\eliminar_imagen_Cat.php" title="Gallery 5" class="glightbox preview-link"><i -->
                    <a href="forms\eliminar_imagen_Cat.php?dato=<?php echo $rutaArchivo?>"><i
                    class="bi bi-x-lg"></i></a>
              </div>
            </div>
          </div>

          <?php 
          }
            }
          ?>

        </div>
      </div>

      

      <!-- **************************************************************** -->

      <div class="category-edit">
        <h2 id="design">Dise&ntilde;o de personaje</h2>
        <form action="forms/edit-description.php" method="post" role="form" class="php-edit-form"
          enctype="multipart/form-data">
          <input type="file" name="imagen" accept="image/*">
          <input type="submit" value="Subir">
        </form>
      </div>

      <div class="container-fluid Design_personaje">
        <div class="row gy-4 justify-content-center">
          
          <!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i
                    class="bi bi-arrows-angle-expand"></i></a>
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i
                    class="bi bi-x-lg"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="category-edit">
        <h2 id="edition">Edici&oacute;n de video</h2>
        <form action="forms/edit-description.php" method="post" role="form" class="php-edit-form"
          enctype="multipart/form-data">
          <input type="file" name="imagen" accept="image/*">
          <input type="submit" value="Subir">
        </form>
      </div>
      <div class="container-fluid Edicion_video">
        <div class="row gy-4 justify-content-center">

          <div class="col-xl-6 col-lg-4 col-md-6">
            <div class="gallery-item h-100 d-flex align-items-center">

              <div>
                <video class="video-gallery">
                  <source src="assets/img/gallery/KuruKuru.mp4" type="video/mp4" class="img-fluid">
                </video>
              </div>
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/KuruKuru.mp4" class="glightbox preview-link"><i
                    class="bi bi-arrows-angle-expand"></i></a>
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i
                    class="bi bi-x-lg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>
      </div>

      <div class="category-edit">
        <h2 id="animation">Animaci&oacute;n</h2>
        <form action="forms/edit-description.php" method="post" role="form" class="php-edit-form"
          enctype="multipart/form-data">
          <input type="file" name="imagen" accept="image/*">
          <input type="submit" value="Subir">
        </form>
      </div>
      
      <div class="container-fluid Animacion">
        <div class="row gy-4 justify-content-center">

          <div class="col-xl-6 col-lg-4 col-md-6">
            <div class="gallery-item h-100 d-flex align-items-center">
              <div>
                <video class="video-gallery">
                  <source src="assets/img/gallery/KuruKuru.mp4" type="video/mp4" class="img-fluid">
                </video>
              </div>
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/KuruKuru.mp4" class="glightbox preview-link"><i
                    class="bi bi-arrows-angle-expand"></i></a>
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i
                    class="bi bi-x-lg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>
      </div>

    </section><!-- End Gallery Section -->

    <div class="page-edit d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Acerca de mi</h2>
          </div>
        </div>
      </div>
    </div>

    <form action="forms/edit-description.php" method="post" role="form" class="php-edit-form"
      enctype="multipart/form-data">
      <div class="d-flex justify-content-center mt-4">
        <div class="col-lg-6 row">
          <ul class="description-edit">
            <li><i class="bi bi-chevron-right"></i> <strong>Foto de perfil:</strong>
              <input type="file" name="imagen" accept="image/*">
            </li>
            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>21</span>
              <div class="form-group">
                <input type="number" name="age" class="form-control" id="age" placeholder="21" required>
              </div>
            </li>
            <li><i class="bi bi-chevron-right"></i> <strong>Estudios:</strong> <span>Licenciatura en dise&ntilde;o
                multimedia y arte digital</span>
              <div class="form-group">
                <input type="text" class="form-control" name="studies" id="studies"
                  placeholder="Licenciatura en dise&ntilde;o multimedia y arte digital" required>
              </div>
            </li>
            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>email@example.com</span>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
              </div>
            </li>
            <li><i class="bi bi-chevron-right"></i> <strong>Disponibilidad:</strong> <span>Quiero chambear</span>
              <div class="switch-button d-flex align-items-center">
                <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                <label for="switch-label" class="switch-button__label"></label>
              </div>
            </li>
          </ul>
          <li><i class="bi bi-chevron-right"></i> <strong>Descripci&oacute;n:</strong>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="10"
                placeholder="Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                        Recusandae est praesentium consequatur eos voluptatem. Vitae dolores aliquam itaque odio nihil. Neque ut neque ut quae voluptas. Maxime corporis aut ut ipsum consequatur. Repudiandae sunt sequi minus qui et. Doloribus molestiae officiis.
                        Soluta eligendi fugiat omnis enim. Numquam alias sint possimus eveniet ad. Ratione in earum eum magni totam." required></textarea>
            </div>
          </li>
        </div>
      </div>
      <div class="my-3 text-center">
        <div class="loading">Cargando</div>
        <div class="error-message">Error al aplicar los cambios</div>
        <div class="sent-message">Se ha modificado la informaci&oacute;n</div>
      </div>
      <div class="text-center"><button type="submit">Aplicar cambios</button></div>
    </form>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="retoof" class="retoof">
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