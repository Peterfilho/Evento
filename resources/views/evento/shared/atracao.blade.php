<div class="tab-pane fade show active" id="atracao" role="tabpanel" aria-labelledby="atracao-tab">
  <br>
  <br>
  <div class="col-lg-6">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Atração</th>
            <th>Descrição</th>
            <th>Evento</th>
            <th>Ações</th>
          </tr>
          @foreach ($atracoes as $atracao)
          <tr>
            @if ($atracao['attraction_event_id']==$evento['id'])
              <td>{{ $atracao['name'] }}</td>
              <td>{{ $atracao['description'] }}</td>
              <td>{{ $evento['name'] }}</td>
              <td>
                <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#editAtracao" href="">Editar</a>
                <a class="btn btn-danger btn-crud " data-toggle="modal" data-target="#deleteModal{{{$atracao['id']}}}" href="TESTE">Deletar</a>
              </td>
              @endif
          </tr>
          @endforeach
        </table>
    </div>
  </div>
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
                    <input type="hidden" name="" value="{{$evento['id']}}">
                    <!--<div class="form-group">
                        <label class="control-label" for="description">Evento: *</label>
                        {{--{{ Form::hidden('event_id','2',  array('class'=>'form-control')) }}--}}

                    </div>-->

                    <button class="btn btn-primary">Cadastrar</button>

                    {!! Form::close() !!}
                </div>

                <!--------------------------------------------------------------------------------------------------->

                <div class="modal-footer">
                    {{--<button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>--}}
                    {{--{!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}--}}
                    {{--<button type="submit" class="btn btn-danger">Deletar</button>--}}
                    {{--{!! Form::close() !!}--}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAtracao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Atração</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                {!! Form::open(array('route' => array('attractions.update', $atracao['id']), 'method' => 'patch')) !!}
                <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label" for="nome">Nome: *</label>
                            <input id="name" name="name" class="form-control" value="{{$atracao['name']}}" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nome">Descrição: *</label>
                            <input id="description" name="description" class="form-control" value="{{$atracao['description']}}" autofocus>
                        </div>
                        <input type="hidden" name="attraction_event_id" value="{{$evento['id']}}">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Editar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------------------->

    <div class="modal fade" id="deleteModal{{{$atracao['id']}}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir o Atração {{$atracao['name']}}?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Esta ação não pode ser desfeita.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
                    {!! Form::open(array('route' => array('events.destroy', $evento['id']),  'method' => 'delete')) !!}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
