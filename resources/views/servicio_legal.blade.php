@extends('layouts.general')

@section('content')


<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Legal</li>
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
        <h2 data-aos="fade-right" data-aos-duration="2000">Legal</h2>
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
        <p data-aos="fade-right" data-aos-duration="2000">Administración política y pública, regulación, inversión y fondos sociales.
        </p>
      </div>
      <div class="col-6 mb-4">
        <h3 class="mb-3"data-aos="fade-right" data-aos-duration="2000">Estudios de reglamentación</h3>
        <ul class="list-styled"data-aos="fade-right" data-aos-duration="2000">
          <li>Decreto legislativo 1334 que crea el Fondo de Adelanto Social (FAS).</li>
          <li>Decreto legislativo 1336 que crea el fondo minero.</li>
        </ul>
      </div>  
        <div class="col-5 mb-4">
        <h3 class="mb-3"data-aos="fade-right" data-aos-duration="2000">Propuesta legislativa</h3>
        <ul class="list-styled" data-aos="fade-right" data-aos-duration="2000">
          <li>Fideicomiso para Obras, Garantías y repago ante multilaterales.</li>
        </ul>
      </div>
    
       <div class="col-6 mb-4">
        <h3 class="mb-3" data-aos="fade-right" data-aos-duration="2000">Estudios y estrategias legales</h3>
        <ul class="list-styled" data-aos="fade-right" data-aos-duration="2000">
          <br>
          <br>
          <li>Estudio y elaboración de un dispositivo legal para remediación de pasivos ambientales a través de impuestos.</li>
          <li>Diseño de estrategia para conformación de Autoridad Regional de Gestión Ambiental y de RRNN Gore Madre de Dios.</li>
        </ul>
      </div>    
    
      <div class="col-6 mb-4" data-aos="zoom-in" data-aos-duration="2000">
        <!-- course thumb -->
        <img src="{{asset('images/services/srv_leyes3.jpg')}}" class="img-fluid w-75 zoom-out " >
      </div>
    </div>
  </div>
@endsection
