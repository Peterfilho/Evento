@extends('layouts.app')

@section('content')

  <h1>Lista de Eventos</h1>
  <br>
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
          @foreach ($eventos as $evento)
          <tr>

            <td>{{ $evento['name'] }}</td>
            <td>{{ $evento['site'] }}</td>
            <td>{{ date('d/m/Y', strtotime($evento['event_date'])) }}</td>
            <td>{{ date('g:i', strtotime($evento['event_hour'])) }}</td>
            <td>
                @if($evento['status'] ===1)
                    ANDAMENTO
                @else
                    FINALIZADO
                @endif
            </td>
            <td>
                <a class="btn btn-primary btn-crud " href="{{ route('events.show',$evento['id']) }}">Exibir</a>
                <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#exampleModal{{{$evento['id']}}}" href="TESTE">Deletar</a>
                <div class="modal fade" id="exampleModal{{{$evento['id']}}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Evento {{$evento['name']}}?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Esta ação não pode ser desfeita.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" href="#" type="button" data-dismiss="modal">Cancel</button>
                                {!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}
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
