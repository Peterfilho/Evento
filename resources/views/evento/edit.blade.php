@extends('layouts.app')

@section('content')

  <h1>Editar Evento</h1>




  {!! Form::open(array('route' => array('events.update', $evento['id']),  'method' => 'patch')) !!}

      <div class="form-group  {{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="control-label" for="nome">Nome: *</label>
          <input id="name" name="name" class="form-control"  value="{{$evento['name']}}" autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                   <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('event_date') ? ' has-error' : '' }}">
          <label class="control-label" for="data">Data: *</label>
          <input id="event_date" name="event_date" class="form-control" value="{{$evento['event_date']}}" autofocus>
          @if ($errors->has('event_date'))
              <span class="help-block">
                        <strong>{{ $errors->first('event_date') }}</strong>
                    </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('event_hour') ? ' has-error' : '' }}">
          <label class="control-label" for="horario">Horario: *</label>
          <input id="event_hour" name="event_hour" class="form-control" value="{{$evento['event_hour']}}" autofocus>
          @if ($errors->has('event_hour'))
              <span class="help-block">
                        <strong>{{ $errors->first('event_hour') }}</strong>
                    </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('site') ? ' has-error' : '' }}">
          <label class="control-label" for="local">Local: *</label>
          <input id="site" name="site" class="form-control" value="{{$evento['site']}}" autofocus>
          @if ($errors->has('site'))
              <span class="help-block">
                        <strong>{{ $errors->first('site') }}</strong>
                    </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
          <label class="control-label" for="descricao">Descrição: *</label>
          <input id="description" name="description" class="form-control" value="{{$evento['description']}}" autofocus>
          @if ($errors->has('description'))
              <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
          @endif
      </div>
      <div class="form-group {{ $errors->has('profit_ticket') ? ' has-error' : '' }}">
          <label class="control-label" for="profit_ticket">Descrição: *</label>
          <input id="profit_ticket" name="profit_ticket" class="form-control" value="{{$evento['profit_ticket']}}" autofocus>
          @if ($errors->has('profit_ticket'))
              <span class="help-block">
                   <strong>{{ $errors->first('profit_ticket') }}</strong>
              </span>
          @endif
      </div>
       <button class="btn btn-primary">Atualizar Evento</button>
    {!! Form::close() !!}

@endsection
