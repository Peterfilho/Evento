@extends('layouts.app')

@section('content')

  <h1>Lista de Marketings</h1>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{{route('dashboard')}}}"><i class="fa fa-fw  fa fa-home"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{{route('marketings.index')}}}"><i class="fa fa-fw  fa  fa-bars"></i> Todos os Marketings</a></li>
      </ol>
  </nav>

  <div class="col-lg-12">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
          </tr>
          @foreach ($marketings as $marketing)
          <tr>

            <td>{{ $marketing['name'] }}</td>
            <td>{{ $marketing['description'] }}</td>
            <td>
                <a class="btn btn-primary btn-crud " href="{{ route('marketings.show',$marketing['id']) }}">Exibir</a>
                <a class="btn btn-primary btn-crud " href="{{ route('marketings.edit',$marketing['id']) }}">Editar</a>
                <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#m{{{$marketing['id']}}}" href="">Deletar</a>
                <div class="modal fade" id="m{{{$marketing['id']}}}" tabindex="-1" role="dialog" aria-labelledby="m{{{$marketing['id']}}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Marketing {{$marketing['name']}}?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Esta ação não pode ser desfeita.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" href="#" type="button" data-dismiss="modal">Cancel</button>
                                {!! Form::open(array('route' => array('marketings.destroy', $marketing['id']),  'method' => 'delete')) !!}
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
