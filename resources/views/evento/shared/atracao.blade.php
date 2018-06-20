<div class="tab-pane fade show active" id="atracao" role="tabpanel" aria-labelledby="atracao-tab">

    <div class="right">
        <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#createAtracao" href="">Adicionar Atracao</a>
    </div>

    <div class="modal fade" id="createAtracao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Atracao</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'attractions.store')) !!}
                    <div class="form-group">
                        <label class="control-label" for="name">Nome: *</label>
                        <input id="name" name="name" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Descrição: *</label>
                        <input id="description" name="description" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Evento: *</label>
                        {{{ Form::hidden('event_id','2',  array('class'=>'form-control')) }}}

                    </div>

                    <button class="btn btn-primary">Cadastrar</button>

                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    {{--<button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>--}}
                    {{--{!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}--}}
                    {{--<button type="submit" class="btn btn-danger">Deletar</button>--}}
                    {{--{!! Form::close() !!}--}}
                </div>
            </div>
        </div>
    </div>

</div>