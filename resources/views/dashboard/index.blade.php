@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{{route('dashboard')}}}"><i class="fa fa-fw  fa fa-home"></i> Dashboard</a></li>
        </ol>
    </nav>

  {{--  <img class="responsive-img" width="100%" src="{!! asset('img/dash.jpg') !!}">--}}
  <div class="row mb-4">

      <div class="col-xl-6 col-sm-6 py-2">
          <div class="card bg-success text-white h-100">
              <div class="card-body bg-success">
                  <div class="rotate">
                      <i class="fa fa-calendar fa-4x"></i>
                  </div>
                  <a href="{{{route('finalizado')}}}">
                      <h6 class="text-uppercase">Evento Finalizado</h6>
                      <h1 class="display-4">{{{count($finalizado)}}}</h1>
                  </a>
              </div>
          </div>
      </div>


      <div class="col-xl-6 col-sm-6 py-2">
          <div class="card text-white bg-danger h-100">
              <div class="card-body bg-danger">
                  <div class="rotate">
                      <i class="fa fa-comments-o fa-4x"></i>
                  </div>
                  <a href="{{{route('andamento')}}}">
                      <h6 class="text-uppercase">Evento em Andamento</h6>
                      <h1 class="display-4">{{{count($andamento)}}}</h1>
                  </a>
              </div>
          </div>
      </div>

  </div>
@endsection
