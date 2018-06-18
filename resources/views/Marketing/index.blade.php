
@extends('Layout.app')

@section('content')

<h1>Lista de Marketing</h1>

<table style="width:100%">
  <tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Valor</th>
    <th>Ações</th>
  </tr>
@foreach ($marketings as $marketing)
  <tr>
    <td>{{ $marketing->name }}</td>
    <td>{{ $marketing->description }}</td>
    <td>{{ $marketing->value }}</td>
    <td>{!! Form::open(array('url' => "marketings/$marketing->id/edit", 'method' => 'get')) !!}
            <button type="submit" class="btn btn-primary">Editar</button>
        {!! Form::close() !!}

        {!! Form::open(array('route' => 'marketing.delete', 'method' => 'delete')) !!}
                <button type="submit" class="btn btn-danger">Deletar</button>
        {!! Form::close() !!}
    </td>
  </tr>
@endforeach
</table>
