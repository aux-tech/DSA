@extends('admin.layout')
@section('contentadmin')
     <!-- Begin Page Content -->
     <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Relatório</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>

      
     <!-- Content Row -->

     <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Selecione a data desejada</h6>
            
          </div>
          <!-- Card Body -->
          <div class="card-body">             

            <div class="row my-4" id="cadastra-instituicao">
            
              <div class="col-lg-1"></div>    
              <div class="col-lg-10">        
            <form action="{{route('relatorio.store')}}"  method="POST">
                            @csrf
                            <div class="row my-4">
                            <select class="form-control justify-content-center" name="uc_id">
                              @if (isset($rede))
                                  
                              @foreach ($rede as $r)
                                @foreach ($unidade as $u)
                                  @foreach ($ucs as $uc)
                                    @if ($r->id == $u->rede_id && $u->id == $uc->unidade_id) 
                                      <option value="{{$uc->id}}">{{$r->rede}} - {{$u->unidade}} - {{$uc->name}}</option>
                                    @endif
                                  @endforeach                                  
                                @endforeach                            
                              @endforeach
                              
                              @endif
                            </select>
                            </div>

                            <div class="row my-4">
                              <input class="form-control justify-content-center" type="month" placeholder="Instituição" name="date_i">
                            </div>

                            <div class="row my-4">
                              <input class="form-control justify-content-center" type="month" placeholder="Instituição" name="date_f">
                            </div>

                            <br>
                            <button class="btn btn-light">Gerar Relatório</button>
                        </form>
              </div>  
              <div class="col-lg-1"></div> 
                    </div>

          </div>
          </div>
        </div>

      
    </div>
@endsection
       

           

          
