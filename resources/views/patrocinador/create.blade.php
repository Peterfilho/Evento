@extends('layouts.app')

@section('content')

  <h1>Cadastrar Patrocinador</h1>
  {!! Form::open(array('route' => 'sponsors.store')) !!}
      <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="name" name="name" class="form-control" autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="description" name="description" class="form-control" autofocus>
          @if ($errors->has('description'))
              <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
          @endif
      </div>
     <a href="{{{route('sponsors.index')}}}" class="btn btn-primary btn-crud ">Cancelar</a>
     <button class="btn btn-primary btn-crud">Cadastrar</button>
  {!! Form::close() !!}




@endsection
