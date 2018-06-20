<div class="tab-pane fade show " id="patrocinador" role="tabpanel" aria-labelledby="patrocinador-tab">

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

</div>