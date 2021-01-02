<?php 

include "../config/route.php";

include "../config/config.php";

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="author" content="Kevin Orrego">
    <meta name="description" content="">
    <meta name="keywords" content=""/>
    <meta name="copyright" content="Kevin Orrego" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="cache-control" content="3600" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$appName?></title>

    <link rel="icon" href="assets/media/<?=$icoName?>.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?=$serve?>assets/styles/colores.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/margin.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/padding.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/hw.css">
    <link rel="stylesheet" href="<?=$serve?>assets/styles/st1.css">
  </head>
  <body>
    <div class="bg-3">
      <div class="py-1 container">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://kevaosportafolio.000webhostapp.com/" target="_blank"><i class="fas fa-info-circle"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="http://github.com/KEVAO18" target="_blank"><i class="fab fa-github"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://www.facebook.com/KEVAO18/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://twitter.com/KevaoD" target="_blank"><i class="fab fa-twitter"></i></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link top-bar" href="https://wa.me/573126899514" target="_blank"><i class="fab fa-whatsapp"></i></i></a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top scrolling-navbar color-2">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="<?=$serve?>home">
          <?=$appName?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=$serve?>About">Sobre Mí</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?=$serve?>proyects">Proyectos</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="<?=$serve?>CM">Contactame</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      routes();
    ?>
	<footer class="page-footer font-small bg-main">

        <div class="bg-3">

          <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Come on</h6>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>

        </div>

      <div class="container pt-4">
        <div class="row text-white">
          <div class="col-sm-12 col-md-8 py-2">
              <h5>Founder</h5>
              <p><?=$autor?> <br><span class="sub">(FullStack web developer)</span></p>
              <p class="sub"><?=$date ?></p>
          </div>
          <div class="col-sm-12 col-md-4 py-2">
			  <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <p>
                <i class="fas fa-envelope mr-3"></i> <?=$email?></p>
              <p>
                <i class="fas fa-phone mr-3"></i> +57 312 689 9514</p>
          </div>
        </div>
      </div>
        <center class="text-white p-2">
          © 2019 Copyright: <?=$appName?>.
        </center>
    </footer>
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152770313-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-152770313-1');
    </script>
    <!-- B -->
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!-- scripts -->
  </body>
</html>