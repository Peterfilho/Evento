@extends('Layout.app')

@section('content')

  <h1>Editar Evento</h1>

    {!! Form::open(array('route' => array('events.update', $evento['id']),  'method' => 'patch')) !!}
          <div class="form-group">
              <label class="control-label" for="nome">Nome: *</label>
              <input id="name" name="name" class="form-control"  value="{{$evento['name']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="data">Data: *</label>
              <input id="event_date" name="event_date" class="form-control" value="{{$evento['event_date']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="horario">Horario: *</label>
              <input id="event_hour" name="event_hour" class="form-control" value="{{$evento['event_hour']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="local">Local: *</label>
              <input id="site" name="site" class="form-control" value="{{$evento['site']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="descricao">Descrição: *</label>
              <input id="description" name="description" class="form-control" value="{{$evento['description']}}" autofocus>
          </div>
          <button class="btn btn-primary">Atualizar Evento</button>
    {!! Form::close() !!}

@endsection
