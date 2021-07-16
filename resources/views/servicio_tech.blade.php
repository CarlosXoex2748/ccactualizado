@extends('layouts.general')

@section('content')
<!-- /page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">CCD TECH</li>
        </ul>
        <!--
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->
      </div>
    </div>
  </div>
</section>

<!-- section -->
<section class="section-sm">
  <div class="container">
  
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2 data-aos="fade-right" data-aos-duration="2000">CCD Tech</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3 data-aos="fade-right" data-aos-duration="2000">Sobre el servicio</h3>
        <p data-aos="fade-right" data-aos-duration="2000">Página web para la competitividad y el desarrollo, aplicativos android e iOS para gestión y desarrollo y plataformas virtuales.</p>
      </div>
      <div class="col-6 mb-4"data-aos="fade-right" data-aos-duration="2000">
        <h3 class="mb-3">Desarrollo Tecnológico</h3>
        <ul class="list-styled" data-aos="fade-right" data-aos-duration="2000">
          <li>Página web para la competitividad y el desarrollo.</li>
          <li>Aplicativos android e iOS para gestión y desarrollo.</li>
          <li>Plataformas virtuales.</li>
        </ul>
      </div>
    <div class="col-6 mb-4 " data-aos="zoom-in" data-aos-duration="2000">
        <!-- course thumb -->
        <img src="{{asset('images/services/srv_tech.jpg')}}" class="img-fluid w-75 zoom-out">
      </div>
    </div>


    </div>
  </div>
</section>
<!-- /section -->


@endsection
