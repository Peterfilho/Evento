<div class="row row-show ">
    <div class="col-sm-8 col-lg-8 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-8  ">
                <span class="control-span"><b>Nome do Evento</b></span>
            </div>
            <div class="col-sm-8 col-lg-8  ">
                <span class="control-span">{{{ $evento['name'] }}}</span>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-lg-2 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-12 ">
                <span class="control-span"><b>Data Evento</b></span>
            </div>
            <div class="col-sm-8 col-lg-12 col-centered  ">
                <span class="control-span">{{ date('d/m/Y', strtotime($evento['event_date'])) }}</span>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-lg-2 col-centered">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-12 col-centered  ">
                <span class="control-span"><b>Hora do Evento</b></span>
            </div>
            <div class="col-sm-8 col-lg-12 col-centered  ">
                <span class="control-span">{{ date('g:i', strtotime($evento['event_hour'])) }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row row-show ">
    <div class="col-sm-8 col-lg-12 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-8  ">
                <span class="control-span"><b>Local</b></span>
            </div>
            <div class="col-sm-8 col-lg-8  ">
                <span class="control-span">{{{ $evento['site'] }}}</span>
            </div>
        </div>
    </div>
</div>
<div class="row row-show ">
    <div class="col-sm-8 col-lg-12 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-12 ">
                <span class="control-span"><b>Descrição</b></span>
            </div>
            <div class="col-sm-8 col-lg-12 col-centered  ">
                <span class="control-span">{{ $evento['description'] }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row row-show ">
    <div class="col-sm-4 col-lg-6 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-12 ">
                <span class="control-span"><b>Status do Evento</b></span>
            </div>
            <div class="col-sm-8 col-lg-12 col-centered  ">
                @if($evento['status'] =1)
                    <span class="control-span">ANDAMENTO</span>
                @else
                    <span class="control-span">FINALIZADO</span>
                @endif

            </div>
        </div>
    </div>
    <div class="col-sm-4 col-lg-6 ">
        <div class="row divider-2">
            <div class="col-sm-8 col-lg-12 ">
                <span class="control-span"><b>Valor pretendido com Ingressos</b></span>
            </div>
            <div class="col-sm-8 col-lg-12 col-centered  ">
                    <span class="control-span">{{{$evento['profit_ticket']}}}</span>
            </div>
        </div>
    </div>
</div>