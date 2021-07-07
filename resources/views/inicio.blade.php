@extends('layouts.general')

@section('content')
    
<!-- hero slider -->
<div class="hero-slider">
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
      <div class="container">

        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Centro para la competitividad y el desarrollo</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
              del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>

            <!--
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>-->

            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Ver más</a>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="{{asset('images/banner/banner-4.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Fomentando el desarrollo en los lugares más alejados</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
              del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-5.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Gestionando proyectos de desarrollo efectivamente</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
              del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Llevando a cabo estudios económicos en el país</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">El centro para la Competitividad y el Desarrollo (CCD) es una institución cuyo fin es promover el desarrollo sostenible
              del país en base al principio de la competitividad y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Ver más</a>
          </div>
        </div>
      </div>
  </div>
  </section>
  </section>
</div>



<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title" data-aos="fade-down" data-aos-duration="2000">¿Quiénes somos?</h2>
        <div data-aos="fade-right">
          <p align="justify-content-center">En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
          También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.
          Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.
        </p>
        <p>Contáctenos en Miraflores, atendemos a organismos del estado; como gobiernos regionales, locales, de cooperación internacional, entre otros.</p>
        <a href="{{route('nosotros')}}" class="btn btn-primary-outline">Saber más</a>
        </div>
        
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <div class="overflow-hidden" data-aos="fade-left" data-aos-duration="2000">
          <img class="img-fluid w-100 zoom-out" src="images/fotos2021/trabajo.png" alt="about image">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3" data-aos="fade-up" data-aos-duration="2000">Nuestros Servicios</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="{{route('servicios')}}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block" data-aos="fade-left">Ver todos</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
    <div class="row justify-content-center">
      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
          <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_competitividad.jpg" alt="course thumb">
          </div>
          <div class="card-body">
            <div class="d-flex flex-column justify-content-between">
              <a href="{{asset('servicios/servicio_competitividad')}}">
                <h4 class="card-title">Desarrollo y Competitividad</h4>
              </a>
              <p class="card-text mb-4"> Alcance comunal, distrital, provincial y regional. Competitividad y planes de desarrollo. Instituciones Públicas y negocios , como sectores económicos. </p>
                <a href="{{asset('servicios/competitividad_desarrollo')}}" class="btn btn-primary btn-sm">Detalles</a>
            </div>
          </div>
        </div>
      </div>


      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
          <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_politicas.jpg" alt="course thumb">
          </div>
          <div class="card-body">
 
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/gestion_politica')}}">
              <h4 class="card-title">Política y Gestión Pública</h4>
            </a>
            <p class="card-text mb-4"> Políticas públicas, estrategias y acciones sustentables en educación, salud e infraestructura.
              Sustentabilidad  y finanzas públicas.</p>

               <a href="{{asset('servicios/gestion_politica')}}" class="btn btn-primary btn-sm">Detalles</a>
        
          </div>
        </div>
        </div>
      </div>
      
      <!-- CAMBIAR IMAGEN TAMAÑO IGUAL PARA TODOS LOS ITEMSS -->

      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
            <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_estudios.jpg" alt="course thumb">
          </div>
          <div class="card-body">
      
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/estudios_economicos')}}">
              <h4 class="card-title">Estudios Económicos</h4>
            </a>
            <p class="card-text mb-4"> Promover el desarrollo sostenible del país en base al principio de la competitividad y de esta forma mejorar
              la calidad de vida de los ciudadanos.</p>

            <a href="{{asset('servicios/estudios_economicos')}}" class="btn btn-primary btn-sm">Detalles</a>
          </div>
        </div>
      </div>
      </div>

      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_inversion.jpg" alt="course thumb">
          <div class="card-body">
         
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/inversion')}}">
              <h4 class="card-title">Inversiones</h4>
            </a>
            <p class="card-text mb-4"> Público y privados, trabajos por impuestos, Apps. Ips e Inverite.pe. Así como financiamiento e instrumentos de innovación.</p>
            <a href="{{asset('servicios/inversion')}}" class="btn btn-primary btn-sm">Detalles</a>
          </div>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_leyes3.jpg" alt="course thumb">
          <div class="card-body">
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/legal')}}">
              <h4 class="card-title">Legal</h4>
            </a>
            <p class="card-text mb-4"> Administración política y pública, regulación, inversión y fondos sociales.</p>
            <br>
            <br>
            <br>
            <a href="{{asset('servicios/legal')}}" class="btn btn-primary btn-sm">Detalles</a>
          </div>
        </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_tech.jpg" alt="course thumb">
          <div class="card-body">
           <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/tech')}}">
              <h4 class="card-title">CCD Tech</h4>
            </a>
            <p class="card-text mb-4"> Página web para la competitividad y el desarrollo, aplicativos android e iOS para gestión y desarrollo y plataformas virtuales.</p>
            <a href="{{asset('servicios/tech')}}" class="btn btn-primary btn-sm">Detalles</a>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0"  data-aos="fade-right" data-aos-duration="2000">Expertos en el desarrollo y competitividad</h6>
        <h2 class="section-title text-white"  data-aos="fade-left" data-aos-duration="2000"> Únete a Nosotros y vive la experiencia</h2>
        <a href="{{route('contacto')}}" class="btn btn-secondary"  data-aos="fade-up" data-aos-duration="2000">Contáctenos!</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg">
  <div class="container">
    <div class="row" >
      <div class="col-lg-6 col-sm-4 position-relative success-video" data-aos="fade-right" data-aos-duration="2000" >
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video" data-aos="fade-right " data-aos-duration="2000">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5" data-aos="fade-left" data-aos-duration="2000">
          <h2 class="section-title" >¿Quiénes somos?</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
          </p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers esta parte conforma el equipo de trabajo de cdd -->
