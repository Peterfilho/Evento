<div class="tab-pane fade show " id="e_marketing" role="tabpanel" aria-labelledby="marketing-tab">

    @if($evento['status'] ===1)
        <div class="right">
            <a class="btn btn-primary btn-crud " data-toggle="modal" data-target="#createMarketing" href="">Adicionar Marketing</a>
        </div>
        <br><br><br><br>
    @else
        <br>
        <br>
    @endif


    @if($marketings===[])
    @else
        <div class="col-lg-6">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Marketing</th>
                        <th>Valor</th>
                        <th>Evento</th>
                    </tr>
                    @foreach ($marketingsEvento as $m)
                        <tr>
                            @if ($m['event_id']==$evento['id'])
                                @foreach ($marketings as $marketing)
                                    @if ($m['marketing_id']==$marketing['id'])
                                        <td>{{ $marketing['name'] }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $m['value'] }}</td>
                                <td>{{ $evento['name'] }}</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

    <div class="modal fade" id="createMarketing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrado de Patrocínio {{{$evento['name']}}}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                {!! Form::open(array('route' => 'events_marketings.store')) !!}
                <div class="modal-body">

                        <div class="form-group">
                            <select class="form-control" name="marketing_id">
                                @foreach ($marketings as $marketing)
                                    <option value="{{$marketing['id']}}">{{$marketing['name']}}</option>
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
                {!! Form::open(array('route' => array('sponsorships.update', $m['id']), 'method' => 'patch')) !!}
                <div class="modal-body">

                        <div class="form-group">
                            <select class="form-control" name="marketing_id">
                              @foreach ($marketings as $marketing)
                                  @if ($m['marketing_id']==$marketing['id'])
                                    <option value="{{$m['marketing_id']}}">{{$marketing['name']}}</option>
                                  @endif
                              @endforeach

                                @foreach ($marketings as $marketing)
                                  @if ($m['marketing_id']<>$marketing['id'])
                                    <option value="{{$marketing['id']}}">{{$marketing['name']}}</option>
                                  @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nome">Valor: *</label>
                            <input id="value" name="value" class="form-control" value="{{$m['value']}}" autofocus>
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
