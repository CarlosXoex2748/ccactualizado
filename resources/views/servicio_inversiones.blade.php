@extends('layouts.general')

@section('content')


<!-- /page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Nuestros Servicios</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Inversiones</li>
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
        <h2>Inversiones</h2>
      </div>
      
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4" >
        <h3  data-aos="fade-right" data-aos-duration="2000">Sobre el servicio</h3>
       <p data-aos="fade-right" data-aos-duration="2000">Público y privados, trabajos por impuestos, Apps. Ips e Inverite.pe. Así como financiamiento e instrumentos de innovación.

      </p>
      </div>
    
      <div class="col-4 mb-4">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Iniciativas Privadas (asesorías)</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Prestación de servicios de seguridad tecnológica en las prisiones(Bloqueo de celulares).</li>
          <li>Vigilancia electrónica personal(Grilletes electrónicos).</li>
        </ul>
      </div>
   

       <div class="col-4 mb-4">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Talleres</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Taller de obras por impuesto en: Sechura(Piura), Loreto, Apurímac, Echarati(Cusco) y La Convención(Cusco).</li>
        </ul>
      </div>     
      <div class="col-4 mb-4" data-aos="fade-right" data-aos-duration="2000">
          <!-- course thumb -->
          <img src="{{asset('images/services/inversiones.jpg')}}" class="img-fluid w-100 zoom-out">
      </div>
   
       <div class="col-4  mb-4"  data-aos="fade-right" data-aos-duration="2000">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Obras por impuestos: Asistencia técnica especializada</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Gobierno regional y municipios de Ancash por S./336 millones (edificaciones, saneamiento, salud y vial)</li>
          <li>Provincia de Mariscal Nieto, Moquegua(instalación del sistema de agua potable y alcantarillado).</li>
          <li>Gobierno regional de Moquegua y municipalidades de la región.</li>
          <li>Estructuración de un mecanismo para financiar proyectos de inversión pública en la región Apurímac.</li>
        </ul>
      </div> 

      <div class="col-4 mb-4"  data-aos="fade-right" data-aos-duration="2000">
        <h3 class="mb-3"  data-aos="fade-right" data-aos-duration="2000">Estudios de preinversión y definitivos</h3>
        <ul class="list-styled"  data-aos="fade-right" data-aos-duration="2000">
          <li>Elaboración de 5 expedientes técnicos de PIP de colegio (Ayacucho).</li>
          <li>Estudios de preinversión y expediente técnico Logros de Aprendizaje (Megantoni).</li>
          <li>Reformulación de 17 estudios de preinversión (Challhuahuacho).</li>
          <li>Elaboración de TdRs de 3 programas de logros educativos (Pisco).</li>
          <li>Elaboración de TdRs-Fichas Técnicas de 4 programas de educación (Pisco).</li>
          <li>Estructuras de mecanismo para financiar proyectos de inversión pública - Apurímac.</li>
          <li>Revisión de expedientes técnicos de obras en IE-Puno.</li>
        </ul>
      </div>
      
@endsection
