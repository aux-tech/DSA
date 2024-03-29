

@extends('client.layout')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cronogramas da Rede ----</h1>
          </div>

          <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="border-left:.25rem solid #99979d;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#99979d;">M&V (ex-ante)</div>
              <div class="row">
                 
                            
                <div class="el" data-value="0">
                  <span class="needle"></span>
                </div>   

              </div>  
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
      <div class="card shadow h-100 py-2" style="border-left:.25rem solid #99979d;">
        <div class="card-body">          
          <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#99979d;">Instalação Iluminação</div>
             <div class="row">
                 
              <div class="el" data-value="0">
                <span class="needle"></span>
              </div>    

            </div>   
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
      <div class="card shadow h-100 py-2" style="border-left:.25rem solid #99979d;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#99979d;">Instalação FV</div>
              <div class="row">
                 
                <div class="el" data-value="0">
                  <span class="needle"></span>
                </div>    

              </div>   
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
      <div class="card shadow h-100 py-2" style="border-left:.25rem solid #99979d;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#99979d;">M&V (ex-post)</div>
              <div class="row">
                    
                  <div class="el" data-value="0">
                    <span class="needle"></span>
                  </div>     
                      
                  </div>      
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
        <div class="card-body" style="overflow: auto; width: 100%; height: auto; text-align: center;">
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
                  <div class="progress-bar " role="progressbar" style="width: 100%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 100%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 100%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 100%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 100%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 60%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
              </div>
              <div class="col">
                <div class="progress progress-sm "style="height: 15px;">
                  <div class="progress-bar " role="progressbar" style="width: 0%; background-color:#fecb00;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
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

        <div class="cronograms" style="border-bottom: 2px solid #e3e6f0; display: none;"></div>
                <div class="card-body cronograms" style="display: none;overflow: auto; width:100%; height:auto ; ">
                  
                  <div class="row" style="width:2100px; height : 144px; text-align:center;">

                    <div class="col mx-1" style="background:#f8f9fc; "><p class="mx-auto">Projeto</p></div>
                    <div class="col mx-1" style="background:#f8f9fc; "><p class="mx-auto">CMD</p></div>
                    <div class="col mx-1" style="background:#f8f9fc; "><p class="mx-auto">Colégio Maria Auxiliadora</p></div>

                    <div class="col mx-1" style="height:100%" >
                        <div class="row mb-1" style="background:#f8f9fc; height : 70px;"><p class="mx-auto">iluminação</p></div>
                        <div class="row mt-1" style="background:#f8f9fc; height : 70px;"><p class="mx-auto">GD Fotovoltaica</p></div>
                    </div>

                    <div class="col-8 mx-1" style="height:100%">
                      <div class="row mb-1" style="background:#f8f9fc; height : 70px;"><p class="mx-auto">iluminação</p></div>
                      <div class="row mt-1" style="background: #f8f9fc; height : 70px;"><p class="mx-auto">GD Fotovoltaica</p></div>
                    </div>

                  </div>
            
       </div> 
      </div>
    </div>
  </div>

  <script>
    var isHide = 1;
    function showhide(){
      if(isHide)
      {
        isHide = 0;
        $('.cronograms').show();
      }
      else
      {
        isHide = 1;
        $('.cronograms').hide();

      }
    }
  </script>

        
         
      </div>
    </div>
  </div>

          @endsection

     