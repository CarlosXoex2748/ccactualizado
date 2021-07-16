@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Misión y Visión</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">La misión de una organización hace referencia al motivo por el que esta existe, mientras que la visión es 
              la manifestación de hacia dónde se dirige y en qué pretende convertirse a largo plazo.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Mision -->
  <section class="section-sm">
    <div class="container">
  <div class="row align-items-center mb-5">
  <div class="col-xl-4 order-1 col-sm-6 mb-4 mb-xl-0">
    <h2>Misión y Visión</h2>
  </div>
  <div class="col-12 mt-4 order-4">
    <div class="border-bottom border-primary"></div>
  </div>
</div>
<div class="row">

  <div class="col-6 mb-4">
    <h3 class="mb-3">Misión</h3>
    <ul class="list-styled">
      <li>La misión debe estar definida en forma precisa y ser factible, la visión es una proyección a futuro que describe las aspiraciones de la organización. Suele ser más
           genérica que la misión, lo que la hace menos precisa y menos concreta.</li>
    </ul>
  </div>
 <div class="col-6 mb-4">
    <!-- course thumb -->
    <img src="{{asset('images/images/img.workplace1.jpg')}}" class="img-fluid w-100 zoom-out" >
  </div>
   <div class="col-6 mb-4">
    <h3 class="mb-3">Visión</h3>
    <ul class="list-styled">
    <li>Convertirnos es una institución de referencia para la promoción y mejora de la educación y la cultura en entornos variados y cambiantes. Gracias a apostar por la innovación e
         intercambio de inspiración y creación de conocimiento educativo.</li>  
    </ul>
  </div>
 
</div>
</section>
@endsection