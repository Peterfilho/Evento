
@extends('layouts.app')

@section('content')

    <h1>Cadastrar Evento</h1>
    <br>

    {!! Form::open(array('route' => 'events.store')) !!}
        <div class="form-group  {{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label" for="nome">Nome: *</label>
            <input id="name" name="name" class="form-control" autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('event_date') ? ' has-error' : '' }}">
            <label class="control-label" for="data">Data: *</label>
            <input id="date" name="event_date" class="form-control date" autofocus>
            @if ($errors->has('event_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('event_date') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('event_hour') ? ' has-error' : '' }}">
            <label class="control-label" for="horario">Horario: *</label>
            <input id="hour" name="event_hour" class="form-control hour" autofocus>
            @if ($errors->has('event_hour'))
                <span class="help-block">
                    <strong>{{ $errors->first('event_hour') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('site') ? ' has-error' : '' }}">
            <label class="control-label" for="local">Local: *</label>
            <input id="site" name="site" class="form-control" autofocus>
            @if ($errors->has('site'))
                <span class="help-block">
                    <strong>{{ $errors->first('site') }}</strong>
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

        <button class="btn btn-primary">Cadastrar Evento</button>
    {!! Form::close() !!}
    <br>

@endsection

