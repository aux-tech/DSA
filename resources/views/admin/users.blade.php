@extends('admin.layout')

   @section('contentadmin')
         
   <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Cadastro de usuários administrativos</h1>
        
      </div>
      <!-- Content Row -->
      <div class="row">
         <!-- Area Chart -->
         <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
               <!-- Card Header - Dropdown -->
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6 busers" >Cadastro Cliente</button>
                  <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6 busers">Cadastro Administrador</button>
                  <button class="btn btn-sm btn-light col-lg-3 col-md-3 col-sm-6 busers">Cadastro Administrador Master</button>
               </div>
               <!-- Card Body -->
               <div class="card-body">
                  <div class="row my-4">
                     <div class="col-lg-1"></div>
                     <div class="col-lg-10">
                        <form action="{{route('client.store')}}"  method="POST" class="displayusers" style="display: ">
                           @csrf
                           <div>
                              <input name="stepcadastro" value="1" style="display:none">
                              <h5>Cadastro Cliente</h5>
                              <div class="row my-4">
                                 <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-Mail" name="email">
                                 <div class="col-lg-2"></div>         
                                 <select class="col-lg-5 form-control justify-content-center" name="rede_id">
                                    @foreach ($rede as $r)
                                    <option value="{{$r->id}}">{{$r->rede}}</option>
                                    @endforeach
                                 </select>    
                              </div>
                              <div class="row my-4">
                                 <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Usuário" name="user">
                                 <div class="col-lg-2"></div>
                                 <input class="col-lg-5 form-control justify-content-center" type="password" placeholder="Senha" name="password">
                              </div>
                              <br>
                              <button class="btn btn-light">Cadastrar</button>
                           </div>
                        </form>
                        <form action="{{route('client.store')}}"  method="POST" class="displayusers" style="display:none">
                           @csrf
                              <div>
                              <h5>Cadastra Administrador</h5>
                              <input name="stepcadastro" value="2" style="display:none">
                              <div class="row my-4">
                                 <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-Mail" name="email">
                                 <div class="col-lg-2"></div>
                                 <div class="col-lg-5"></div>
                              </div>
                              <div class="row my-4">
                                 <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Usuário" name="user">
                                 <div class="col-lg-2"></div>
                                 <input class="col-lg-5 form-control justify-content-center" type="password" placeholder="Senha" name="password">
                              </div>
                              <br>
                              <button class="btn btn-light">Cadastrar</button>
                           </div>
                        </form>
                        <form action="{{route('client.store')}}"  method="POST" class="displayusers" style="display:none">
                        @csrf
                           <div>
                              <h5>Cadastra Administrador Master</h5>
                              <input name="stepcadastro" value="3" style="display:none">
                              <div class="row my-4">
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="E-Mail" name="email">
                              <div class="col-lg-2"></div>
                              <div class="col-lg-5"></div>
                              </div>
                              <div class="row my-4">
                              <input class="col-lg-5 form-control justify-content-center" type="text" placeholder="Usuário" name="user">
                              <div class="col-lg-2"></div>
                              <input class="col-lg-5 form-control justify-content-center" type="password" placeholder="Senha" name="password">
                              </div>
                              <br>
                              <button class="btn btn-light">Cadastrar</button>
                        </div>
                     </form>
                     </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-1"></div>
            </div>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      var busers = document.getElementsByClassName('busers');
      var dusers = document.getElementsByClassName('displayusers');
      
      busers[0].addEventListener("click",function(){
         for(var j=0;j<dusers.length;j++){
         dusers[j].style.display="none"; 
         }
         dusers[0].style.display = "";
      });
      busers[1].addEventListener("click",function(){
         for(var j=0;j<dusers.length;j++){
         dusers[j].style.display="none"; 
         }
         dusers[1].style.display = "";
      });
      busers[2].addEventListener("click",function(){
         for(var j=0;j<dusers.length;j++){
         dusers[j].style.display="none"; 
         }
         dusers[2].style.display = "";
      });   
      
   </script> 
   @endsection