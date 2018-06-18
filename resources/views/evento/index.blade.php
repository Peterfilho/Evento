
@extends('Layout.app')

@section('content')

<h1>Lista de Eventos</h1>

<table style="width:100%">
  <tr>
    <th>Nome</th>
    <th>Local</th>
    <th>Data</th>
    <th>Horário</th>
    <th>Descrição</th>
  </tr>
@foreach ($eventos as $evento)
  <tr>
    <td>{{ $evento->name }}</td>
    <td>{{ $evento->local }}</td>
    <td>{{ $evento->date }}</td>
    <td>{{ $evento->time }}</td>
    <td>{{ $evento->description }}</td>
  </tr>
@endforeach
</table>
