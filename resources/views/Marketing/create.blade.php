@extends('layouts.app')

@section('content')

  <h1>Cadastrar Marketing</h1>
  {!! Form::open(array('route' => 'marketings.store')) !!}
      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="control-label" for="name">Nome: *</label>
          <input id="name" name="name" class="form-control" autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
          <label class="control-label" for="description">Descrição: *</label>
          <input id="description" name="description" class="form-control" autofocus>
          @if ($errors->has('description'))
              <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('value') ? ' has-error' : '' }}">
          <label class="control-label" for="value">Valor: *</label>
          <input id="value" name="value" class="form-control" autofocus>
          @if ($errors->has('value'))
              <span class="help-block">
                  <strong>{{ $errors->first('value') }}</strong>
              </span>
          @endif
      </div>
      <button class="btn btn-primary">Cadastrar</a>
  {!! Form::close() !!}




@endsection
