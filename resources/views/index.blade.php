<!DOCTYPE html>
<html lang="pt">

<head>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/navbar-solucoes.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="vendor/AOS-scroll/aos.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://kit.fontawesome.com/935fbcb508.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<meta http-equiv="cache-control" content="no-cache" />
	<title>DSA ENGENHARIA</title>
	<style>
		.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
			background-color: #f8fafc00;
		}
		button.projetos {
			background-color: #666666bb;
			padding: 10px 30px 10px !important;
			font-weight: bold;
			color: #fafbfc;;
		}
		button.active{
			color: #666666;
		}

		span.sub {
			background: linear-gradient(to left, #f8c80a, #f8c80a) no-repeat bottom center;
			background-size: 100px 3px;
			background-position: 50% 100%;
		}
	</style>
</head>

<body>
	@extends('navbar')

	<section id="presentation" class="section">
		<video autoplay muted loop id="initialVideo">
			<source src="{{asset('content/video/background-video.mp4')}}" type="video/mp4">
		</video>
		<div class="container h-100 position-relative d-flex presentation-container">
			<div class="row">

				<div class="presentation-text-wrapper">
					
					<h1 class="title" data-aos="fade-up" id="presentation-title">DSA ENGENHARIA</h1>
					<div class="sp-container">
						<h2 class="frame frame-1">Projetos Fotovoltaicos</h2>
						<h2 class="frame frame-2">Eficiência Energética</h2>
						<h2 class="frame frame-3">Controle de Energia</h2>
						<h2 class="frame frame-4">
							<span class="span-1">Projetos Fotovoltaicos,</span>
							<span class="span-2">Eficiência Energética,</span>
							<span class="span-3">Gestão de Energia.</span>
						</h2>
					</div>
					
				</div>
				<div class="presentation-contact">
					<a href="#contato" class="ref">
						<button type="button" class="btn btn-outline-warning">Contato</button>
					</a>
				</div>
			</div>


		</div>

	</section>
	<div class="animation-container">
		<canvas id="particle-canvas"></canvas>
		<section id="empresa">
			<div class="container">

				<h2 class="sub-title mb-4 " data-aos="zoom-in"><span class="pb-2">No</span>ssa Empresa</h2>

				<div class="row">
					
					<div class="col-lg-12 mt-4 mt-lg-0">
						<video controls class="img-fluid aboutus-video">
							<source src="{{asset('content/video/DSA-L3.mp4')}}" type="video/mp4">
						</video>
					</div>
				</div>

			</div>
		</section>

		<section id="clientes">
			<div class="container">

				<h2 class="sub-title mb-4 " data-aos="zoom-in"><span class="pb-2">No</span>ssos Parceiros</h2>
				<!-- FALTOU IMAGENS DAS LOGOS ASSOCIOAÇÃO DE NOTRI DAME,AISEC,XXX,YYY,ZZZ E COLÉGIO MARTIN LUTHER.
				RESOLUÇÃO DE TODAS AS IMAGENS 180120 -->

		<!-- Slide SHOW 1 LINHA-->
		<div class="swiper-container row ">
		<div class="swiper-wrapper" data-aos="fade-right">
		<div class="swiper-slide"><img src="{{asset('content/img/slider/1.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/2.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/3.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/4.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/5.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/6.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/7.png')}}"></div>
		<div class="swiper-slide"><img src="{{asset('content/img/slider/8.png')}}"></div>

		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
		</div>

					<!-- Slide SHOW 2 LINHA-->
					<div class="swiper-container row" >
						<div class="swiper-wrapper">

							<div class="swiper-slide"><img src="{{asset('content/img/slider/9.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/10.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/11.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/12.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/13.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/14.png')}}"></div>
							<div class="swiper-slide"><img src="{{asset('content/img/slider/15.png')}}"></div>

						</div>
						<!-- Add Pagination -->


					</div>
		</section>
		<section id="areas">

			<div class="container zimagens">

				<h2 class="sub-title mb-4 textshadow" data-aos="zoom-in"><span class="pb-2">Pr</span>ojetos Aprovados</h2>

				<div class="row my-5" >

					<div  class="col-xl-6 col-lg-12">
						<img id="map-0" class=" container p-5 maps"  src="{{asset('content/img/map.png')}}" >
						<img id="map-1" class=" container p-5 maps"  src="{{asset('content/img/map-rs.png')}}" style="display: none;">
						<img id="map-2" class=" container p-5 maps"  src="{{asset('content/img/map-pr.png')}}" style="display: none;">
						<img id="map-3" class=" container p-5 maps"  src="{{asset('content/img/map-sp.png')}}" style="display: none">
						<img id="map-4" class=" container p-5 maps"  src="{{asset('content/img/map-rj.png')}}" style="display: none;">	
					</div>

					<div class="col-xl-6 ">
						<div class="row pt-5">
							<nav>
								<ul id="projetos" class="nav nav-tabs">
									<li class="nav-item">
										<button class="nav-link active projetos"onclick="$('.maps').hide();$('#map-0').show();$('.text').hide();$('#text-0').show();">Geral</button>
									  </li>
									  <li class="nav-item">
										<button class="nav-link projetos" onclick="$('.maps').hide();$('#map-3').show();$('.text').hide();$('#text-3').show();">CPFL</button>
									  </li>
									<li class="nav-item">
									<button class="nav-link projetos"  onclick="$('.maps').hide();$('#map-1').show();$('.text').hide();$('#text-1').show();">RGE</button>
									</li>
									<li class="nav-item">
									<button class="nav-link projetos"  onclick="$('.maps').hide();$('#map-2').show();$('.text').hide();$('#text-2').show();">COPEL</button>
									</li>
									<li class="nav-item">
									<button class="nav-link projetos"  onclick="$('.maps').hide();$('#map-4').show();$('.text').hide();$('#text-4').show();">LIGHT</button>
									</li>
							  </ul>	
							</nav>
							<script>
								$('.projetos').click(function(e){
									$('.projetos').removeClass('active');
									$(this).addClass('active');
									
						$('#info').width($('#projetos').width()-22);
								})
							</script>
												
						</div>
						<div class="row" style="height: 77%;">
							<div id="info" style="padding: 10px; margin-top: -1px; background-color: #f8fafc00; border: 1px solid rgb(222, 226, 230); border-radius: 0px 0px 5px 5px; border-top:rgba(222, 226, 230,0); height: 100%;" >
								<div class="text" id="text-0" >
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Nú</span>mero de Projetos Aprovados:</span>  13</p>
									<br><br><br>
									<p><span style="font-weight: bold;color: black;"><span class="pb-2 sub">Va</span>lor Total de Projetos Aprovados:</span> R$ 11.753.650,87</p>
									<br><br><br>
									<p><span style="font-weight: bold;color: black;"><span class="pb-2 sub">RC</span>B médio dos Projetos:</span> 0,72</p>
								</div><div class="text" id="text-1" style="display: none">
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Nú</span>mero de Projetos Aprovados:</span>  5</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Va</span>lor Total de Projetos Aprovados:</span> R$ 5.608.852,94</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">RC</span>B médio dos Projetos:</span> 0,80</p>
								</div>
								<div class="text" id="text-2" style="display: none">
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Nú</span>mero de Projetos Aprovados:</span> 6</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Va</span>lor Total de Projetos Aprovados:</span> R$ 3.094.736,36</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">RC</span>B médio dos Projetos:</span> 0,69</p>
								</div>
								<div class="text" id="text-3" style="display: none">
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Nú</span>mero de Projetos Aprovados:</span> 1</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Va</span>lor Total de Projetos Aprovados:</span> R$ 2.304.095,83</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">RC</span>B médio dos Projetos:</span> 0,65</p>
								</div>
								<div class="text" id="text-4" style="display: none">
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Nú</span>mero de Projetos Aprovados:</span> 1</p>
									<br><br><br>
									<p><span style="font-weight: bold; color: black;"><span class="pb-2 sub">Va</span>lor Total de Projetos Aprovados:</span> R$ 745.965,74</p>
									<br><br><br>
									<p><span style="font-weight: bold;color: black; "><span class="pb-2 sub">RC</span>B médio dos Projetos:</span> 0,63</p>
								</div>
							</div>
						</div>
						<script>
							
						$('#info').width($('#projetos').width()-22);
							  window.onload = function() {
						$('#info').width($('#projetos').width()-22);							  }
							  </script>

					</div>

				</div>
		</section>

		<section id="servicos">
			<div class="container">

				<h2 class="sub-title mb-4 " data-aos="zoom-in"><span class="pb-2">So</span>luções</h2>

				<div class="row my-5">
					<div class="col fas fa-bolt fa-5x text-center">
						<h5></h5>
						 <button class="btn btn-new my-5" onclick="$('.soluc-text').hide();$('#EE').show();">Eficiência Energética</button>
					</div>
					<div class="col fas fa-project-diagram fa-5x text-center">
                        <h5></h5>
						<button class="btn btn-new my-5" onclick="$('.soluc-text').hide();$('#EP').show();">Estruturação de Projeto</button>
					</div>
					<div class="col fas fa-battery-full fa-5x text-center">
                        <h5></h5>
						<button class="btn btn-new my-5" onclick="$('.soluc-text').hide();$('#PEE').show();">Programa de Eficiência Energética</button>
					</div>
				</div>

				<div class="row" style="background-color: #666666FF; border-radius: 10px;">
					
					<div id="EE" class="soluc-text" style="display: none;">
						
						<div style=" padding: 30px; ">
							<h2 class="sub-title mb-4 " data-aos="zoom-in" style="color: #fafbfc;"><span class="pb-2">Ef</span>iciência Energética</h2>
							<p style="color: #fafbfc">Seja qual for o tamanho e o segmento de sua empresa, as soluções de eficiência energética desempenham um papel fundamental para torná-la mas competitiva no seu segmento.
							A DSA permite que a sua empresa mantenha o foco no crescimento do negócio, reduzindo custos e preocupações com a energia.</p>
						</div>
						</div>
					<div id="EP" class="soluc-text" style="display: none;">
						<div style=" padding: 30px; ">							
							<h2 class="sub-title mb-4 " data-aos="zoom-in" style="color: #fafbfc;"><span class="pb-2">Es</span>truturação de Projeto</h2>
							<p style="color: #fafbfc">Nossas soluções atendem a empresas de diversos segmentos, com o compromisso de tornar os seus clientes mais competitivos no mercado em que atuam, oferecendo as mais variadas tecnologias disponíveis no mercado.
						</div>
						</p>
					</div>
					<div id="PEE" class="soluc-text" style="display: none;">					
						<div style=" padding: 30px; ">							
							<h2 class="sub-title mb-4 " data-aos="zoom-in" style="color: #fafbfc;"><span class="pb-2">Pr</span>ograma de Eficiência Energética</h2>	
							<p style="color: #fafbfc">A DSA possui grande experiência no desenvolvimento de Projetos de Eficiência Energética no padrão do PEE/ANEEL (Programa de Eficiência Energética da 
								Agência Nacional de Energia Elétrica) conforme diretrizes e regulamentos dos Procedimentos de Eficiência Energética – PROPEE.
								Os segmentos atendidos, são: Industrial, Comercial, Saneamento, Comunidades de Baixo Poder Aquisitivo, Varejo, Hospitalar, Prédios e Serviços Públicos.
							</p>
							<br>
							<div class="row">
								<div class="col-3"></div>
								<div class="col-3"></div>
								<div class="col-3"></div>
								<div class="col-3"></div>
							</div>

						</div>
					</div>

				</div>
				

			</div>
		</section>

	</div>
	<section id="contato" class="contact container-contact100">

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Entre em Contato
				</span>
			</div>

			<form class="contact100-form validate-form" id="contactForm" method="POST" action="?">
				<input type="hidden" name="token" value="">
				<div class="wrap-input100 validate-input">
					<span class="label-input100" style="color: #fafbfc;">Nome:</span>
					<input class="form__field input-validator" data-validation-type="required" data-validation-style="outside" data-invalid-message="Nome é obrigatório." type="text" name="name" placeholder="Seu nome aqui" autocomplete="off" style="border-bottom: 2px solid #fafbfc;">
			
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100" style="color: #fafbfc;">E-mail:</span>
					<input class="form__field input-validator" type="email" name="email" data-validation-type="email" data-validation-style="outside" data-invalid-message="Email inválido." placeholder="Seu e-mail aqui" autocomplete="off" style="border-bottom: 2px solid #fafbfc;">
			
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100" style="color: #fafbfc;">Celular:</span>
					<input class="form__field input-validator" id="phone-input" type="text" name="phone" data-validation-type="phone" data-validation-style="outside" data-invalid-message="Celular inválido." placeholder="Celular" autocomplete="off" style="border-bottom: 2px solid #fafbfc;">
		
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100" style="color: #fafbfc;">Mensagem:</span>
					<textarea class="form__field input-validator" name="message" data-validation-type="required" data-validation-style="outside" data-invalid-message="Mensagem é obrigatória." placeholder="Sua mensagem..." style="min-height: 60px; max-height: 400px;    border-bottom: 2px solid #fafbfc;"></textarea>
		
				</div>

				<div class="container">
					<div class="contact-feedback w-100 py-2">

					</div>
					<button class="contact100-form-btn mx-auto" style="border: 0;"  id="sendMessageButton" type="submit">
						<span>
							<i class="fas fa-envelope" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</section>
	
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">E-mail</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu e-mail" name="email">
						</div>
						
						<div class="form-group">
							<label for="exampleInputPassword1">Senha</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha" name="password">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-warning">Entrar</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
					</div>
				</form>
			</div>
		</div>
    </div>
    
	@extends('footer')
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/swiper.min.js.map')}}"></script>
	
</body>

</html>