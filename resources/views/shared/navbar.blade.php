<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url("/") }}">Gerenciador de Eventos</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-calendar"></i>
                    <span class="nav-link-text">Eventos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{{route('events.create')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Adicionar Evento</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{{route('events.index')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Todos os Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Relatorio</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-calendar"></i>
                    <span class="nav-link-text">Marketing</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{{route('marketings.create')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Adicionar Marketing</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{{route('marketings.index')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Todos os Marketings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw  fa-address-card"></i>
                    <span class="nav-link-text">Patrocinador</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{{route('sponsors.create')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Adicionar Patrocinador</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{{route('sponsors.index')}}}">
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Todos os Patrocinadores</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="{{ url("/newpatrocinador") }}">
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="nav-link-text">Patrocinador</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="{{ url("/newmarketing") }}">
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="nav-link-text">Marketing</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-usd"></i>
                    <span class="nav-link-text">Caixa</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a>
                            <i class="fa fa-fw fa-arrow-left"></i>
                            <span class="nav-link-text">Despesa</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-fw fa-arrow-right"></i>
                            <span class="nav-link-text">Receita</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-fw fa-calendar"></i>
                            <span class="nav-link-text">Relatorio</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url("/events") }}">
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="nav-link-text">Listar Evento</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
