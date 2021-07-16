@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Estudios Económicos</li>
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
    <div class="row align-items-center mb-2">
      <div class="col-xl- order-1 col-sm-6 mb-4 mb-xl-0">
        <h2 data-aos="fade-right" data-aos-duration="2000"> Estudios Económicos</h2>
      </div>
   
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3  data-aos="fade-right" data-aos-duration="2000">Sobre el servicio</h3>
        <p data-aos="fade-right" data-aos-duration="2000">Promover el desarrollo sostenible del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
      </div>

      <div class="col-6 mb-4">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Desarrollo Económico</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Estudio sobre beneficios de la minería en Perú.</li>
          <li>Estudio sobre el desarrollo regional y nacional del Cinturón de cobre del Norte del Perú.</li>
          <li>Diseño y elaboración de indicadores estratégicos de competitividad e impacto de la Minería Peruana.</li>
          <li>Elaboración de indicadores y propuestas para mejorar la competitividad de la industria exportadora No tradicional.</li>
          <li>Análisis sobre la potencialidad económica de la región San Martín.</li>
        </ul>
      </div>
      
        <div class="col-6 mb-4"  data-aos="zoom-in" data-aos-duration="2000" >
          <!-- course thumb -->
          <img src="{{asset('images/services/estudios_economicos.jpg')}}" class="img-fluid w-100 zoom-out">
        </div>
    

       <div class="col-12 mb-4"  data-aos="fade-right" data-aos-duration="2000">
        <h3 class="mb-3">Sostenibilidad institucional</h3>
        <ul class="list-styled">
          <li>Elaboración de Manuales de Continuidad para la Superintendencia de Mercado de Valores: Planes de Continuidad del negocio
          y seguridad de información, y manuales de Política de Inversiones, procedimientos administrativos, financieros.</li>
        </ul>
      </div>
      <!--
      <div class="col-12 mb-4">
        <h3 class="mb-3">Planes y propuestas sociales</h3>
        <ul class="list-styled">
          <li>Evaluación del mercado eco sistémicos en la Amazonía Peruana.</li>
          <li>Puesta en operación de núcleos ejecutores: GORE Loreto.</li>
          <li>Orientación de la intervención económica de la Asociación Savia para el periodo 2012-2015.</li>
          <li>Estudio del sector de recursos naturales no renovables de América Latina.</li>
          <li>Plan de Inversión Social Estratégica en Pisco, Ica.</li>
          <li>Conferencia Anual de Ejecutivos (CADE) 2010.</li>
        </ul>
      </div>
      -->

      <!--
      <div class="col-12 mb-5">
        <h3>Fees and Funding</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
          ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
          labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>-->
      <!-- teacher -->
      <!--
      <div class="col-12">
        <h5 class="mb-3">Teacher</h5>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="media mb-2 mb-sm-0">
            <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
            <div class="media-body">
              <h4 class="mt-0">Sam Somrat</h4>
              Photographer
            </div>
          </div>
          <div class="social-link">
            <h6 class="d-none d-sm-block">Social Link</h6>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="border-bottom border-primary mt-4"></div>
      </div>
      -->
    </div>
  </div>
</section>
<!-- /section -->

<!-- related course -->
<!--
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Related Course</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      course item
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Photography</h4>
            </a>
            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna.</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
          </div>
        </div>
      </div>
       course item
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Programming</h4>
            </a>
            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna.</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
          </div>
        </div>
      </div>
       course item
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">Lifestyle Archives</h4>
            </a>
            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna.</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /related course -->

<!-- footer -->
@endsection
