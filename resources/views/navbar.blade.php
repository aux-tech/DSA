<nav class="navbar fixed-top navbar-expand-lg navbar-light nav-transparente">
    <div class="container-navbar container">
        <a class="navbar-brand" href="{{  url('/')  }}">
            <img src="{{asset('content/img/logodsa.svg')}}" width="150" height="auto" class="d-inline-block align-top" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars fa-lg"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="align-self: start; padding-top: 5px;">
            <ul class="navbar-nav ml-auto mr-1">
                <li class="nav-item active">
                    <a class="nav-link ref" href="#inicio">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ref" href="#empresa">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ref" href="#clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ref" href="#areas">Áreas de Atuacão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ref" href="#servicos">Soluções</a>
                </li>
                <!--<li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Serviços
	        </a>
	        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item ref" href="#fotovoltaico">Energia Fotovoltaica</a>
	          <a class="dropdown-item ref" href="#controle-gastos">Controle de Gastos</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item ref" href="#controle-inteligente">Sistema de Controle Inteligente</a>
	        </div>
	      </li> -->
                <li class="nav-item">
                    <a class="nav-link ref" href="#contato">Contato</a>
                </li>
                <li>
                    <button class="fas fa-user-circle my-2 my-sm-0 fa-2x user-login-button" type="button" data-toggle="modal" data-target="#modal-login" style="color: #929292;"></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
