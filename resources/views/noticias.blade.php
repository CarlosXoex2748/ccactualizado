@extends('layouts.general')

@section('content')
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('servicios')}}">Publicaciones</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Noticias</li>
          </ul>      
        </div>
      </div>
    </div>
  </section>
@endsection