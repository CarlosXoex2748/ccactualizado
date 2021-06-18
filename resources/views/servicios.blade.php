@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Nuestro servicios.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_competitividad.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="course-single.html">
          <h4 class="card-title">Competitividad y Desarrollo</h4>
        </a>
        <p class="card-text mb-4">  Alcance comunal, distrital, provincial y regional. Competitividad y planes de desarrollo. Instituciones
         Públicas y negocios así como sectores económicos</p>
        <a href="{{asset('servicios/competitividad_desarrollo')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_politicas.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->

          <h4 class="card-title">Gestión pública y política</h4>

        <p class="card-text mb-4">  Políticas públicas, estrategias y acciones sustentables en educación, salud e infraestructura. Sustentabilidad
         y finanzas públicas.</p>
        <a href="{{asset('servicios/gestion_politica')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_estudios.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_estudios.html">
          <h4 class="card-title">Estudios Económicos</h4>
        </a>
        <p class="card-text mb-4"> Promover el desarrollo sostenible del país en base al principio de la competitividad y de esta forma mejorar
        la calidad de vida de los ciudadanos.</p>
        <a href="{{asset('servicios/estudios_economicos')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_inversion.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_inversiones.html">
          <h4 class="card-title">Inversión</h4>
        </a>
        <p class="card-text mb-4"> Público y privados, trabajos por impuestos, Apps. Ips e Inverite.pe. Así como financiamiento e instrumentos
        de innovación.</p>
        <a href="{{asset('servicios/inversion')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_leyes3.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_legal.html">
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


  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{asset('images/services/srv_tech.jpg')}}" alt="course thumb">
      <div class="card-body">
        <!--
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
        </ul>-->
        <a href="service_legal.html">
          <h4 class="card-title">CCD Tech</h4>
        </a>
        <p class="card-text mb-4"> Página web para la competitividad y el desarrollo, aplicativos android e iOS para gestión y desarrollo y plataformas virtuales.</p>
        <br>
        <br>
        <br>
        <a href="{{asset('servicios/tech')}}" class="btn btn-primary btn-sm">Detalles</a>
      </div>
    </div>
  </div>
<!-- /course list -->
  </div>
</section>
<!-- /courses -->

<!-- footer -->
@endsection
