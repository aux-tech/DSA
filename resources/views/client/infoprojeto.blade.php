

@extends('client/layout')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cronogramas da Rede ----</h1>
          </div>

          <!-- Content Row -->
  <div class="row">

    
       


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">M&V (ex-ante)</div>
              <div class="row">
                 
                            
                    <canvas class="mx-auto" id="speedometer" width="210px" height="100px">Canvas not available.</canvas>
                    
                
              </div>
             
              <script>
               var speed1 = new  speedometer('speedometer');
               speed1.drawWithInputValue(100);
              </script>
              <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">          
          <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instalação Iluminação</div>
             <div class="row">
                 
                    <canvas  class="mx-auto" id="speedometer2" width="210px" height="100px">Canvas not available.</canvas>
                    
              </div>
            <script>
             var speed2 = new  speedometer('speedometer2');
             speed2.drawWithInputValue(95);
            </script>
            <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800"></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Instalação FV</div>
              <div class="row">
                 
                    <canvas class="mx-auto" id="speedometer3" width="210px" height="100px">Canvas not available.</canvas>
                   
              </div>
              <script>
                var speed3 = new speedometer('speedometer3');
                speed3.drawWithInputValue(70);
              </script>
              <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">M&V (ex-post)</div>
              <div class="row">
                    
                    <canvas class="mx-auto" id="speedometer4" width="210px" height="100px">Canvas not available.</canvas>
                   
              </div>
              
              <script>
                var speed4 = new speedometer('speedometer4');
                speed4.drawWithInputValue(45);
              </script>
              <div id="geracao_mensal_total" class="h5 mb-0 font-weight-bold text-gray-800"></div>
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
    <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-dark">Cronograma </h6>
          <div class="float-left">
            
          <button class="btn btn-primary">Físico</button><button class="btn btn-primary ml-4">Financeiro</button>

          </div>
          
        </div>
        <!-- Card Body -->
        <div class="card-body" style="overflow: auto; width: 100%; height: 300px; text-align: center;">
          <div style="width: 2500px; height: 100%;">
            <div class="row">
              <div class="col">Diagnóstico</div>
              <div class="col">Projeto Executivo</div>
              <div class="col">Aquisições Equipamentos e Serviços</div>
              <div class="col">Fiscalização, entrega de equipamentos</div>
              <div class="col">Medições (ex-ante)</div>
              <div class="col">Execução</div>
              <div class="col">Fiscalização e Comissionamento</div>
              <div class="col">Descarte</div>
              <div class="col">Medições (ex-post)</div>
              <div class="col">Treinamento</div>
              <div class="col">Certificados e evidências</div>
              <div class="col">Relatório M&V</div>
              <div class="col">Relatório Fianl</div>
              <div class="col">Relatório Complementar tarlM&V FV</div>
            </div>
            <div class="row">
              <div class="col">
                <div class="progress progress-sm " style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
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
          <h6 class="m-0 font-weight-bold text-dark">Considerações </h6>
          <button class="btn btn-primary" onclick="showhide();" style="right: 0px;">Ver mais</button>
          
        </div>
        
         
      </div>
    </div>
  </div>

          @endsection

     