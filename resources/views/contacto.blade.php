@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contacto</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">¿Tienes alguna pregunta? No te preocupes, déjanos tus dudas o consultas y te responderemos
        lo más antes posible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contáctanos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nombre">
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Correo">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Asunto">
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Mensaje"></textarea>
          <button type="submit" value="send" class="btn btn-primary">Enviar Mensaje</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">En Centro para la Competitividad y el Desarrollo (CCD) brindamos asesoría en procesos públicos, gestiones sociales y más.</p>
        <a href="tel:+8802057843248" class="text-color h5 d-block">(01) 688-3302</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">melissa.sanchez@ccdcompetitividad.com</a>
        <p>Av. Del Pinar 124<br>Urb. Chacarilla del Estanque<br>SANTIAGO DE SURCO, LIMA (Lima)</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->
<!-- footer -->

  <!-- newsletter -->
  <!--
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>-->

  @endsection
