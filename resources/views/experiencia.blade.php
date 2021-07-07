@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('experiencia')}}">Experiencia</a></li>
          <!-- -->
          <li class="list-inline-item text-white h3 font-secondary nasted">Nacional e Internacional</li>
        </ul>
        <!--
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">

    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Nacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>


    <div class="row">
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">

                <figure class="snip0015">
                  <img src="{{asset('images/images/img_mapnac2.jpg')}}" class="img-fluid w-100">
                	<figcaption>
                    <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                		<h2><span></span></h2>
                		<p style="color:#fff; font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                		<a></a>
                	</figcaption>
                </figure>



              </div>
              <div class="col-3">

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><span class="dot" style="background-color: #890524;"></span></th>
      <th scope="col">Experiencia de profesionales</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #7A2599;"></span></th>
      <td>Competitividad y Desarrollo</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #C00000;"></span></th>
      <td>Política y Gestión Pública</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #00B050;"></span></th>
      <td>Estudios Económicos</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #E46C0A;"></span></th>
      <td>Inversiones</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #0070C0;"></span></th>
      <td>Legal</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #31859C;"></span></th>
      <td>CCD Tech</td>

    </tr>
  </tbody>
</table>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <!--
        <h3>Sobre el servicio</h3>
        <p>Poner algo referido a la experiencia nacional.</p>-->
      </div><!--
      <div class="col-12 mb-4">
        <h3 class="mb-3">Elaboración de planes de competitividad</h3>
        <div class="col-12 px-0">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-styled">
                <li>Estudio de Competitividad de la Minería en el Perú.</li>
                <li>Plan de Competitividad de Moquegua, Loreto, Piura (Sechura) y Apurímac.</li>

              </ul>
            </div>

            <div class="col-md-6">
              <ul class="list-styled">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>-->

      <!--
      <div class="col-12 mb-4">
        <h3 class="mb-3">Obras por impuestos: Asistencia técnica especializada</h3>
        <ul class="list-styled">
          <li>Gobierno regional y municipios de Ancash por S./336 millones (edificaciones, saneamiento, salud y vial)</li>
          <li>Provincia de Mariscal Nieto, Moquegua(instalación del sistema de agua potable y alcantarillado).</li>
          <li>Gobierno regional de Moquegua y municipalidades de la región.</li>
          <li>Estructuración de un mecanismo para financiar proyectos de inversión pública en la región Apurímac.</li>
        </ul>
      </div>-->



    </div>
  </div>
</section>


<!-- section -->
<section class="section-sm">
  <div class="container">

    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Internacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-4">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">

                <figure class="snip0015">
                  <img src="{{asset('images/images/img_mapinter2.jpg')}}" class="img-fluid w-100">
                	<figcaption>
                    <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                		<h2><span></span></h2>
                		<p style="color:#fff; font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                		<a href="#"></a>
                	</figcaption>
                </figure>



              </div>
              <div class="col-3">

                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><span class="dot" style="background-color: #890524;"></span></th>
      <th scope="col">Experiencia de profesionales</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #7A2599;"></span></th>
      <td>Competitividad y Desarrollo</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #C00000;"></span></th>
      <td>Política y Gestión Pública</td>

    </tr>
    <tr>
      <th scope="row"><span class="dot" style="background-color: #00B050;"></span></th>
      <td>Estudios Económicos</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #E46C0A;"></span></th>
      <td>Inversiones</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #0070C0;"></span></th>
      <td>Legal</td>

    </tr>

    <tr>
      <th scope="row"><span class="dot" style="background-color: #31859C;"></span></th>
      <td>CCD Tech</td>

    </tr>
  </tbody>
</table>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <!--
        <h3>Sobre el servicio</h3>
        <p>Poner algo referido a la experiencia internacional.</p>-->
      </div>

    </div>
  </div>
</section>

<footer>

  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <!--
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/banner/logoccd.png" alt="logo"></a>-->
          <ul class="list-unstyled">
            <li class="mb-2 letra">Av. del Pinar 124, Urb. Chacarilla del Estanque, SANTIAGO DE SURCO, LIMA (Lima)</li>
            <li class="mb-2 letra"> (01) 688-3302</li>
            <li class="mb-2 letra">melissa.sanchez@ccdcompetitividad.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">CENTRO</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="{{route('nosotros')}}">Nosotros</a></li>
            <li class="mb-3"><a class="text-color letra" href="{{route('servicios')}}">Servicios</a></li>
            <li class="mb-3"><a class="text-color letra" href="{{route('experiencia')}}">Experiencia</a></li>
            <!--
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>-->
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">INTRANET</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="{{route('login')}}">Mi Espacio</a></li>

          </ul>
        </div>
        <!-- support -->

        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">CONTACTO</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color letra" href="{{route('contacto')}}">Contáctenos</a></li>
          </ul>
        </div>
        <!-- support -->
        <!--
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>

</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
