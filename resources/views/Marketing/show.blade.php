
@extends('layouts.app')

@section('content')

    <h1>Marketing {{{$marketing['id']}}} </h1>
    <br>

    <div class="row row-show ">
        <div class="col-sm-8 col-lg-8 ">
            <div class="row divider-2">
                <div class="col-sm-8 col-lg-8  ">
                    <span class="control-span"><b>Nome</b></span>
                </div>
                <div class="col-sm-8 col-lg-8  ">
                    <span class="control-span">{{{ $marketing['name'] }}}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-2 ">
            <div class="row divider-2">
                <div class="col-sm-8 col-lg-12 ">
                    <span class="control-span"><b>Descrição</b></span>
                </div>
                <div class="col-sm-8 col-lg-12 col-centered  ">
                    <span class="control-span">{{ $marketing['description'] }}</span>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-2 ">
            <div class="row divider-2">
                <div class="col-sm-8 col-lg-12 ">
                    <span class="control-span"><b>Valor</b></span>
                </div>
                <div class="col-sm-8 col-lg-12 col-centered  ">
                    <span class="control-span">{{ $marketing['value'] }}</span>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-crud " href="{{ route('marketings.edit',$marketing['id']) }}">Editar</a>
    <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#exampleModal" href="">Deletar</a>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Marketing {{$marketing['description']}}?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Esta ação não pode ser desfeita.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"  type="button" href="{{ route('marketings.show',$marketing['id']) }}" data-dismiss="modal">Cancel</button>
                    {!! Form::open(array('route' => array('marketings.destroy', $marketing['id']),  'method' => 'delete')) !!}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
