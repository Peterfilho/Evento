@extends('layouts.app')

@section('content')

    <h1>Lista de Eventos Finalizados</h1>
    <br>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{{route('dashboard')}}}"><i class="fa fa-fw  fa fa-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{{route('finalizado')}}}"><i class="fa fa-fw  fa  fa-bars"></i> Todos os Eventos Finalizados</a></li>
        </ol>
    </nav>
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                @foreach ($finalizados as $finalizado)
                    <tr>

                        <td>{{ $finalizado['name'] }}</td>
                        <td>{{ $finalizado['site'] }}</td>
                        <td>{{ date('d/m/Y', strtotime($finalizado['event_date'])) }}</td>
                        <td>{{ date('g:i', strtotime($finalizado['event_hour'])) }}</td>
                        <td>
                            @if($finalizado['status'] ===1)
                                ANDAMENTO
                            @else
                                FINALIZADO
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary btn-crud " href="{{ route('events.show',$finalizado['id']) }}">Exibir</a>
                            <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#exampleModal{{{$finalizado['id']}}}" href="TESTE">Deletar</a>
                            <div class="modal fade" id="exampleModal{{{$finalizado['id']}}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Evento {{$finalizado['name']}}?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Esta ação não pode ser desfeita.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" href="#" type="button" data-dismiss="modal">Cancel</button>
                                            {!! Form::open(array('route' => array('events.destroy', $finalizado['id']),  'method' => 'delete')) !!}
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection
