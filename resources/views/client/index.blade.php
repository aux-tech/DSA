

@extends('client/layout')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projeto de Eficiência Energética na Rede DSA</h1>
          </div>

          <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Economia Projetada </div>
              <br>
              <script>
                var geracao_mensal;
                $.getJSON('/client/data',function (produtos){
                  geracao_mensal = produtos[0].geracao_mensal;
                  console.log(geracao_mensal);
                  $('#geracao_mensal_total').html(geracao_mensal);
                  
                  });
              </script>
              <div class="row no-gutters align-items-center">
                <div class="col">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-size: 15px">Redução Consumo: 15 MWh</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2" style="height: 15px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">35%</div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row no-gutters align-items-center">
                <div class="col">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-size: 15px">Redução Custo: R$ 30.000 </div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2" style="height: 15px">
                    <div class="progress-bar bg-primery" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">35%</div>
                  </div>
                </div>
              </div>

              
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
         
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Economia Realizada Acumulada </div>
              <br>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-size: 15px">Redução Consumo: 12,8 MWh </div>
            </div>
            <div class="col">
              <div class="progress progress-sm mr-2" style="height: 15px">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30%</div>
              </div>
            </div>
          </div>
          <br>
          <div class="row no-gutters align-items-center">
            <div class="col">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-size: 15px">Redução Custo: R$ 23.600 </div>
            </div>
            <div class="col">
              <div class="progress progress-sm mr-2" style="height: 15px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4" style="">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inicio do Projeto <span style="float: right;">Tipo do Projeto</span></div> 
              
              <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 15px">Janeiro/2020<span style="float: right;">CPP PEE</span></div>
              <br>
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Benefícios Considerados a Partir de</div>
              
              <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 15px">Agosto/2020</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" style="display: none">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Redução Acumulada</div>
              
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Cronograma Financeiro</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body" style="font-weight: bold">
                  <div class="row">
                    <div class="col-12" >
                      Investimento Total: <span style="float: right">R$ 1000.000</span>
                      <br>
                      <div class="row no-gutters align-items-center">
                        <div class="col">
                          <div class=" mb-0 mr-3 " style="font-size: 15px">Realizado: </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2" style="height: 15px">
                            <div class="progress-bar bg-primery" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">75%</div>
                          </div>
                        </div>
                      </div>
                      <br>

                      <label for="" style="hidden"></label>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Investimentos</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body" style="font-weight: bold">
                  <div class="row">
                    <div class="col-9" >
                      PEE: <span style="float: right">R$ 750.000</span>
                      <br>
                      Contrapartida: <span style="float: right">R$ 250.000</span>
                      <br>
                      Total: <span style="float: right">R$ 1000.000</span>
                      <br>                      
                      Retorno Investimento: <span style="float: right">3 anos</span>
                      <label for="" style="hidden"></label>
                    </div>
                    <div class="col-3" style="border-left: 2px solid #AAA; text-align: right;">
                      75%
                      <br>
                      25%
                      <br>
                      100%
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-4" style="font-weight: bold">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Dados Do Projeto</h6>
                  
                </div>
                <!-- Card Body -->
                
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      Pontuação: 66
                      <br>
                      RCB: 0,78
                      <br>
                      EE: 77,6 MWh
                      <br>
                      RDP: 1,29 kW
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Classificação: 5°
                      <br>
                      CPP Light 001_2020
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Cronograma Físico </h6>
                  <button class="btn btn-primary" onclick="showhide();" style="right: 0px;">Ver mais</button>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">Diagnóstico</div>
                    <div class="col">Projeto Executivo</div>
                    <div class="col">Aquisição</div>
                    <div class="col">Instalação</div>
                    <div class="col">M&V</div>
                    <div class="col">Treinamento</div>
                    <div class="col">Relatórios</div>
                    <div class="col">Monitoramento</div>
                    <div class="col">Relatório Final</div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="progress progress-sm mr-2" style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                  </div>
                  <div class=""></div>
                </div>
                  <script>
                    var isHide = 1;
                    function showhide(){
                      if(isHide)
                      {
                        isHide = 0;
                        $('.projects').show();
                      }
                      else
                      {
                        isHide = 1;
                        $('.projects').hide();

                      }
                    }
                  </script>
                <!-- -->
                  <div class="projects" style="border-bottom: 2px solid #e3e6f0; display: none;"></div>
                <div class="card-body projects" style="display: none">
                  <h5>Projeto 1</h5>
                  <div class="row">
                    <div class="col">Diagnóstico</div>
                    <div class="col">Projeto Executivo</div>
                    <div class="col">Aquisição</div>
                    <div class="col">Instalação</div>
                    <div class="col">M&V</div>
                    <div class="col">Treinamento</div>
                    <div class="col">Relatórios</div>
                    <div class="col">Monitoramento</div>
                    <div class="col">Relatório Final</div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="progress progress-sm mr-2" style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">85%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2"style="height: 15px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="card-body projects" style="display: none">
                    <h5>Projeto 2</h5>
                    <div class="row">
                      <div class="col">Diagnóstico</div>
                      <div class="col">Projeto Executivo</div>
                      <div class="col">Aquisição</div>
                      <div class="col">Instalação</div>
                      <div class="col">M&V</div>
                      <div class="col">Treinamento</div>
                      <div class="col">Relatórios</div>
                      <div class="col">Monitoramento</div>
                      <div class="col">Relatório Final</div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="progress progress-sm mr-2" style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">35%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2"style="height: 15px;">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                      </div>
                    </div>
                  
                 
                </div>
              </div>
            </div>
          </div>

          @endsection

     