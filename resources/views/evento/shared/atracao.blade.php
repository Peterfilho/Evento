<div class="tab-pane fade show active" id="e_atracao" role="tabpanel" aria-labelledby="atracao-tab">


    @if($evento['status'] ===1)
        <div class="right">
            <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#createAtracao" href="">Adicionar Atracao</a>
        </div>
        <br><br><br><br>
    @else
        <br>
        <br>
    @endif

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
            </div>
        </div>
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
              <label class="control-label" for="value">Valor: *</label>
              <input id="value" name="value" class="form-control" autofocus>
            </div>
            <input type="hidden" name="attraction_event_id" value="{{$evento['id']}}">
          </div>
        <div class="modal-footer">
          <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary">Cadastrar</button>
        </div>

        {!! Form::close() !!}
      </div>
      <!--------------------------------------------------------------------------------------------------->
      <div class="modal-footer">
      </div>
    </div>
  </div>
  @if($atracoes===[])
  @else
  <div class="col-lg-6">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped">
        <tr>
          <th>Atração</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Evento</th>
        </tr>
        @foreach ($atracoes as $atracao)
        <tr>
          @if ($atracao['attraction_event_id']==$evento['id'])
            <td>{{ $atracao['name'] }}</td>
            <td>{{ $atracao['description'] }}</td>
            <td>{{ $atracao['value'] }}</td>
            <td>{{ $evento['name'] }}</td>
          @endif
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endif
</div>
