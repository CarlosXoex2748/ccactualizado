@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Nuestros servicios.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3" data-aos="fade-up" data-aos-duration="2000">Nuestros Servicios</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
    
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

   
  </div>
</section>
@endsection
