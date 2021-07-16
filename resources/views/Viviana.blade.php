@extends('layouts.general')

@section('content')

<section class="page-title-section " data-background="{{asset('images/fotos2021/fondo01.png')}}">
   
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-Nosotros"> 
              <li><a href="{{route('inicio')}}" data-aos="fade-left" class="Nosotros">
             Volver a  Bienvenido a CCD</a></li>
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Viviana Sanchez</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Abogada del CCD</li>
        </ul>      
        </div>
      </div>
    </div>
</section>

  <section class="section-sm">
    <div class="container">
      <div class="row">
            <div class="col-sm-6 ">
 
                <h6>Abogada, Lima</h6>
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary">  
                        <h6>Acerca de Viviana</h6></div>
                  </div>
              
            <p>Fellow del Institute of International Economic Law (IIEL) Washington D.C. Post Grado en las Universidad de Salamanca España, Universidad Adolfo Ibañez (Chile), UPC, ESAN, GERENS, International Law Institute Washington DC. Becaria Fullbright y PEO Scholarship. Ejerció docencia en la UPC y en la Universidad de Lima. Trabajó en el Ministerio de Economía y Finanzas, Instituto Nacional de Defensa de de la Competencia y de la Protección de la Propiedad Intelectual y la Universidad San Martín Porres. Realizó su SECIGRA en el Ministerio de Relaciones Exteriores. Actualmente es abogada y directora de empresas privadas y asociaciones civiles. Estudiante de intercambio con AFS Finlandia Perú y miembro de la Asociación Civil ius et veritas.</p>
            

              
        
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
