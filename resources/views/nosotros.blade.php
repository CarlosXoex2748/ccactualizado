@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">¿Quiénes somos?</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Somos una institución cuyo fin es promover el desarrollo sostenible del país en base al principio de la competitividad
        y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="images/images/img_workplace.jpg" alt="about image">
        <h2 class="section-title">Sobre nuestro trabajo</h2>
        <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
        También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.</p>
        <p>El Centro para la Competitividad y el Desarrollo nos enfocamos en la prestación de servicios las cuales comprenden los siguientes:</p>
        <ul>
          <li type="disc">Servicio de Competitividad y Desarrollo</li>
          <li type="disc">Políticas y administración pública</li>
          <li type="disc">Estudios Económicos</li>
          <li type="disc">Inversión</li>
          <li type="disc">Leyes</li>
          <li type="disc">CCD Tech</li>
        </ul>
        <br>
        <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->

<!--
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="60">0</h2>
          <h5 class="text-white">EMPLEADOS</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="50">0</h2>
          <h5 class="text-white">PROYECTOS</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="20">0</h2>
          <h5 class="text-white">CLIENTES</h5>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="3">0</h2>
          <h5 class="text-white">AÑOS</h5>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Un poco sobre Nosotros</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.</p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Nuestro Staff</h2>
      </div>
      <!-- teacher -->

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/rudy_laguna.jpg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Rudy Laguna</h4>
            </a>
            <p>Director del Centro para la Competitividad y el Desarrollo (CCD). Ha sido director de Electro Sur Este, presidente del Comité Pro Conectividad (energía y telecomunicaciones) de PROINVERSIÓN, consultor del Ministerio de Economía y Finanzas (MEF) y co-líder en proyectos de investigación en tributación y política fiscal para países de América Latina por el Banco Interamericano de Desarrollo (BID). Docente en los cursos Economía Pública y Recursos Naturales en la Universidad de San Martín de Porres (USMP), Mercado y Regulación de Petróleo de la Maestría en Regulación en la Universidad Peruana de Ciencias Aplicadas (UPC) y Econometría  en la Universidad Nacional de Ingeniería (UNI). Ingeniero economista por la UNI, con máster en tributación y política fiscal por la Universidad Autónoma de Madrid de España y la Universidad de Lima.</p>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/teachers/viviana_sanchez.jpg" alt="teacher" height=265px>
          <div class="card-body">
            <a>
              <h4 class="card-title">Viviana Sánchez</h4>
            </a>
            <p>Abogada de la Pontificia Universidad Católica del Perú y Máster (LLM) de Georgetown University. Fellow del Institute of International Economic Law (IIEL) Washington D.C. Post Grado en las Universidad de Salamanca España, Universidad Adolfo Ibañez (Chile), UPC, ESAN, GERENS, International Law Institute Washington DC. Becaria Fullbright y PEO Scholarship. Ejerció docencia en la UPC y en la Universidad de Lima. Trabajó en el Ministerio de Economía y Finanzas, Instituto Nacional de Defensa de de la Competencia y de la Protección de la Propiedad Intelectual y la Universidad San Martín Porres. Realizó su SECIGRA en el Ministerio de Relaciones Exteriores.  Actualmente es abogada y directora de empresas privadas y asociaciones civiles. Estudiante de intercambio con AFS Finlandia Perú y miembro de la Asociación Civil ius et veritas. </p>

          </div>
        </div>
      </div>

      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/sergio_villegas.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Sergio Villegas</h4>
            </a>
            <p>Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD). MBA (ESAN) – Especialidad en Dirección Avanzada de Proyectos y Economista (UNMSM), con más de 30 años de experiencia profesional en los cargos de Jefe de Proyecto, Coordinador, Especialista e Investigador, en entidades públicas y privadas como Superintendencia del Mercado de Valores, Superintendencia de Banca, Seguros y AFP, ONPE, MEF, Municipalidades, Universidades, Ministerio de Cultura, Apoyo Consultoría S.A., entre otras. Posee experiencia en monitoreo y asistencia técnica en gestión de inversiones públicas dentro del marco del SNIP e Invierte.pe al gobierno nacional y los regionales y locales de proyectos de infraestructura de riego y productivos, fortalecimiento institucional, salud, saneamiento, educación universitaria y básica regular, patrimonio cultural y desarrollo urbano.</p>
            <!--
            <p> Jefe de Proyectos del Centro para la Competitividad y el Desarrollo (CCD). MBA (ESAN) – Especialidad en Dirección Avanzada de Proyectos y Economista (UNMSM), con más de 30 años de experiencia profesional en los cargos de Jefe de Proyecto, Coordinador, Especialista e Investigador, en entidades públicas y privadas como Superintendencia del Mercado de Valores, Superintendencia de Banca, Seguros y AFP, ONPE, MEF, Municipalidades, Universidades, Ministerio de Cultura, Apoyo Consultoría S.A., entre otras. Posee experiencia en monitoreo y asistencia técnica en gestión de inversiones públicas dentro del marco del SNIP e Invierte.pe al gobierno nacional y los regionales y locales de proyectos de infraestructura de riego y productivos, fortalecimiento institucional, salud, saneamiento, educación universitaria y básica regular, patrimonio cultural y desarrollo urbano; así como, monitoreo y asistencia de la ejecución de proyectos bajo el mecanismo “Obras x Impuestos” y Asociación Público Privadas; clasificación de riesgo de inversiones; regulación y supervisión de fondos institucionales (pensiones y colectivos) así como a sus administradoras. Docente de los Programas de Maestría relacionados con la gestión de proyectos de inversión en las universidades: Universidad Nacional de San Cristóbal de Huamanga UUNSCH), EUCIM Business School y la Universidad San Martín de Porres (USMP), Pontificia Universidad Católica del Perú (PUCP), Universidad Nacional Federico Villarreal (UNFV) y Universidad Nacional Mayor de San Marcos (UNMSM).</p>-->
            <!--
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>-->
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <!-- teacher -->

      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_alvaro.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Álvaro Orozco</h4>
            </a>
            <p>Consultor del Centro para la Competitividad y el Desarrollo (CCD). Jefe de proyectos en competitividad y desarrollo del CCD. Experiencia en asesoría y asistencia técnica en competitividad de países, regiones y sectores productivos. Especialista en estudios económicos y análisis sectorial en proyectos de inversión para la mejora de la competitividad de las regiones. Ha elaborado indicadores de competitividad y desarrollo, así como la recopilación, procesamiento y la elaboración de información cuantitativa y de matriz de riesgos. Alta experiencia en la elaboración de líneas de base y planes de competitividad nacional, regional y sectorial. Ha trabajado como técnico estadístico en el Instituto Nacional de Estadística e Informática (INEI). Master of Liberal Arts in Finance, Harvard University y Economista, Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_katherine.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Katherine Piedra</h4>
            </a>
            <p>Jefe de proyectos en competitividad y desarrollo y en políticas públicas del Centro para la Competitividad y el Desarrollo (CCD). Realiza actividades profesionales como asesora y asistencia técnica en políticas, planes y proyectos sobre competitividad nacional, regional y sectorial. Ha elaborado modelos fiscales de mediano plazo y políticas públicas para países de Centroamérica, por encargo del Banco Interamericano de Desarrollo (BID). Maestría en Gestión y Políticas Públicas de la Universidad Católica del Perú y profesional en Ciencias Económicas de la Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>


      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/img_gene.jpg')}}" alt="teacher" height="270px">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Gene Eduardo Olarte</h4>
            </a>
            <p>Consultor económico en promoción empresarial del Centro para la Competitividad y el Desarrollo (CCD). Desempeñó como funcionario de negocios y analista de resgos senior para la empresa de arrencamiento financiero Leasing Total SA. Cuenta con maestría en Economía en la mención de Finanzas y Mercado de Capitales de la Universidad Católica del Perú y profesional en Ciencias Económicas de la Universidad San Martín de Porres (USMP).</p>

          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <br>

      <!-- teacher -->

    </div>
  </div>
</section>
  <!-- /teachers -->

  @endsection
