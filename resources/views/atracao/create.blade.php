@extends('Layout.app')

@section('content')

    <h1>Cadastrar Atracao</h1>
    {!! Form::open(array('route' => 'attractions.store')) !!}
    <div class="form-group">
        <label class="control-label" for="name">Nome: *</label>
        <input id="name" name="name" class="form-control" autofocus>
    </div>
    <div class="form-group">
        <label class="control-label" for="description">Descrição: *</label>
        <input id="description" name="description" class="form-control" autofocus>
    </div>
    <div class="form-group">
        <label class="control-label" for="description">Evento: *</label>
        {{{ Form::hidden('event_id','2',  array('class'=>'form-control')) }}}

    </div>

    <button class="btn btn-primary">Cadastrar</button>

    {!! Form::close() !!}




@endsection
