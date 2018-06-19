@extends('layouts.app')

@section('content')

  <h1>Lista de Marketings</h1>
  <br>
  <div class="col-lg-12">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Ações</th>
          </tr>
          @foreach ($marketings as $marketing)
          <tr>

            <td>{{ $marketing['name'] }}</td>
            <td>{{ $marketing['description'] }}</td>
            <td>{{ $marketing['value'] }}</td>
            <td>
                <a class="btn btn-primary btn-crud " href="{{ route('marketings.show',$marketing['id']) }}">Exibir</a>
                <a class="btn btn-primary btn-crud " href="{{ route('marketings.edit',$marketing['id']) }}">Editar</a>
                <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#exampleModal" href="">Deletar</a>
            </td>
          </tr>
          @endforeach
        </table>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection
