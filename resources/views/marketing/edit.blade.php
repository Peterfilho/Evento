@extends('layouts.app')

@section('content')

  <h1>Editar Marketing</h1>

    {!! Form::open(array('route' => array('marketings.update', $marketing['id']),  'method' => 'patch')) !!}
          <div class="form-group">
              <label class="control-label" for="nome">Nome: *</label>
              <input id="name" name="name" class="form-control"  value="{{$marketing['name']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="data">Descrição: *</label>
              <input id="description" name="description" class="form-control" value="{{$marketing['description']}}" autofocus>
          </div>
          <a href="{{{route('marketings.index')}}}" class="btn btn-primary btn-crud ">Cancelar</a>
          <button class="btn btn-primary btn-crud">Atualizar Marketing</button>
    {!! Form::close() !!}

@endsection
