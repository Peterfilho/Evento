
@extends('Layout.app')

@section('content')

<h1>Lista de Patrocinadores</h1>

<table style="width:100%">
  <tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Valor</th>
    <th>Ações</th>
  </tr>
@foreach ($patrocinadores as $patrocinador)
  <tr>
    <td>{{ $patrocinador->name }}</td>
    <td>{{ $patrocinador->description }}</td>
    <td>{{ $patrocinador->value }}</td>
    <td>{!! Form::open(array('url' => "sponsor/$patrocinador->id/edit", 'method' => 'get')) !!}
            <button type="submit">Editar</button>
        {!! Form::close() !!}

        {!! Form::open(array('route' => 'sponsor.delete', 'method' => 'delete')) !!}
                <button type="submit">Deletar</button>
        {!! Form::close() !!}
    </td>
  </tr>
@endforeach
</table>