<!-- -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title" data-aos="fade-rigth" data-aos-duration="1000">Nuestro Staff</h2>
      </div>
      <!-- teacher -->

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow " data-aos="fade-up" data-aos-duration="2000">
        
          <a href="{{asset('nosotros/rudylaguna')}}">
            
          <img  class="card-img-top rounded-0 "  src="images/teachers/rudy_laguna.jpg" alt="teacher">
          </a>  
           
          <a href="{{asset('nosotros/rudylaguna')}}">
            <div class="d-flex flex-column justify-content-between text-center">
          <div class="card-body">
            
              <h4 class="headline profile-card-title">Rudy Laguna</h4>
            
            <p>Director del Centro para la Competitividad y el Desarrollo (CCD).</p>
            <a href="{{asset('nosotros/rudylaguna')}}" >
          </div>
            </div>
        </a>
        </div> 
        <br>
      <br>   
      <br>
      </div>
     

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <a href="{{asset('nosotros/vivianasanchez')}}">
          <img class="card-img-top rounded-0" src="images/teachers/viviana_sanchez.jpg" alt="teacher" height=265px>
           <a href="{{asset('nosotros/vivianasanchez')}}">

          <div class="d-flex flex-column justify-content-between text-center">
          <div class="card-body">
            
              <h4 class="card-title">Viviana Sánchez</h4>
            </a>
            <a href="{{asset('nosotros/vivianasanchez')}}">
            <p>Abogada de la Pontificia Universidad Católica del Perú y Máster (LLM) de Georgetown University.  </p>

          </div>
      </div>
        </div><br>
      <br>  
      
      <br>
      </div>
      

   
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/sergio_villegas.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            
            <div class="d-flex flex-column justify-content-between text-center">
            <a>
              <h4 class="card-title">Sergio Villegas</h4>
            </a>
            <p>Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD).</p>
        
          </div>
          </div>
        </div>
        <br>
        <br>  
      </div>
      <br>
      <br>   
      <br>
      <!-- teacher -->

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_alvaro.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a>
              <h4 class="card-title">Álvaro Orozco</h4>
            </a>
            <p>Jefe de proyectos en competitividad y desarrollo del CCD.</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_katherine.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a>
              <h4 class="card-title">Katherine Piedra</h4>
            </a>
            <p>Jefe de proyectos en competitividad y desarrollo y en políticas públicas del Centro para la Competitividad y el Desarrollo (CCD).</p>
            <!--
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_gene.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a>
              <h4 class="card-title">Gene Eduardo Olarte</h4>
            </a>
            <p>Consultor económico en promoción empresarial del Centro para la Competitividad y el Desarrollo (CCD). </p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <br>

      <!-- teacher -->

    </div>
    
  </div>
  <div>

</section>

<!-- events -->

<!-- -->

<!-- /events -->
<!-- /teachers -->

<!-- blog -->
<!--
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest News</h2>
      </div>
    </div>
    <div class="row justify-content-center">
 blog post

  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
      <div class="card-body">
       post meta
        <ul class="list-inline mb-3">
         post date
          <li class="list-inline-item mr-3 ml-0">August 28, 2019</li>
          author
          <li class="list-inline-item mr-3 ml-0">By Jonathon</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">The Expenses You Are Thinking.</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  blog post
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
      <div class="card-body">
       post meta
        <ul class="list-inline mb-3">
          post date
          <li class="list-inline-item mr-3 ml-0">August 13, 2019</li>
           author
          <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Tips to Succeed in an Online Course</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
   blog post
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
      <div class="card-body">
         post meta
        <ul class="list-inline mb-3">
           post date
          <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
           author
          <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Orientation Program for the new students</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>-->
<!-- /blog -->
<!-- logo -->
<!--<a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/banner/logoccd.png" alt="logo"></a>-->
@endsection
