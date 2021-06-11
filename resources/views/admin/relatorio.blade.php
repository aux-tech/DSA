
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
                                <h5>{{$r->rede}} - {{$u->unidade}}</h5>
                            @endif
                                    
                        @endforeach                              
                    @endforeach                              
                @endforeach
                <br>
                <h5 class="tl" >Mês Análise</h5>
                <h6>{{$data_i}}</h6>
                <h6>{{$data_f}}</h6>
            
            <br>
            <br>
            <br>
                   
            <div class="row pt-5">
           
                   <table class="col-12 table table-bordered">
                        <thead>
                        <tr>
                        <th style="visibility:hidden;"></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <th  class="bkpl mes text-center "></th>
                        <script>
                           
                            var mes = document.getElementsByClassName('mes');
                            var meses = ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"]
                            
                            
                                if({{$posi}} == 0){
                                    for(var mth = 0;mth<mes.length;mth++){
                                     mes[mth].innerHTML = meses[mth];
                                    }
                                }else
                                {
                                    for(var mth = 0;mth<mes.length;mth++){
                                        if((mth+{{$posi}}) <= mes.length){
                                            mes[mth].innerHTML = meses[(mth+{{$posi}}-1)];
                                        }else{
                                            mes[mth].innerHTML = meses[ ((mth+{{$posi}})-mes.length-1)];
                                        }
                                    }
                                }

                        </script>    
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        <tr>
                        <th scope="row text-center">Geração Esperada (kWh)</th>
                        
                         
                            
                               @for($i = 0;$i<12;$i++)
                                <td id="ge-{{$i+1}}" class="text-center">{{$mesesuc[$i]}}</td>  
                               @endfor
                            
                        </tr>
                        <tr>
                        <th scope="row text-center">Geração Atual (kWh)</th>
                            @if($posi == 0)
                                @for($i=1;$i<13;$i++)
                                    <td id="gm-{{$i}}" class="text-center">{{$gerador[$i]}}</td>
                                @endfor                          
                            @else
                                @for($i=1;$i<13;$i++)
                                    <td id="gm-{{$i}}" class="text-center">{{$gerador[$i]}}</td>
                                @endfor            
                            @endif                      
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
            </div>
            <div class="col-lg-1"></div>
            </div>
            <br>
            <br>
            <br>
            <br>
                
            <div class="row" style="height: 40px">
                <div  class="col-2 p-1"><img style="height: 70px; float: right" src="{{asset('content/img/relatorio/save-money.png')}}"></div>
                <h6  id="d1" class="col-3 tl px-1 bkpl mes brs text-center">Economia (R$)</h6>
                <div class="col-2"></div>
                <h6  id="d2" class="col-3 tl px-1 bkpl mes brs text-center">Árvores Cultivadas</h6>
                <div class="col-2"><img style="height: 70px" src="{{asset('content/img/relatorio/arvores.png')}}"></div>
            </div>
            <div class="row">
                <div class="col-2 "></div>
                <h6 class="col-3 tl p-1 text-center">{{"R$".number_format($economia, 2, '.', '')}}</h6>
                <div class="col-2"></div>
                <h6 class="col-3 tl p-1 text-center">{{number_format($arvores, 2, '.', '')}}</h6>
                <div class="col-2"></div>
            </div>  

            <br>
            <div class="row" style="height: 40px">
                <div class="col-2"><img style="height: 70px; float: right" src="{{asset('content/img/relatorio/co2.png')}}"></div>  
                <h6 id="d3" class="col-3 tl px-1 bkpl mes brs text-center" style="height: 70px">Carbono Evitado (kg)</h6>
                <div class="col-2"></div>
                <h6 id="d4" class="col-3 tl px-1 bkpl mes brs text-center" style="height: 70px">Número de Banhos</h6>
                <div class="col-2"><img style="height: 70px" src="{{asset('content/img/relatorio/lavar-a-cabeca.png')}}"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <h6 class="col-3 tl  p-1 text-center">{{number_format($carbono, 2, '.', '')}}</h6>
                <div class="col-2"></div>
                <h6 class="col-3 tl  p-1 text-center">{{number_format($banhos, 2, '.', '')." mil"}}</h6>
                <div class="col-2"></div>
            </div>

		 </div>	
        <br>	
        <br>
        </div>
       
        <div class="container-flex bkpl mesf " style="background-color: #99969c;">
            <h4 class="text-center tlf">Contato</h4>
            <h5 class="text-center tlf">(51) 3785.4761 - fotovoltaico@dsa-engenharia.com</h5>
            <h5 class="text-center tlf">Rua Liberdade, 33 - Sala 1003 - Mal Rondon - Canoas/RS</h5>
        </div>
    
            <script>

                var data_esperado = new Array(12);
                var data_mensal = new Array(12);
                var meses = ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"];
                var mesesaux = new Array(12);

            for(var i = 1; i < 13; i++) {
                data_esperado[i-1] =  parseInt( document.getElementById('ge-'+i).innerHTML, 10);
                data_mensal[i-1] =  parseInt( document.getElementById('gm-'+i).innerHTML, 10);
                }

            if({{$posi}} == 0){
                for(var mth = 0;mth<12;mth++){
                    mesesaux[mth] = meses[mth];
                }
            }else
            {
                for(var mth = 0;mth<mesesaux.length;mth++){
                    if((mth+{{$posi}}) <= mesesaux.length){
                        mesesaux[mth] = meses[(mth+{{$posi}}-1)];
                    }else{
                        mesesaux[mth] = meses[ ((mth+{{$posi}})-mesesaux.length)-1];
                    }
                }
            }    
 
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    
                    labels: [ mesesaux[0], mesesaux[1],mesesaux[2],mesesaux[3], mesesaux[4], mesesaux[5], mesesaux[6], mesesaux[7], mesesaux[8], mesesaux[9], mesesaux[10], mesesaux[11] ],
                   
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
</body>

</html>