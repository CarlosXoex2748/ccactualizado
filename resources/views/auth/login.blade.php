@extends('layouts.general')

@section('content')

<!-- SECTION -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Plataforma Virtual</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="intranet" class="row" method="post">
                
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Teléfono">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="email" placeholder="Usuario">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="password" placeholder="Contraseña">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<!-- hero slider -->

<section class="section">
  <div class="container">
  <section class="section">

    <div class="card" style="width: 60%; height: auto; margin-left: auto;
  margin-right: auto;">
      <div class="card-body">
    <div class="container">
      <form class="form-group" action="{{ route('login') }}" method="post">
        @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su usuario" name="email">
        <small id="emailHelp" class="form-text text-muted">Nosotros nunca compartiremos tu usuario.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" name="password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
      </div>
      <button type="submit" class="btn btn-primary" >Ingresar</button>          

    </form>
    </div>

  </div>
</div>

  </section>



  </div>
</section>

<!-- teachers esta parte conforma el equipo de trabajo de cdd -->

<!-- footer -->

<!-- /footer -->

</body>
</html>
