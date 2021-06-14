@extends('admin.layout')
@section('contentadmin')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Gerenciador</h1>
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
                                    
                                       <div class="row my-4">  
                                              
                                             <h5 class="col text-center">{{$us->name}}</h5>
                                             <h5 class="col text-center">{{$us->email}}</h5>

                                          <form class="col" action="{{ url("delete/$us->id")}}">
                                             <input name="stepdel" value="5" style="display:none;"> 
                                             @method('DELETE')
                                             @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Deletar</button>
                                          </form>  
                                       </div>
                                   
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
                                 
                                    <div class="row my-4">  
                                           
                                          <h5 class="col text-center">{{$rd->rede}}</h5>
                                          <div class="col text-center"></div>
                                      
                                          <div class="col row">
                                          <form class="col" action="{{ url("update/$rd->id")}}">
                                             <input name="stepdel" value="3" style="display:none;"> 
                                                @method('PUT')
                                                @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                          </form>
   
                                          <form class="col" action="{{ url("delete/$rd->id")}}">
                                             <input name="stepdel" value="3" style="display:none;"> 
                                                @method('DELETE')
                                                @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Deletar</button>
                                          </form>
                                       </div>
                                       
                                       

                                    </div>
                                 
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
                                 
                                    <div class="row my-4">  
                                           
                                          <h5 class="col text-center">{{$un->unidade}}</h5>
                                          <div class="col text-center"></div>
                                      
                                          <div class="col row">
                                          <form class="col" action="{{ url("update/$rd->id")}}">
                                             <input name="stepdel" value="2" style="display:none;"> 
                                                @method('PUT')
                                                @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                          </form>

                                          <form class="col" action="{{ url("delete/$un->id")}}">
                                             <input name="stepdel" value="2" style="display:none;"> 
                                             @method('DELETE')
                                             @csrf
                                          <button type="submit" class="col btn btn-sm btn-light" >Deletar</button>
                                       </form>
                                       </div>
                                          
                                    </div>
                                 
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
                                    <div class="row my-4">  
                                          
                                          <h5 class="col text-center">{{$uc->name}}</h5>
                                          <div class="col text-center"></div>
                                       <div class="col row">
                                          <form class="col" action="{{ url("update/$rd->id")}}">
                                             <input name="stepdel" value="1" style="display:none;"> 
                                                @method('PUT')
                                                @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                          </form>

                                          <form class="col" action="{{ url("delete/$uc->id")}}">
                                             <input name="stepdel" value="1" style="display:none;">  
                                             @method('DELETE')
                                             @csrf
                                          <button type="submit" class="col btn btn-sm btn-light" >Deletar</button>
                                       </form>
                                       </div>
                                          
                                    </div>
                                 
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
                               
                                  <div class="row my-4">  
                                          
                                       <h5 class="col text-center">
                                       @if($uc->id == $ft->uc_id )
                                          {{$uc->name}}
                                       @endif
                                       </h5>                                       
                                        <h5 class="col text-center">{{$ft->date}}</h5>    
                                        <div class="col row">
                                          <form class="col" action="{{ url("update/$rd->id")}}">
                                             <input name="stepdel" value="4" style="display:none;"> 
                                                @method('PUT')
                                                @csrf
                                             <button type="submit" class="col btn btn-sm btn-light" >Editar</button>
                                          </form>
                                          <button class="fas fa-user-circle my-2 my-sm-0 fa-2x" type="button" data-toggle="modal" data-target="#modal-edit" style="color: #929292;"></button>
   
                                           <form class="col" action="{{ url("delete/$ft->id")}}">
                                             <input name="stepdel" value="4" style="display:none;">
                                             @method('DELETE')
                                              @csrf
                                           <button type="submit" class="col btn btn-sm btn-light" >Deletar</button>
                                          </form>
                                        </div>
                                        
                                  </div>
                               
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