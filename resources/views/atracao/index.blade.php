<?php

@extends('Layout.app')

@section('content')

    <h1>Lista de Marketing</h1>

    <table style="width:100%">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Evento</th>
            <th>Ações</th>
        </tr>
        @foreach ($atracoes as $atracao)
            <tr>
                <td>{{ $atracao->name }}</td>
                <td>{{ $atracao->description }}</td>

            </tr>
        @endforeach
    </table>


@endsection
