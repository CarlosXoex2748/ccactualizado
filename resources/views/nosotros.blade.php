@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8" >
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link"  data-aos="fade-right" data-aos-duration="2000">Nosotros</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten" data-aos="fade-left" data-aos-duration="2000">Somos una institución cuyo fin es promover el desarrollo sostenible del país en base al principio de la competitividad
        y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
  
      <div class="col-6">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="2000">Sobre nuestro trabajo</h2>
        <p data-aos="fade-right" data-aos-duration="2000">En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
        También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.</p>
        <p data-aos="fade-right" data-aos-duration="2000">El Centro para la Competitividad y el Desarrollo nos enfocamos en la prestación de servicios las cuales comprenden los siguientes:</p>
        <ul data-aos="fade-right" data-aos-duration="2000">
          <li type="disc">Servicio de Competitividad y Desarrollo</li>
          <li type="disc">Políticas y administración pública</li>
          <li type="disc">Estudios Económicos</li>
          <li type="disc">Inversión</li>
          <li type="disc">Leyes</li>
          <li type="disc">CCD Tech</li>
        </ul>
        <br>
        <p data-aos="fade-right" data-aos-duration="2000">Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
      </div>  
      <div class="col-6" data-aos="fade-left" data-aos-duration="2000">
      <img class="img-fluid w-100 mb-4 zoom-out" src="images/images/img_workplace.jpg" alt="about image"  style="padding-top: 100px" >
    </div>
    </div>
  
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->

-->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg" data-aos="fade-up" data-aos-duration="2000">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Un poco sobre Nosotros</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.</p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title" data-aos="fade-rigth" data-aos-duration="1000">Nuestro Staff</h2>
      </div>
      <!-- teacher -->

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000" >
        
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
            <div class="d-flex flex-column justify-content-between text-center">
            <a>
              <h4 class="card-title">Álvaro Orozco</h4>
            </a>
            <p>Jefe de proyectos en competitividad y desarrollo del CCD.</p>
            </div>
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
            <div class="d-flex flex-column justify-content-between text-center">
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
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_gene.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <div class="d-flex flex-column justify-content-between text-center">
            <a>
              <h4 class="card-title">Gene Eduardo Olarte</h4>
            </a>
            <p>Consultor económico en promoción empresarial del Centro para la Competitividad y el Desarrollo (CCD). </p>

          </div>
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
  <!-- /teachers -->

  @endsection
