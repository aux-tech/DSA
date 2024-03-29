<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;
use App\User;

class ControladorUpdate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $redes = redes::all();
        $unidades = unidades::all();
        $faturas = faturas::all();
        $ucs = ucs::all();

        return view('admin.update',compact(['ucs','unidades','redes','faturas','users']));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $redes = redes::all();
            $unidade = unidades::all();
            $ucs = ucs::all();
            $faturas = faturas::all();
            $users = User::all();

            if($request->input('type') == 0){
                foreach($redes as $rd){
                    if($rd->id == $id){
                        $rd->rede = $request->input('name');
                        $rd->concessionaria = $request->input('concessionaria');
                        $rd->cnpj = $request->input('cnpj');
                        $rd->save();
                    }
                }        
            }
            elseif($request->input('type') == 1){
                foreach($unidade as $un){
                    if($un->id == $id){
                        $un->unidade = $request->input('name');
                        $un->cnpj = $request->input('cnpj');
                        $un->alunos = $request->input('alunos');
                        $un->endereco = $request->input('endereco');
                        $un->contato = $request->input('contato');
                        $un->numero = $request->input('numero');
                        $un->email = $request->input('email');
                        $un->save();
                    }
                }        
            }
            elseif($request->input('type') == 2){
                foreach($ucs as $uc){
                    if($uc->id == $id){
                        $uc->name = $request->input('name');
                        $uc->tarifa = $request->input('tarifa');
                        $uc->jan = $request->input('jan');
                        $uc->fev = $request->input('fev');
                        $uc->mar = $request->input('mar');
                        $uc->abr = $request->input('abr');
                        $uc->mai = $request->input('mai');
                        $uc->jun = $request->input('jun');
                        $uc->jul = $request->input('jul');
                        $uc->ago = $request->input('ago');
                        $uc->set = $request->input('set');
                        $uc->out = $request->input('out');
                        $uc->nov = $request->input('nov');
                        $uc->dez = $request->input('dez');
                        $uc->save();
                    }
                }        
            }
            elseif($request->input('type') == 3){
                foreach($faturas as $ft){
                    if($ft->id == $id){
                        $ft->date = ($request->input('date')).'-01';
                        $ft->consumo_ponta = $request->input('cp');
                        $ft->consumo_fora_ponta = $request->input('cfp');
                        $ft->consumo_total = $request->input('ct');
                        $ft->demanda_medida = $request->input('dm');
                        $ft->demanda_contratada = $request->input('dc');
                        $ft->custo = $request->input('custo');
                        $ft->geracao_mensal = $request->input('gm');
                        $ft->injetada_fp = $request->input('if');
                        $ft->injetada_p = $request->input('ip');
                        $ft->saldo_mensal = $request->input('sm');
                        $ft->saldo_acumulado = $request->input('sa');
                        $ft->save();
                    }
                }        
            }
            elseif($request->input('type') == 4){
                foreach($users as $us){
                    if($us->id == $id){
                        $us->name = $request->input('name');
                        $us->email=$request->input('email');
                        $us->save();
                    }
                }
            }

            return redirect('/update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
            $users = User::all();
            $redes = redes::all();
            $unidade = unidades::all();
            $ucs = ucs::all();
            $faturas = faturas::all();
        if($request->input('stepdel') == 1){
            foreach($ucs as $uc){
                if($uc->id == $id){
                    $uc->delete();
                }
            }
            
            foreach($faturas as $ft){
                if($ft->uc_id == $id){
                    $ft->delete();
                }
            }
        }
        else if($request->input('stepdel') == 2){
            foreach($unidade as $un){
                if($un->id == $id){
                    $un->delete();
                }
            }
            foreach($ucs as $uc){
                if($uc->unidade_id == $id){
                    foreach($faturas as $ft){
                        if($ft->uc_id == $uc->id){
                            $ft->delete();
                        }
                    }
                    $uc->delete();
                }
            }   
            
        }
        else if($request->input('stepdel') == 3){
            foreach($redes as $rd){
                if($rd->id == $id){
                    $rd->delete();
                }
            }
            foreach($unidade as $un){
                if($un->rede_id == $id){
                    foreach($ucs as $uc){
                        if($uc->unidade_id == $un->id){
                            foreach($faturas as $ft){
                                if($ft->uc_id == $uc->id){
                                    $ft->delete();
                                }
                            }
                            $uc->delete();
                        }
                    }
                    $un->delete();
                }
            }
            
            
        }
        else if($request->input('stepdel') == 4){
            foreach($faturas as $ft){
                if($ft->id == $id){
                    $ft->delete();
                }
            }
        }

        else if($request->input('stepdel') == 5){
            foreach($users as $us){
                if($us->id == $id){
                    $us->delete();
                }
            }
        }

        return redirect('/update');
    }
}
