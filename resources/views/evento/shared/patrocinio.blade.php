<div class="tab-pane fade show " id="patrocinador" role="tabpanel" aria-labelledby="patrocinador-tab">
  <br>
  <br>
  <div class="col-lg-6">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Patrocinador</th>
            <th>Valor</th>
            <th>Evento</th>
            <th>Ações</th>
          </tr>
          @foreach ($patrocinios as $patrocinio)
          <tr>
            @if ($patrocinio['event_id']==$evento['id'])
              @foreach ($patrocinadores as $patrocinador)
                @if ($patrocinio['sponsor_id']==$patrocinador['id'])
                  <td>{{ $patrocinador['name'] }}</td>
                @endif
              @endforeach
              <td>{{ $patrocinio['value'] }}</td>
              <td>{{ $evento['name'] }}</td>
              <td>
                <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#editPatrocinador" href="">Editar Patrocinador</a>
              </td>
            @endif
          </tr>
          @endforeach
        </table>
    </div>
  </div>
    <div class="right">
        <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#createPatrocinador" href="">Adicionar Patrocinador</a>
    </div>

    <div class="modal fade" id="createPatrocinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrado de Patrocínio {{{$evento['name']}}}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                {!! Form::open(array('route' => 'sponsorships.store')) !!}
                <div class="modal-body">

                        <div class="form-group">
                            <select class="form-control" name="sponsor_id">
                                @foreach ($patrocinadores as $patrocinador)
                                    <option value="{{$patrocinador['id']}}">{{$patrocinador['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('value') ? ' has-error' : '' }}">
                            <label class="control-label" for="nome">Valor: *</label>
                            <input id="value" name="value" class="form-control" autofocus>
                            @if ($errors->has('value'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('value') }}</strong>
                              </span>
                            @endif
                        </div>
                        <input type="hidden" name="event_id" value="{{$evento['id']}}">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Cadastrar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------------------->

    <div class="modal fade" id="editPatrocinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Patrocinio</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                {!! Form::open(array('route' => array('sponsorships.update', $patrocinio['id']), 'method' => 'patch')) !!}
                <div class="modal-body">

                        <div class="form-group">
                            <select class="form-control" name="sponsor_id">
                              @foreach ($patrocinadores as $patrocinador)
                                  @if ($patrocinio['sponsor_id']==$patrocinador['id'])
                                    <option value="{{$patrocinio['sponsor_id']}}">{{$patrocinador['name']}}</option>
                                  @endif
                              @endforeach

                                @foreach ($patrocinadores as $patrocinador)
                                  @if ($patrocinio['sponsor_id']<>$patrocinador['id'])
                                    <option value="{{$patrocinador['id']}}">{{$patrocinador['name']}}</option>
                                  @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nome">Valor: *</label>
                            <input id="value" name="value" class="form-control" value="{{$patrocinio['value']}}" autofocus>
                        </div>
                        <input type="hidden" name="event_id" value="{{$evento['id']}}">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"  type="button" href="{{ route('events.show',$evento['id']) }}" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Editar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
