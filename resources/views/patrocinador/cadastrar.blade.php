@extends('Layout.app')

@section('content')



  <h1>Cadastrar Patrocinador</h1>
  <form>
      <div class="form-group">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="nome" name="nome" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="descricao" name="descricao" class="form-control" autofocus>
      </div>
      <div class="form-group">
          <label class="control-label" for="valor">Valor: *</label>
          <input id="valor" name="valor" class="form-control" autofocus>
      </div>
      <button class="btn btn-primary">Cadastrar</a>
  </form>




@endsection
