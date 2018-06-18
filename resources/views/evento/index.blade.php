
@extends('Layout.app')

@section('content')

<h1>Lista de Eventos</h1>

<div class="col-lg-12">
	<h2>Peças: </h2>
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
  <tr>
    <th>Nome</th>
    <th>Local</th>
    <th>Data</th>
    <th>Horário</th>
    <th>Descrição</th>
    <th>Ações</th>
  </tr>
@foreach ($eventos as $evento)
  <tr>
    <td>{{ $evento['name'] }}</td>
    <td>{{ $evento['site'] }}</td>
    <td>{{ $evento['event_date'] }}</td>
    <td>{{ $evento['event_hour'] }}</td>
    <td>{{ $evento['description'] }}</td>
    <td><a class="btn btn-primary" href="events/{{ $evento['id'] }}/edit">Editar</a>
      {!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}
					<button type="submit" class="btn btn-danger">X</button>
			{!! Form::close() !!}
    </td>
  </tr>
@endforeach
</table>
</div>
</div>
@endsection
