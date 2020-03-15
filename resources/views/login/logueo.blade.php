<!DOCTYPE html>
<html lang="zxx">
<head> 
  <title>@yield('titulo')</title>
  <meta charset="UTF-8">
  <meta name="description" content="Cloud 83 - hosting template ">
  <meta name="keywords" content="cloud, hosting, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/index/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/index/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/index/css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/index/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/index/css/style.css"/>
  <link rel="stylesheet" href="css/index/css/animate.css"/>


  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="container">
      <a href="index.html" class="site-logo">
        <img src="img/logo2.png" alt="logo" width="150px" height="110px">
      </a>
      <!-- Switch button -->
      <div class="nav-switch">
        <div class="ns-bar"></div>
      </div>
      <div class="header-right">
        <ul class="main-menu">
          <!-- <li class="active"><a href="index.html">Inicio</a></li> -->
         <!--  <li><a href="service.html">Servicios</a></li>
          <li><a href="blog.html">Nuevas cosas</a></li>
          <li><a href="contact.html">Contactanos</a></li> -->
        </ul>
        <div class="header-btns">
          <a href="inicio" class="site-btn sb-c2">Iniciar Sesion</a>
          <a href="regis" class="site-btn sb-c3">Registrar</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Header section end -->


  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="img/index/3050604.jpg">
        <div class="container">
          <h2 background="#000">AnimalHome</h2>
          <h3><p>El mejor lugar para tu mascota,</p></h3>
          <p></p>
          <div class="clearfix"></div>
          <a href="regis" class="site-btn sb-c1">Registrate</a>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="img/index/head.jpg">
        <div class="container">
          <h2>AnimalHome</h2>
          <p>El mejor lugar para los mejores cuidado de tu mascota</p>
          <div class="clearfix"></div>
          <a href="regis" class="site-btn sb-c1">Registrate</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end -->


  <!-- Feature section -->
  <section class="feature-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-4 feature">
          <img src="img/index/firu.jpg" alt="#">
          <h4>Para todo tipo de mascota</h4>
          <p>No importa que tipo de mascota tengas nososotros estamos certificados para tratar todo tipo de animales</p>
        </div>
        <div class="col-md-4 feature">
          <img src="img/index/57129.jpg" alt="#">
          <h4>Los mejores veterinarios</h4>
          <p>Contamos con los mejores veterinarios para el cuidado de tu mascota </p>
        </div>
        <div class="col-md-4 feature">
          <img src="img/index/ODR9LL0.jpg" alt="#">
          <h4>Las mejores instalaciones</h4>
          <p>Contamos con las mejores instalaciones para cuidar las salud de su mejor amigo.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature section end -->

  <!-- Banner section -->
  <section class="banner-section set-bg" data-setbg="img/index/3050604.jpg">
    <div class="container">
      <div class="banner-card">
        <h2>Enfermo tu mejor amigo??</h2>
        <h6>registrate y reserva un cita lo antes posible!!! </h6>
        <a href="regis" class="site-btn sb-c3">Registrate</a>
      </div>
    </div>
  </section>
  <!-- Banner section end -->
  
  <!-- Footer section -->
  <footer class="footer-section">
    <div class="container">
      <div class="footer-nav">
        <ul>
          <li><a href="home.html">Inicio</a></li>
          <li><a href="service.html">Servicios</a></li>
          <li><a href="blog.html">Nuevas cosas</a></li>
          <li><a href="contact.html">Contactanos</a></li>
        </ul>
      </div>
      <div class="social-links">
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
      <div class="copyright">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"> by AnimalHome</i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
      </div>
    </div>
  </footer>
  <!-- Footer section end -->


  <!--====== Javascripts & Jquery ======-->
  <script src="js/index/js/jquery-3.2.1.min.js"></script>
  <script src="js/index/js/bootstrap.min.js"></script>
  <script src="js/index/js/owl.carousel.min.js"></script>
  <script src="js/index/js/jquery.magnific-popup.min.js"></script>
  <script src="js/index/js/circle-progress.min.js"></script>
  <script src="js/index/js/main.js"></script>
  <script src="js/configuraciones/configuracion.js"></script>

  </body>
</html>

<input type="hidden" name="route" value="{{url('/')}}">