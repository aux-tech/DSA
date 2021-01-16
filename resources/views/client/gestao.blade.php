

@extends('client/layout')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projeto de Eficiência Energética na Rede ----</h1>
          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Selecione o Colégio da Rede ----</h6>
                  <select class="form-control w-25" name="" id="projeto">
                    <option value="0">Pré Projeto</option>
                    <option value="1">Pós Projeto</option>
                    <option value="2">Benchmark/Indicadores</option>
                  </select>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                    <canvas id="pie" ></canvas>
                    <canvas id="pie2" style="display: none;"></canvas>
                    <canvas id="pie3" style="display: none;"></canvas>
                        <script>
    window.onload = function() {  
    
    $("#projeto").change(function(){
    console.log($(this).val());
      if( $(this).val() == 0)
      {
        $('#pie').show();
        $('#pie2').hide();
        $('#pie3').hide();
        $('#informacoes').hide();
      }  
      else if( $(this).val() ==1 )
      {
        $('#pie').hide();
        $('#pie2').show();
        $('#pie3').hide();
        $('#informacoes').hide();
      }
      else
      {
        $('#pie').hide();
        $('#pie2').hide();
        $('#pie3').show();
        $('#informacoes').show();
      }
      
    });

    $("#projeto2").change(function(){
      if( $(this).val() == 0)
      {
        $('#iluminacao').show();
        $('#climatizacao').hide();
        $('#eletrodomesticos').hide();
        $('#outros').hide();
      }  
      else if( $(this).val() == 1)
      {
        $('#iluminacao').hide();
        $('#climatizacao').show();
        $('#eletrodomesticos').hide();
        $('#outros').hide();
      }
      else if( $(this).val() == 2)
      {
        $('#iluminacao').hide();
        $('#climatizacao').hide();
        $('#eletrodomesticos').show();
        $('#outros').hide();
      }
      else if( $(this).val() == 3)
      {
        $('#iluminacao').hide();
        $('#climatizacao').hide();
        $('#eletrodomesticos').hide();
        $('#outros').show();
      }
      
    });



		var config1 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [45,34,16,5],
					backgroundColor: [
                        '#214670',
                        '#1d75c4',
                        '#60a3f7',
                        '#9bbbf1'
                    ],
                    borderWidth: 0,
                    borderColor: '#BBB',
                    hoverBorderColor: '#CCC',
                    hoverBorderWidth: 2,
					label: 'Usos Finais no Consumo Atual'
				}],
				labels: [
					'Iluminação',
					'Climatização',
					'Eletrodomésticos',
					'Outros'
        ],
        position: 'bottom'
			},
			options: {
				responsive: true,
        cutoutPercentage: 65,
  events: false,
  animation: {
    duration: 500,
    easing: "easeOutQuart",
    onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';

      this.data.datasets.forEach(function (dataset) {

        for (var i = 0; i < dataset.data.length; i++) {
          var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              total = dataset._meta[Object.keys(dataset._meta)[0]].total,
              mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
              start_angle = model.startAngle,
              end_angle = model.endAngle,
              mid_angle = start_angle + (end_angle - start_angle)/2;

          var x = mid_radius * Math.cos(mid_angle);
          var y = mid_radius * Math.sin(mid_angle);

          ctx.fillStyle = '#fff';
          /*if (i == 3){ // Darker text color for lighter background
            ctx.fillStyle = '#444';
          }*/
          var percent = String(Math.round(dataset.data[i]/total*100)) + "%";      
          //Don't Display If Legend is hide or value is 0
          //if(dataset.data[i] != 0 && dataset._meta[0].data[i].hidden != true) 
          {
            // Display percent in another line, line break doesn't work for fillText
            ctx.fillText(percent, model.x + x, model.y + y + 15);
          }
        }
      });               
    }
  }
}
    };

    

    
    var config2 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [20,49,21,10],
					backgroundColor: [
                        '#214670',
                        '#1d75c4',
                        '#60a3f7',
                        '#9bbbf1'
                    ],
                    borderWidth: 0,
                    borderColor: '#BBB',
                    hoverBorderColor: '#CCC',
                    hoverBorderWidth: 2,
					label: 'Usos Finais no Consumo Atual'
				}],
				labels: [
					'Iluminação',
					'Climatização',
					'Eletrodomésticos',
					'Outros'
        ],
        position: 'bottom'
			},
			options: {
				responsive: true,
        cutoutPercentage: 65,
  events: false,
  animation: {
    duration: 500,
    easing: "easeOutQuart",
    onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';

      this.data.datasets.forEach(function (dataset) {

        for (var i = 0; i < dataset.data.length; i++) {
          var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              total = dataset._meta[Object.keys(dataset._meta)[0]].total,
              mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
              start_angle = model.startAngle,
              end_angle = model.endAngle,
              mid_angle = start_angle + (end_angle - start_angle)/2;

          var x = mid_radius * Math.cos(mid_angle);
          var y = mid_radius * Math.sin(mid_angle);

          ctx.fillStyle = '#fff';
          /*if (i == 3){ // Darker text color for lighter background
            ctx.fillStyle = '#444';
          }*/
          var percent = String(Math.round(dataset.data[i]/total*100)) + "%";      
          //Don't Display If Legend is hide or value is 0
          //if(dataset.data[i] != 0 && dataset._meta[0].data[i].hidden != true) 
          {
            // Display percent in another line, line break doesn't work for fillText
            ctx.fillText(percent, model.x + x, model.y + y + 15);
          }
        }
      });               
    }
  }
}
    };
    
    var config3 = {
			type: 'bar',
			data: {
				datasets: [{
          label: 'Pré-Projeto',
					data: [264.8,283.8,21.2],
					backgroundColor: [
                        '#214670',
                        '#214670',
                        '#214670'
                    ],
                    borderWidth: 0,
                    borderColor: '#BBB',
                    hoverBorderColor: '#CCC',
                    hoverBorderWidth: 2
				},{
          label: 'Pós-Projeto',
					data: [47.4,59.8,3.8],
					backgroundColor: [
                        '#1d75c4',
                        '#1d75c4',
                        '#1d75c4'
                    ],
                    borderWidth: 0,
                    borderColor: '#BBB',
                    hoverBorderColor: '#CCC',
                    hoverBorderWidth: 2
				},{
          label: 'Benchmark',
					data: [50.4,10,5.1],
					backgroundColor: [
                        '#60a3f7',
                        '#60a3f7',
                        '#60a3f7'
                    ],
                    borderWidth: 0,
                    borderColor: '#BBB',
                    hoverBorderColor: '#CCC',
                    hoverBorderWidth: 2
				}],
				labels: [
					'kWh/aluno',
					'R$/aluno',
					'kWh/m2'
        ],
        position: 'bottom'
			},
			options: {
        legend: {
            display: true
        },
        scales: {
        xAxes: [{
            gridLines: {
                color: "rgba(0, 0, 0, 0)",
            }
        }],
        yAxes: [{
            gridLines: {
                color: "rgba(0, 0, 0, 0)",
            }   
        }]
    },
				responsive: true,
        cutoutPercentage: 75,
        
			}
    };
    
  
		
    var ctx = $('#pie');
      var myPie = new Chart(ctx, config1);
    var ctx2 = $('#pie2');
			var myPie2 = new Chart(ctx2, config2);
    var ctx3 = $('#pie3');
			var myPie3 = new Chart(ctx3, config3);
    };
    
    

	
                        </script>
                    
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Selecione o uso final que deseja consultar as sugestões:</h6>
                  <select class="form-control " style="width: 38%" name="" id="projeto2">
                    <option value="0">Iluminação</option>
                    <option value="1">Climatização</option>
                    <option value="2">Eletrodomésticos</option>
                    <option value="3">Outros</option>
                  </select>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <ul id=iluminacao>
                    <li>Todas as oportunidades de otimização desse uso final já foram executadas!</li>
                  </ul>

                  <ul id="climatizacao" style="display: none">
                    <li>Substituir os equipamentos que não possuem selo A do PROCEL por outros que possuam e tenham a tecnologia INVERTER.</li>
                    <ul>
                      <li>Dificuldade: Baixa</li>
                      <li>Investimento: Alto</li>
                      <li>Retorno: Moderado</li>
                      <li>Ocorrências:</li>
                      <ul>
                        <li>Bloco A, Salas 200 a 220: Split, 20.000 BTU/h, Selo D. Quantidade Total: 20.</li>
                        <li>Bloco C, Salas 300 a 315: Split, 30.000 BTU/h, Selo C. Quantidade Total: 12</li>
                        <li>Bloco D, Salas 100 a 105, Split, 10.000 BTU/h, Selo D. Quantidade Total: 5</li>
                      </ul>
                    </ul>
                  
                  </ul>

                  <ul id="eletrodomesticos" style="display: none">
                    <li>Substituir os equipamentos que não possuem selo A do PROCEL por outros que possuam.</li>
                    <ul>
                      <li>Dificuldade: Baixa</li>
                      <li>Investimento: Moderado</li>
                      <li>Retorno: Moderado</li>
                      <li>Ocorrências:</li>
                      <ul>
                        <li>Cozinha, micro-ondas.</li>
                        <li>Cozinha, geladeira.</li>
                      </ul>
                    </ul>
                  
                  </ul>

                  <ul id="outros" style="display: none">
                    <li>Os equipamentos que compõem esse subgrupo não representam um consumo elevado na Instituição, assim, sugere-se que: </li>
                    <ul>
                      <li> Usuários mantenham uma boa utilização de todos os equipamentos, evitando desperdícios.</li>
                      <li>Equipamentos antigos, sejam cotados para substituição quando possível. </li>
                      <li>Todas as manutenções sejam executadas.</li>
                      
                    </ul>
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div id="informacoes" style="display: none" class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Informações</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body" style="font-weight: bold">
                  <div class="row">
                    <div class="col-4" >
                      <h4 style="font-weight: bold; color: #5a5c69;" >kWh/aluno</h4>
                      <br>
                      Pré-Projeto: 250 <span style="float: right"></span>
                      <br>
                      Pós-Projeto: 47.4 <span style="float: right"></span>
                      <br>
                      Benchmark: 50.4 <span style="float: right"></span>
                      <br>
                    <img src="{{asset('content/img/icons/like.svg')}}" height="60px" alt="">

                      <label for="" style="hidden"></label>
                    </div>

                    <div class="col-4" >
                      <h4 style="font-weight: bold; color: #5a5c69;" >R$/aluno</h4>
                      <br>
                      Pré-Projeto: 283.8 <span style="float: right"></span>
                      <br>
                      Pós-Projeto: 59.8 <span style="float: right"></span>
                      <br>
                      Benchmark: 10 <span style="float: right"></span>
                      <br>
                    <img src="{{asset('content/img/icons/bad-review.svg')}}" height="60px" alt="">

                      <label for="" style="hidden"></label>
                    </div>

                    <div class="col-4" >
                      <h4 style="font-weight: bold; color: #5a5c69;" >kWh/m²</h4>
                      <br>
                      Pré-Projeto: 21.2 <span style="float: right"></span>
                      <br>
                      Pós-Projeto: 3.8 <span style="float: right"></span>
                      <br>
                      Benchmark: 5.1 <span style="float: right"></span>
                      <br>
                    <img src="{{asset('content/img/icons/like.svg')}}" height="60px" alt="">

                      <label for="" style="hidden"></label>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>

          @endsection

     