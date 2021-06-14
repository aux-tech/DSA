<!-- Begin Page Content -->
@extends('admin.layout')
@section('contentadmin')
@if (Auth::user()->type == 0)
@php
header('location: client');
@endphp
@endif
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
                           <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Rede" name="rede">
                           <div class="col-lg-2"></div>
                           <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Concessionária" name="concessionaria">
                        </div>
                        <div class="row my-4">
                           <input class="col form-control justify-content-center" type="text" placeholder="CNPJ Mantenedora" name="cnpj">
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
                              <option value="{{$r->id}}">{{$r->rede}}</option>
                              @endforeach
                           </select>
                        </div>
                        <input name="step" value="2" style="display:none">
                        <div class="row my-4">
                           <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Unidade" name="unidade">
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
                           <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Telefone" name="numero">
                        </div>
                        <div class="row my-4">
                           <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-mail Contato" name="email">
                           <div class="col-lg-7"></div>
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
                              <option value="{{$u->id}}">{{$r->rede}} - {{$u->unidade}}</option>
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
                              <option value="{{$uc->id}}">{{$r->rede}} - {{$u->unidade}} - {{$uc->name}}</option>
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
@endsection