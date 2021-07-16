@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Competitividad y Desarrollo</li>
        </ul>      
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
    <!-- course info -->
    <div class="row align-items-center ">
      <div class="col-12 order-1 ">
        <h2  data-aos="fade-right" data-aos-duration="2000">Competitividad y Desarrollo</h2>
      </div>
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="col-12 mb-4">
        <h3  data-aos="fade-right" data-aos-duration="2000">Sobre el servicio</h3>
        <p data-aos="fade-right" data-aos-duration="2000">Alcance comunal, distrital, provincial y regional. Competitividad y planes de desarrollo. Instituciones Públicas y negocios , como sectores económicos.</p>
      </div>
      <div class="col-6 mb-4">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Elaboración de planes de desarrollo</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000"> 
          <li>Propuestas de desarrollo de las comunidades nativas del Bajo Urubambam,Cusco.</li>
          <li>Plan de Desarrollo de Cotabamba y El Progreso - Apurímac.</li>
          <li>Plan de Desarrollo de Megantoni, Cusco.</li>
          <li>Evaluación social e infraestructura minera para el desarrollo de Michiquillay, Cajamarca.</li>
          <li>Estudio de Competitividad Fiscal y Regulatoria técnico ambiental del País.</li>
          <li>Propuestas para impulsar el desarrollo del sector minero al 2021.</li>
          <li>Cooperación al Desarrollo Económico Regional - San Martín.</li>
          <li>Elaboración de Propuesta de Desarrollo del País Potenciado por la Actividad Minera a través del Clúster Minero.</li>
        </ul>
      </div>
   
        <div class="col-6 mb-4" data-aos="zoom-in" data-aos-duration="2000">
          <!-- course thumb -->
          <img src="{{asset('images/fotos2021/trabajo.png')}}" class="img-fluid w-100 zoom-out">  
        </div>


      
      
      <div class="col-6 mb-4">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Planes y propuestas sociales</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Evaluación del mercado eco sistémicos en la Amazonía Peruana.</li>
          <li>Puesta en operación de núcleos ejecutores: GORE Loreto.</li>
          <li>Orientación de la intervención económica de la Asociación Savia para el periodo 2012-2015.</li>
          <li>Estudio del sector de recursos naturales no renovables de América Latina.</li>
          <li>Plan de Inversión Social Estratégica en Pisco, Ica.</li>
          <li>Conferencia Anual de Ejecutivos (CADE) 2010.</li>
        </ul>
      </div>  
      <div class="col-6 col-sm-6 mb-4 mb-xl-0  ">
        <h3 class="mb-3" data-aos="fade-right" data-aos-duration="2000">Elaboración de planes de competitividad</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Estudio de Competitividad de minería del Perú.</li>
          <li>Plan de Competitividad de Moquegua, Loreto, Piura(Sechura) y Apurímac.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
