
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
          <input id="date" name="date" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="horario">Horario: *</label>
          <input id="time" name="time" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="local">Local: *</label>
          <input id="local" name="local" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="description" name="description" class="form-control" autofocus>
      </div>
      <button class="btn btn-primary">Cadastrar</button>
{!! Form::close() !!}



@endsection
