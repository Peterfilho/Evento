@extends('layouts.app')

@section('content')

  <h1>Cadastrar Patrocinio</h1>
  {!! Form::open(array('route' => 'sponsorships.store')) !!}
  <div class="form-group">
    <select class="form-control" name="sponsor_id">
      @foreach ($patrocinadores as $patrocinador)
        <option value="{{$patrocinador['id']}}">{{$patrocinador['name']}}</option>
      @endforeach
    </select>

  </div>
      <div class="form-group {{ $errors->has('value') ? ' has-error' : '' }}">
          <label class="control-label" for="nome">Valor: *</label>
          <input id="value" name="value" class="form-control" autofocus>
          @if ($errors->has('value'))
              <span class="help-block">
                  <strong>{{ $errors->first('value') }}</strong>
              </span>
          @endif
      </div>
      <input type="hidden" name="event_id" value="{{$event_id}}">
      <button class="btn btn-primary">Cadastrar</a>
  {!! Form::close() !!}




@endsection
