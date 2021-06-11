

@extends('client.layout')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projeto de Eficiência Energética na Rede ----</h1>            
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Selecione o Colégio da Rede ----</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="pie">
                        <script>
    window.onload = function() {             
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'bar',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                           'rgba(200, 200, 200, 1)',
                    ],
                    borderColor: '#777',
					label: 'Geração Esperada'
        },
        {
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                           'rgba(255, 255, 0, 1)',
                    ],
                    borderColor: '#777',
					label: 'Geração Atual'
				}],
				labels: [
					'JAN',
					'FEV',
					'MAR',
					'ABR',
					'MAI',
					'JUN',
					'JUL',
					'AGO',
					'SET',
					'OUT',
					'NOV',
					'DEZ'
				],
			},
			options: {
				responsive: true
			}
		};

		
			var ctx = document.getElementById('pie');
			myPie = new Chart(ctx, config);
		};


		
	
                        </script>
                    </canvas>
                </div>
              </div>
            </div>

           

          @endsection

     