
@extends('Layout.app')

@section('content')

  <h1>Cadastrar Evento</h1>

{!! Form::open(array('route' => 'events.store')) !!}
      <div class="form-group">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="name" name="name" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="data">Data: *</label>
          <input id="event_date" name="event_date" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="horario">Horario: *</label>
          <input id="event_time" name="event_time" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="local">Local: *</label>
          <input id="site" name="site" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="description" name="description" class="form-control" autofocus>
      </div>
      <button class="btn btn-primary">Cadastrar</button>
{!! Form::close() !!}



@endsection
