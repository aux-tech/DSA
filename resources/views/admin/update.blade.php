@extends('admin.layout')
@section('contentadmin')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Gerenciador de Edição</h1>
       <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
    </div>
    <!-- Content Row -->
    <div class="row">
       <!-- Area Chart -->
       <div class="col-xl-12 col-lg-12">
          <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h5 class="btn btn-sm btn-light col busers" >Usuarios</h5>
               <h5 class="btn btn-sm btn-light col busers" >Redes</h5>
               <h5 class="btn btn-sm btn-light col busers" >Unidades</h5>
               <h5 class="btn btn-sm btn-light col busers" >UC</h5>
               <h5 class="btn btn-sm btn-light col busers" >Faturas</h5>
               
             </div>
             <!-- Card Body -->
             <div class="card-body">
                <div class="row my-4">
                <div class="col-lg-1"></div>
                 <div class="col-lg-10"> 

                                 <div class="displayusers" style="display: ;">
                                    <hr class="sidebar-divider my-0">
                                    <div class="row my-4">
                                       <h5 class="col text-center">Usuarios</h5>
                                       <h5 class="col text-center">email</h5>
                                       <h5 class="col text-center">Ações</h5>
                                    </div>
                                    <hr class="sidebar-divider my-0">
                                       <br>
                                    @foreach ($users as $us)
                                    <form action="{{ url("edit/$us->id")}}">
                                       @csrf
                                       <div class="row my-4">  
                                             <input name="stepdel" value="5" style="display:none;">  
                                             <h5 class="col text-center">{{$us->name}}</h5>
                                             <h5 class="col text-center">{{$us->email}}</h5>
                                             <button type="subtmit" class="col btn btn-sm btn-light">Editar</button>
                                              
                                       </div>
                                    </form>
                                 @endforeach 
                                 <br>          
                              </div>
                                                           
                              <div class="displayusers" style="display:none;">
                                 <hr class="sidebar-divider my-0">
                                 <div class="row my-4">
                                    <h5 class="col text-center">Redes</h5>
                                    <div class="col"></div>
                                    <h5 class="col text-center">Ações</h5>
                                 </div>
                                 <hr class="sidebar-divider my-0">
                                    <br>
                                 @foreach ($redes as $rd)
                                 <form action="{{ url("edit/$rd->id")}}">
                                    @csrf
                                    <div class="row my-4">  
                                          <input name="stepdel" value="3" style="display:none;">  
                                          <h5 class="col text-center">{{$rd->rede}}</h5>
                                          <div class="col text-center"></div>
                                          <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                    </div>
                                 </form>
                              @endforeach 
                              <br>          
                           </div>

                            <div class="displayusers" style="display:none;">
                              <hr class="sidebar-divider my-0">
                                 <div class="row my-4">
                                    <h5 class="col text-center">Unidades</h5>
                                    <div class="col"></div>
                                    <h5 class="col text-center">Ações</h5>
                                 </div>
                                 <hr class="sidebar-divider my-0">
                                    <br>
                                 @foreach ($unidades as $un)
                                 <form action="{{ url("edit/$un->id")}}">
                                    @csrf
                                    <div class="row my-4">  
                                          <input name="stepdel" value="2" style="display:none;">  
                                          <h5 class="col text-center">{{$un->unidade}}</h5>
                                          <div class="col text-center"></div>
                                          <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                    </div>
                                 </form>
                              @endforeach 
                                <br>          
                            </div>

                            <div class="displayusers" style="display:none;">
                              <hr class="sidebar-divider my-0">
                                 <div class="row my-4">
                                    <h5 class="col text-center">UC's</h5>
                                    <div class="col"></div>
                                    <h5 class="col text-center">Ações</h5>
                                 </div>
                                 <hr class="sidebar-divider my-0">
                                    <br>
                                @foreach ($ucs as $uc)
                                 <form action="{{ url("edit/$uc->id")}}">
                                    @csrf
                                    <div class="row my-4">  
                                          <input name="stepdel" value="1" style="display:none;">  
                                          <h5 class="col text-center">{{$uc->name}}</h5>
                                          <div class="col text-center"></div>
                                          <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                    </div>
                                 </form>
                                @endforeach
                                <br>             
                            </div>

                            <div class="displayusers" style="display:none;">
                              <hr class="sidebar-divider my-0">
                                 <div class="row my-4">
                                    <h5 class="col text-center">UC's</h5>
                                    <h5 class="col text-center">Data</h5>
                                    <h5 class="col text-center">Ações</h5>
                                 </div>
                                 <hr class="sidebar-divider my-0">
                                    <br>
                              
                              @foreach ($ucs as $uc)
                              @foreach ($faturas as $ft)
                               <form action="{{ url("edit/$ft->id")}}">
                                  @csrf
                                  <div class="row my-4">  
                                        <input name="stepdel" value="4" style="display:none;">  
                                       <h5 class="col text-center">
                                       @if($uc->id == $ft->uc_id )
                                          {{$uc->name}}
                                       @endif
                                       </h5>                                       
                                        <h5 class="col text-center">{{$ft->date}}</h5>                                       
                                        <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                  </div>
                               </form>
                              @endforeach
                              @endforeach
                              <br>             
                          </div>

                            
                                

                </div>
             <div class="col-lg-1"></div>
          </div>
       </div>
    </div>
 </div>

 <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
            </form>
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
    busers[3].addEventListener("click",function(){
       for(var j=0;j<dusers.length;j++){
       dusers[j].style.display="none"; 
       }
       dusers[3].style.display = "";
    });  
    busers[4].addEventListener("click",function(){
       for(var j=0;j<dusers.length;j++){
       dusers[j].style.display="none"; 
       }
       dusers[4].style.display = "";
    }); 
 </script> 
@endsection