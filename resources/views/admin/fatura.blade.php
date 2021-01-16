@if (Auth::user()->type == 0)
    @php
        header('location: client');
    @endphp
@endif

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro de Fatura</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="{{asset('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">


  <style>
    
    .disp
    {
        border-radius:25px;
        background-color:#f8f9fa;
    }
    
    h2{
        color:#ffc107;
    }
    
    .h-90{
        height:90%;
    }
    .w-475{
        width:47.5%;
    }
    input:hover{
        border-color:#ffc107
    }
    
    </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DSA ENGENHARIA </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Instituições
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/fatura') }}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastrar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('relatorio')}}" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Relatório</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        ADMINISTRATIVO
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/usuarios') }}" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Usuários</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cadastro de Instituições e Faturas</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>

          

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                     
                    <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6" id="botao1">Rede</button>
                    <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6" id="botao2">Unidade</button>
                    <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6" id="botao3">UC</button>
                    <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6" id="botao4">Fatura</button>
                    
                  
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    
    
                  
    
            <div class="row my-4" id="cadastra-instituicao">
                
              <div class="col-lg-1"></div>    
              <div class="col-lg-10">        
            <form action="{{route('fatura.store')}}"  method="POST">
                            @csrf

                            <input name="step" value="1" style="display:none">
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Concessionária" name="concessionaria">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Nome Mantenedora" name="mantenedora">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="CNPJ Mantenedora" name="cnpj">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-Mail" name="email">
     
                            </div>
                           
                            
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Login Site" name="user">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="password" placeholder="Senha" name="password">
     
                            </div>
                            <br>
                            <button class="btn btn-light">Cadastrar</button>
                        </form>
              </div>  
              <div class="col-lg-1"></div> 
                    </div>
    
                    <div class="row my-4" id="cadastra-Unidade" style="display:none;">     
                        
                        <div class="col-lg-1"></div>    
                        <div class="col-lg-10">
                        <form action="{{route('fatura.store')}}" method="POST">
                            @csrf
                            <div class="row my-4">
                            <select class="col-lg-12 form-control justify-content-center" name="rede_id">
                              @foreach ($rede as $r)
                            <option value="{{$r->id}}">{{$r->name}}</option>
                              @endforeach
                            </select>
                            </div>
                            <input name="step" value="2" style="display:none">
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Colégio" name="name">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="CNPJ" name="cnpj">
     
                            </div>

                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Número de alunos" name="alunos">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Endereço" name="endereco">
     
                            </div>

                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Contato Direção" name="contato">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Telefone" name="telefone">
     
                            </div>

                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-mail Contato" name="email_contato">
                              <div class="col-lg-7"></div>
     
                            </div>

                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Login Site" name="email">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Senha" name="senha">
     
                            </div>
                             <br>
                            <button class="btn btn-light">Cadastrar</button>
                        </form>
                        </div>
                        <div class="col-lg-1"></div> 
                        
    
                    </div>    
    
                    <div class="row my-4" id="cadastra-UC" style="display:none;" >   
    
                      <div class="col-lg-1"></div>    
                      <div class="col-lg-10">
                        <form action="{{route('fatura.store')}}" method="POST">
                            @csrf
                            <div class="row my-4">
                            <select class="col-lg-12 form-control justify-content-center" name="unidade_id">
                              @foreach ($unidade as $u)
                                @foreach ($rede as $r)
                                  @if ($r->id == $u->rede_id)                                      
                                    <option value="{{$u->id}}">{{$r->name}} - {{$u->name}}</option>
                                  @endif
                              
                               @endforeach                              
                              @endforeach
                            </select>
                            </div>
                            <input name="step" value="3" style="display:none">
                            <div class="row my-4">
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Unidade Consumidora" name="name">
                              <div class="col-lg-2"></div>
                              <select class="col-lg-5 form-control justify-content-center"  name="tarifa">
                                <option value="1"> Bandeira 1</option>
                                <option value="2"> Bandeira 2</option>
                                <option value="3"> Bandeira 3</option>
                              </select>
                            </div>

                            <div class="row my-4"> 
    
                              <input  class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Janeiro" name="jan" >
                              <script>
                                $(document).ready(function(){
                                  $('.float').mask("#.##0,00", {reverse: true});
                                });
                              </script>
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Fevereiro" name="fev">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Março" name="mar">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Abril" name="abr">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Maio" name="mai">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Junho" name="jun">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Julho" name="jul">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Agosto" name="ago">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Setembro" name="set">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Outubro" name="out">
     
                            </div>
                            <div class="row my-4"> 
    
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Novembro" name="nov">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Dezembro" name="dez">
     
                            </div>


                            <br>


                            <button class="btn btn-light">Cadastrar</button>
                        </form>
                      </div>
                        <div class="col-lg-1"></div> 
                    </div>    
    
                    <div class="row" id="cadastra-fatura" style="display:none;">   
    
                      
                        <div class="col-lg-1"></div>    
                        <div class="col-lg-10">
                        <form action="{{route('fatura.store')}}" method="POST">
                            @csrf
                            <div class="row my-4">
                            <select class="col-lg-5 form-control justify-content-center" name="uc_id">
                              @foreach ($ucs as $uc)
                                @foreach ($rede as $r)
                                  @foreach ($unidade as $u)
                                    @if ($r->id == $u->rede_id && $u->id == $uc->unidade_id) 
                                      <option value="{{$uc->id}}">{{$r->name}} - {{$u->name}} - {{$uc->name}}</option>
                                    @endif
                                  @endforeach                                  
                                @endforeach                            
                              @endforeach
                            </select>
                            <div class="col-lg-7"></div>
                                                       
                          </div> 

                            <input name="step" value="4" style="display:none">
                            <div class="row my-4">
                              <input class="col-lg-5 form-control justify-content-center" type="month" placeholder="Mês" name="date"> 
                              <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Consumo Ponta" name="consumo_ponta">
    
                            </div>    
    
                             <div class="row my-4"> 
    
                             <input class="col-lg-5 form-control justify-content-center  float" type="text" placeholder="Consumo Fora Ponta" name="consumo_fora_ponta">
                             <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center  float" type="text" placeholder="Consumo Total" name="consumo_total">
    
                             </div>
    
                             <div class="row my-4">
    
                             <input class="col-lg-5 form-control justify-content-center  float" type="text" placeholder="Demanda Medida" name="demanda_medida">
                             <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center  float" type="text" placeholder="Demanda Contratada" name="demanda_contratada">
    
                             </div>
    
                             <div class="row my-4">
    
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Custo da Fatura de EE" name="custo">
                             <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Geração Mensal" name="geracao_mensal">
    
                             </div>
    
                             <div class="row my-4">
                             
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Energia Injetada FP" name="injetada_fp">
                             <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Energia Injetada P" name="injetada_p">
    
                             </div>
    
                             <div class="row my-4">
                             
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Saldo mensal" name="saldo_mensal">
                             <div class="col-lg-2"></div>
                             <input class="col-lg-5 form-control justify-content-center float" type="text" placeholder="Saldo Acumulado" name="saldo_acumulado">
                             
                             </div>
                             <br>
                            <button class="btn btn-light">Cadastrar</button>
                             
                             </form>
                              </div>
                             <div class="col-lg-1"></div>    
    
                    </div>
                         
    
    
    
    
                </div>
                </div>
              </div>

            
          </div>

         

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->


  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script type="text/javascript">
       

        var b1 = document.getElementById('botao1');
        var b2 = document.getElementById('botao2');  
        var b3 = document.getElementById('botao3'); 
        var b4 = document.getElementById('botao4');

        var c1 = document.getElementById('cadastra-Unidade');
        var c2 = document.getElementById('cadastra-UC');
        var c3 = document.getElementById('cadastra-fatura'); 
        var c4 = document.getElementById('cadastra-instituicao');
        
       
        b1.addEventListener("click",function(){

        c1.style.display = "none";    
        c2.style.display = "none";     
        c3.style.display = "none";  
        c4.style.display = "";  

        });

        b2.addEventListener("click",function(){
 
        c1.style.display = "";    
        c2.style.display = "none";     
        c3.style.display = "none";  
        c4.style.display = "none";  

        

        });

        b3.addEventListener("click",function(){

        c1.style.display = "none";    
        c2.style.display = "";     
        c3.style.display = "none";  
        c4.style.display = "none";  

        });

        b4.addEventListener("click",function(){

        c1.style.display = "none";    
        c2.style.display = "none";     
        c3.style.display = "";  
        c4.style.display = "none"; 

        });
        
</script>
</body>

</html>
