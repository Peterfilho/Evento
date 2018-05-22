
@extends('Layout.app')

@section('content')


  <h1>Cadastrar Evento</h1>
  <form>
      <div class="form-group">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="nome" name="nome" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="data">Data: *</label>
          <input id="data" name="data" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="horario">Horario: *</label>
          <input id="horario" name="horario" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="local">Local: *</label>
          <input id="local" name="local" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="descricao" name="descricao" class="form-control" autofocus>
      </div>
      <a class="btn btn-primary">Cadastrar</a>
  </form>



@endsection
