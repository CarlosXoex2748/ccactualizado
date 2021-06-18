<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Centro para la Competitividad y el Desarrollo</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <!-- FontAWESOME -->
  <script src="https://kit.fontawesome.com/6dc1873447.js"></script>
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  <link href="{{asset('css/font.css')}}" rel="stylesheet">
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

</head>
<body>
<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center text-lg-left">
            <a class="text-color mr-3" href="callto:+443003030266"><strong>Teléfono</strong> (01) 688-3302</a>
            <a class="text-color mr-3" href="https://api.whatsapp.com/send?phone=51922753771"><strong><i class="fab fa-whatsapp"></i> WhatsApp</strong> 922753771</a>

          <!--
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>-->
        </div>
        <div class="col-lg-4 text-center text-lg-right">
          <ul class="list-inline">
            
          <a class="btn btn-outline-dark" href="{{route('login')}}" role="button">Iniciar Sesión</a>
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            -->
            <!--
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">Registrarse</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>



  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{route('inicio')}}"><img src="{{asset('images/banner/logoccd.png')}}"
          alt="logo" height="50px" width="90%"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@about">
              <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="{{route('servicios')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Servicios
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('servicio_competitividad')}}">Desarrollo y Competividad</a>
              <a class="dropdown-item" href="{{route('servicio_gestion')}}">Politica y Gestion Publica</a>
              <a class="dropdown-item" href="{{route('servicio_estudios')}}">Estudios Economicos</a>
              <a class="dropdown-item" href="{{route('servicio_inversiones')}}">Inversiones</a>
              <a class="dropdown-item" href="{{route('servicio_legal')}}">Legal</a>
              <a class="dropdown-item" href="{{route('servicio_tech')}}">CCD TECH</a>
            </div>
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{route('experiencia')}}">Publicaciones</a>   
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="{{route('contacto')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Contacto
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('contacto')}}">Contactanos</a>
                <a class="dropdown-item" href="{{route('empleos')}}">Trabaja Con Nosotros</a>
              </div>
            <li class="nav-item"><a class="nav-link">|</a></li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Lenguaje
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('set_locale', 'es')}}">Español</a>
                <a class="dropdown-item" href="{{route('set_locale', 'en')}}">English</a>
              </div>
            
          </ul> 
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- SECTION-->

@yield('content')

<!-- footer -->
<footer>
  <section class="section pt-02">
    <div class="container">
      <div class="row" >
        <div class="col-12 text-center">
            <h2  class="section-title">Contactenos</h2>
        </div>
        <div class="col-12 col-md-6 col-lg-6 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.995785485305!2d-76.99139458473252!3d-12.11244059142359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ec9124d10b%3A0x2a27a88a61ba5adb!2sAv.+del+Pinar+124%2C+Lima+15038!5e0!3m2!1ses-419!2spe!4v1562865250978!5m2!1ses-419!2spe" 
          width=100% height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <ul class="list-unstyled">
            <li class="mb-4 letra1"><a class="text-color letra1" href="https://goo.gl/maps/opa4MWF4P7NTudCQ9"><i class="fas fa-map-marked-alt"></i> Av. del Pinar 124, Urb. Chacarilla del Estanque
              , Santiago de Surco, Lima (Lima)</li>
            <li class="mb-4 letra1"><a class="text-color letra1" href="#"><i class="fas fa-phone-alt"></i> (01) 688-3302</li>
            <li class="mb-4 letra1"><a class="text-color letra1" href="https://api.whatsapp.com/send?phone=51922753771"><i class="fab fa-whatsapp"></i> 922753771</li>
            <li class="mb-4 letra1"><a class="text-color letra1" href="melissa.sanchez@ccdcompetitividad.com"><i class="far fa-envelope"></i> melissa.sanchez@ccdcompetitividad.com</li>
        </ul>
        </div>
      </div>

    </div>
  </section>
  
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container"> 
      <div class="row">
        <!-- company -->
        <div class="col-12 col-md-3 col-sm-4">
          <h4 class="text-white mb-0">CENTRO</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color letra" href="{{route('nosotros')}}">Nosotros</a></li>
            <li class="mb-4"><a class="text-color letra" href="{{route('servicios')}}">Servicios</a></li>
            <li class="mb-4"><a class="text-color letra" href="{{route('experiencia')}}">Experiencia</a></li>
            <!--
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>-->
          </ul>
        </div>
        <!-- links -->
        <div class="col-12 col-md-3 col-sm-4">
          <h4 class="text-white mb-5">INTRANET</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color letra" href="{{route('login')}}">Iniciar Sesión</a></li>
          </ul>
        </div>
        <!-- support -->

        <div class="col-12 col-md-3 col-sm-4">
          <h4 class="text-white mb-5">CONTACTO</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color letra" href="{{route('contacto')}}">Contáctanos</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-12 col-md-3 col-sm-4">
          <h4 class="text-white mb-5">REDES SOCIALES</h4>
          <ul class="mg-6 redes align-center">
            <li class=" redes"><a class="text-color redes" href=""><i class="fas fa-envelope-square"></i></a></li>
         
            <li class=" redes"><a class="text-color redes" href=""><i class="fab fa-facebook-square"></i></a></li>
         
            <li class=" redes"><a class="text-color redes" href=""><i class="fab fa-whatsapp-square"></i></a></li>
          
            <li class="redes"><a class="text-color redes" href=""><i class="fab fa-linkedin"></i></a></li>
          
            <li class="redes"><a class="text-color redes" href=""><i class="fas fa-envelope-square"></i></a></li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->

</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{asset('plugins/mixitup/mixitup.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
