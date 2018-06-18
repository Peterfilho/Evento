@extends('Layout.app')

@section('content')

  <h1>Cadastrar Patrocinador</h1>
  {!! Form::open(array('route' => 'sponsor.store')) !!}
      <div class="form-group">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="name" name="name" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="description" name="description" class="form-control" autofocus>
      </div>
      <button class="btn btn-primary">Cadastrar</a>
  {!! Form::close() !!}




@endsection
