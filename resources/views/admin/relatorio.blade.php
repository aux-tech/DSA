
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cache-control" content="no-cache" />
    <link href="{{asset('css/admin/modelogerador.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>Formulário</title>
    <style>
        
        table {
          border-collapse: collapse;
          width: 100%;
          
          border: none !important;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        th{
            
          border: none !important;
          border-bottom: 1px solid gray !important;
          border-top: 1px solid gray !important;
        }
        tr{
            
          border: none !important;
        }
        td{
            
          border: none !important;
          border-bottom: 1px solid gray !important;
          border-top: 1px solid gray !important;
        }
        
        </style>
    
</head>

<body style="background-color: transparent">
	
		<div class="container">


            <div class="row pt-5">
                <div class="sub-title col-md-9 col-sm-6 pt-5">
                <h4 class="tl"><span style="border-bottom: rgba(254, 203, 0, 1) solid 5px; font-weight: bolder" class="pb-2">Relatório Geração Mensal</span> </h4>
                </div>
                
                <img class="col-md-3 col-sm-6 rounded float-right w-50" src="{{asset('content/img/logo.jpg')}}">
                
            </div>
            <br>
                @foreach ($ucs as $uc)
                    @foreach ($rede as $r)
                        @foreach ($unidade as $u)
                            @if ($r->id == $u->rede_id && $u->id == $uc->unidade_id && $uc->id == $id)                                     
                                <h5>{{$r->name}} - {{$u->name}}</h5>
                            @endif
                                    
                        @endforeach                              
                    @endforeach                              
                @endforeach
                <br>
                <h5 class="tl" >Mês Análise</h5>
                <h6>{{$data}}</h6>
            
            <br>
            <br>
            <br>
            <div class="row pt-5">
           
                   <table class="col-12 table table-bordered">
                        <thead>
                        <tr>
                        <th style="visibility:hidden;"></th>
                        <th class="bkpl text-center ">Jan</th>
                        <th class="bkpl text-center ">Fev</th>
                        <th class="bkpl text-center ">Mar</th>
                        <th class="bkpl text-center ">Abr</th>
                        <th class="bkpl text-center ">Mai</th>
                        <th class="bkpl text-center ">Jun</th>
                        <th class="bkpl text-center ">Jul</th>
                        <th class="bkpl text-center ">Ago</th>
                        <th class="bkpl text-center ">Set</th>
                        <th class="bkpl text-center ">Out</th>
                        <th class="bkpl text-center ">Nov</th>
                        <th class="bkpl text-center ">Dez</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        <tr>
                        <th scope="row text-center">Geração Esperada (kWh)</th>
                        
                            @foreach ($ucs as $uc)
                            
                                @if ($id == $uc->id)
                                <td id="ge-1" class="text-center">{{str_replace('.',',',$uc->jan) }}</td>  
                                <td id="ge-2" class="text-center">{{str_replace('.',',',$uc->fev) }}</td>  
                                <td id="ge-3" class="text-center">{{str_replace('.',',',$uc->mar) }}</td>  
                                <td id="ge-4" class="text-center">{{str_replace('.',',',$uc->abr) }}</td>  
                                <td id="ge-5" class="text-center">{{str_replace('.',',',$uc->mai) }}</td>  
                                <td id="ge-6" class="text-center">{{str_replace('.',',',$uc->jun) }}</td>  
                                <td id="ge-7" class="text-center">{{str_replace('.',',',$uc->jul) }}</td>  
                                <td id="ge-8" class="text-center">{{str_replace('.',',',$uc->ago) }}</td>  
                                <td id="ge-9" class="text-center">{{str_replace('.',',',$uc->set) }}</td>  
                                <td id="ge-10" class="text-center">{{str_replace('.',',',$uc->out) }}</td>  
                                <td id="ge-11" class="text-center">{{str_replace('.',',',$uc->nov) }}</td>  
                                <td id="ge-12" class="text-center">{{str_replace('.',',',$uc->dez) }}</td>  
                                
                                        
                                @endif                      
                        
                            @endforeach   
                            
                        </tr>

                        <tr>
                        <th scope="row text-center">Geração Atual (kWh)</th>
                        @for ($i = 1; $i <10; $i++)
                        <p style="display: none">{{$x=0}}</p>
                            @foreach ($fatura as $item)
                                @if ("2020-0".$i."-01" == $item->date)
                                    <td id="gm-{{$i}}" class="text-center">{{str_replace('.',',',$item->geracao_mensal) }}</td>    
                                    <p style="display: none">{{$x=2}}</p>                                 
                                    @break
                                @else                                 
                                        <p style="display: none">{{$x=1}}</p>
                                        
                                @endif                      
                        
                            @endforeach  
                            
                            @if ($x==2)
                                @continue   
                            @endif 

                            @if ($x==1)
                                <td id="gm-{{$i}}" class="text-center">0</td>    
                            @endif    
   

                        @endfor
                                                
                        @for ($i = 10; $i <13; $i++)
                        <p style="display: none">{{$x=0}}</p>
                            @foreach ($fatura as $item)
                                @if ("2020-".$i."-01" == $item->date)
                                    <td id="gm-{{$i}}"  class="text-center">{{str_replace('.',',',$item->geracao_mensal) }}</td>    
                                    <p style="display: none">{{$x=2}}</p>                                 
                                    @break
                                @else                                 
                                        <p style="display: none">{{$x=1}}</p>
                                        
                                @endif                      
                        
                            @endforeach   
                            
                            @if ($x==2)
                                @continue   
                            @endif 

                            @if ($x==1)
                                <td id="gm-{{$i}}"  class="text-center">0</td>    
                            @endif    
   

                        @endfor    
                        </tr>
                        </tbody>
                   </table> 
                 
            </div>
           <br>
        
           <br>
           <br>
        <div class="row" style="height: 300px">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
           <canvas id="myChart" width="100%" height="100%"></canvas>
           <script>
               var data_esperado = new Array(12);
    var data_mensal = new Array(12);
      for(var i = 1; i < 13; i++) {
         data_esperado[i-1] =  parseInt( document.getElementById('ge-'+i).innerHTML, 10);
         data_mensal[i-1] =  parseInt( document.getElementById('gm-'+i).innerHTML, 10);
        }

           var ctx = document.getElementById('myChart');
           var myChart = new Chart(ctx, {
               type: 'bar',
               data: {
                   labels: ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN','JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ'],
                   datasets: [{
                       label: 'Geração Esperada (kWh)',
                       data: data_esperado,
                       backgroundColor: [
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                           'rgba(152, 151, 156, 1)',
                       ],
                       borderColor: [
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                       ],
                       borderWidth: 1
                   },{
                       label: 'Geração Mensal (kWh)',
                       data: data_mensal,
                       backgroundColor: [
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                           'rgba(254, 203, 0, 1)',
                       ],
                       borderColor: [
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                           'rgba(50, 50, 50, 1)',
                       ],
                       borderWidth: 1
                   }]
               },
               options: {
                   maintainAspectRatio: false,
                   scales: {
                       yAxes: [{
                           ticks: {
                               beginAtZero: true
                           },
                           gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                       }],
                       xAxes: [{
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                        }   
                        }]
                   }
               }
           });
        </script>
        </div>
        <div class="col-lg-1"></div>
        </div>
        <br>
        <br>
            <br>
            <br>
           @foreach ($fatura as $item)
            @if ($data."-01" == $item->date)
                
            <div class="row" style="height: 40px">
                <div  class="col-2 p-1"><img style="height: 70px; float: right" src="{{asset('content/img/relatorio/save-money.png')}}"></div>
                <h6  id="d1" class="col-3 tl px-1 bkpl brs text-center">Economia (R$)</h6>
                <div class="col-2"></div>
                <h6  id="d2" class="col-3 tl px-1 bkpl brs text-center">Árvores Cultivadas</h6>
                <div class="col-2"><img style="height: 70px" src="{{asset('content/img/relatorio/arvores.png')}}"></div>
            </div>
            <div class="row">
                <div class="col-2 "></div>
                <h6 class="col-3 tl p-1 text-center">{{"R$".number_format($item->geracao_mensal*0.8, 2, '.', '')}}</h6>
                <div class="col-2"></div>
                <h6 class="col-3 tl p-1 text-center">{{number_format($item->geracao_mensal*0.1244, 2, '.', '')}}</h6>
                <div class="col-2"></div>
            </div>  

            <br>
            <div class="row" style="height: 40px">
                <div class="col-2"><img style="height: 70px; float: right" src="{{asset('content/img/relatorio/co2.png')}}"></div>  
                <h6 id="d3" class="col-3 tl px-1 bkpl brs text-center" style="height: 70px">Carbono Evitado (kg)</h6>
                <div class="col-2"></div>
                <h6 id="d4" class="col-3 tl px-1 bkpl brs text-center" style="height: 70px">Número de Banhos</h6>
                <div class="col-2"><img style="height: 70px" src="{{asset('content/img/relatorio/lavar-a-cabeca.png')}}"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <h6 class="col-3 tl  p-1 text-center">{{number_format($item->geracao_mensal*5.04*pow(10,-4), 2, '.', '')}}</h6>
                <div class="col-2"></div>
                <h6 class="col-3 tl  p-1 text-center">{{number_format($item->geracao_mensal/(1.105*1000), 2, '.', '')." mil"}}</h6>
                <div class="col-2"></div>
            </div>
            @break
            @endif
            
            @endforeach
		</div>	
        <br>	
        <br>
        <div class="container-flex bkplf">
            <h4 class="text-center tlf">Contato</h4>
            <h5 class="text-center tlf">(51) 3785.4761 - fotovoltaico@dsa-engenharia.com</h5>
            <h5 class="text-center tlf">Rua Liberdade, 33 - Sala 1003 - Mal Rondon - Canoas/RS</h5>
        <div>

    <script type="text/javascript">
    

    </script>
    
	
</body>

</html>