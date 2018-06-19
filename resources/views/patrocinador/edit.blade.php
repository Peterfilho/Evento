@extends('layouts.app')

@section('content')

  <h1>Editar Marketing</h1>

    {!! Form::open(array('route' => array('sponsors.update', $patrocinador['id']),  'method' => 'patch')) !!}
          <div class="form-group">
              <label class="control-label" for="nome">Nome: *</label>
              <input id="name" name="name" class="form-control"  value="{{$patrocinador['name']}}" autofocus>
          </div>
          <div class="form-group">
              <label class="control-label" for="data">Descrição: *</label>
              <input id="description" name="description" class="form-control" value="{{$patrocinador['description']}}" autofocus>
          </div>
          <button class="btn btn-primary">Atualizar Marketing</button>
    {!! Form::close() !!}

@endsection
