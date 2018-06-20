
@extends('layouts.app')

@section('content')

    <h1>Evento {{{$evento['id']}}} </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{{route('dashboard')}}}"><i class="fa fa-fw  fa fa-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{{route('events.index')}}}"><i class="fa fa-fw  fa  fa-bars"></i> Todos os Eventos</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="active" href="{{{route('events.index')}}}"> <i class="fa fa-fw  fa  fa-calendar"></i> Evento {{{$evento['id']}}}</a></li>
        </ol>
    </nav>

    @include('evento.shared.basic')

    <a class="btn btn-primary btn-crud " href="{{ route('events.edit',$evento['id']) }}">Editar Evento</a>
    <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#exampleModal" href="">Deletar Evento</a>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="atracao-tab" data-toggle="tab" href="#atracao" role="tab" aria-controls="#atracao" aria-selected="true">
            <i class="fa fa-fw  fa fa-camera-retro"></i> Atração</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="patrocinador-tab" data-toggle="tab" href="#patrocinador" role="tab" aria-controls="patrocinador" aria-selected="true"><i class="fa fa-fw  fa-address-card"></i> Patrocinador</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        @include('evento.shared.atracao')
        @include('evento.shared.patrocinio')
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>

    @include('evento.shared.delete')





@endsection
