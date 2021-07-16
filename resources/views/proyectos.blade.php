@extends('.layouts/intranetlayout')

@section('content')

  <div id="my-sidebar-context" class="widget-sidebar-context">
      <header id="this-header" class="navbar justify-content-start align-items-center  page-header">




          <a href="#" class="navbar-toggler widget-sidebar-toggler">
              <i class="fas fa-bars"></i>
          </a>

          <center>
            <a class="navbar-brand" href="#">
              <img src="{{asset('images/banner/logoccd.png')}}" alt="" width="300px" height= relative>
            </a>
          </center>



      </header>
      <div class="page-body">
          <nav class="widget-sidebar">
              <ul class="list-unstyled mt-2">
                  <li class="active">
                      <a href="#">
                          <i class="fas fa-bars"></i><span> Inicio </span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-pencil-alt"></i><span> Estadísticas (Proceso) </span>
                      </a>
                  </li>
                  <li>
                      <a href="/logout">
                          <img src="{{asset('../images/logos/ic_logout.png')}}" style="width:25px; height:25px; margin-right:5px;"></i><span>Salir</span>
                      </a>
                  </li>
                  <!--
                  <li>
                      <a href="#sidebar-link-mycomponents" data-toggle="collapse"
                         aria-expanded="true"
                         class="dropdown-toggle">
                          <i class="fas fa-shapes"></i><span> Proyectos </span>
                      </a>
                      <ul class="collapse list-unstyled show"
                          id="sidebar-link-mycomponents">
                          <li>
                              <a href="#">Alerts</a>
                          </li>
                      </ul>
                  </li>-->
              </ul>
          </nav>


          <div class="page-main">
            <div class="container">

              <center><div class="container-fluid">
                  <div class="row">
                      <div class="col">
                        <br>
                          <h3  id="rcorners2" style="color:#43B880; margin-bottom:30px;">Archivos Provincial de Cotabambas - Tambobambas</h3>

                      </div>
                  </div>
              </div></center>

            </div>

              <div class="container">
                <p class="o" style="margin-top:10px;"><a class="unico" href="../../intranet">Año</a></p>
                <p class="o" style="margin-top:10px; margin-left: 100px;"><a class="unico" href="">Proyectos</a></p>
                  <div class="row justify-content-center justify-content-md-center">
                @foreach($projects as $project)

                <div class="card" style="width: 21rem; margin: 10px; margin-top:50px; border-style:solid; border-width:3px; border-color:#43B880; border-radius:15px" >


                  <figure class="snip1477">
                    <img style="display: block; margin-left: auto; margin-right: auto;height: 270px;   width: 100%;" src="../images/images/{{$project->image}}" class="card-img-top" alt="sample38">
                    <div class="title">
                      <div>
                        <h5>Archivos</h5>
                        <h4>Cotabambas</h4>
                      </div>
                    </div>
                    <figcaption>
                      <p>Fortalecimiento de la institucionalidad local.</p>
                    </figcaption>
                    <a href="/intranet/{{$project->year->name}}/{{$project->name}}"></a>
                  </figure>

                  <div class="card-body" style="padding:20px;">
                    <h5 class="card-title">{{$project->name}}</h5>

                  </div>

                </div>

              @endforeach
            </div>

              </div>
          </div>

      </div>
@endsection
