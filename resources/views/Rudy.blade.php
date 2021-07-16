@extends('layouts.general')

@section('content')

<section class="page-title-section " data-background="{{asset('images/fotos2021/fondo01.png')}}">
   
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-Nosotros"> 
              <li><a href="{{route('inicio')}}" data-aos="fade-left" class="Nosotros">
             Volver a  Bienvenido a CCD</a></li>
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Rudy Laguna</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Director General del CCD</li>
        </ul>      
        </div>
      </div>
    </div>
</section>

  <section class="section-sm">
    <div class="container">
      <div class="row">
            <div class="col-sm-6 ">
 
                <h6>Director, Lima</h6>
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary">  
                        <h6>Acerca de Rudy</h6></div>
                  </div>
              
            <p>Director del Centro para la Competitividad y el Desarrollo (CCD). Ha sido director de Electro Sur Este, presidente del Comité Pro Conectividad (energía y telecomunicaciones) de PROINVERSIÓN, consultor del Ministerio de Economía y Finanzas (MEF) y co-líder en proyectos de investigación en tributación y política fiscal para países de América Latina por el Banco Interamericano de Desarrollo (BID). Docente en los cursos Economía Pública y Recursos Naturales en la Universidad de San Martín de Porres (USMP), Mercado y Regulación de Petróleo de la Maestría en Regulación en la Universidad Peruana de Ciencias Aplicadas (UPC) y Econometría en la Universidad Nacional de Ingeniería (UNI). Ingeniero economista por la UNI, con máster en tributación y política fiscal por la Universidad Autónoma de Madrid de España y la Universidad de Lima.</p>
            

              
        
            </div>
            <div class="col-sm-6">
            <div class="card border-0 rounded-0 hover-shadow">
          <a >
          <img  class="card-img-top rounded-0" src="{{asset('images/teachers/rudy_laguna1.jpg')}}" alt="teacher">
          </a>  
        </div>
      </div>
      </div>

    </div>
    </
      @endsection
