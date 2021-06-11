<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;
use App\User;
use Illuminate\Support\Facades\Hash;

class ControladorFatura extends Controller
{

    
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rede = redes::all();
        $unidade = unidades::all();
        $ucs = ucs::all();
        $fatura = faturas::all();
        return view('admin.fatura', compact('rede','unidade','ucs','fatura'));
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

        if( $request->input('step') == 1){
            $rede = new redes();       
            $rede->rede = $request->input('rede');
            $rede->concessionaria = $request->input('concessionaria');
            $rede->cnpj = $request->input('cnpj');
            $rede->save();
        } 
        if( $request->input('step') == 2)
        {
            $unidade = new unidades();
            $unidade->unidade = $request->input('unidade');
            $unidade->cnpj = $request->input('cnpj');
            $unidade->alunos = $request->input('alunos');
            $unidade->endereco = $request->input('endereco');
            $unidade->contato = $request->input('contato');
            $unidade->numero = $request->input('numero');
            $unidade->email = $request->input('email');
            $unidade->rede_id = $request->input('rede_id');
            $unidade->save();
        }
        if( $request->input('step') == 3)
        {
            $ucs = new ucs();
            $ucs->name = $request->input('name');
            $ucs->tarifa = $request->input('tarifa');
            $ucs->jan = str_replace(',','.',str_replace('.','', $request->input('jan')));
            $ucs->fev = str_replace(',','.',str_replace('.','', $request->input('fev')));
            $ucs->mar = str_replace(',','.',str_replace('.','', $request->input('mar')));
            $ucs->abr = str_replace(',','.',str_replace('.','', $request->input('abr')));
            $ucs->mai = str_replace(',','.',str_replace('.','', $request->input('mai')));
            $ucs->jun = str_replace(',','.',str_replace('.','', $request->input('jun')));
            $ucs->jul = str_replace(',','.',str_replace('.','', $request->input('jul')));
            $ucs->ago = str_replace(',','.',str_replace('.','', $request->input('ago')));
            $ucs->set = str_replace(',','.',str_replace('.','', $request->input('set')));
            $ucs->out = str_replace(',','.',str_replace('.','', $request->input('out')));
            $ucs->nov = str_replace(',','.',str_replace('.','', $request->input('nov')));
            $ucs->dez = str_replace(',','.',str_replace('.','', $request->input('dez')));
            $ucs->unidade_id = $request->input('unidade_id');
            $ucs->save();
        }
        if( $request->input('step') == 4)
        {
            $fatura = new faturas();
            $fatura->date = $request->input('date')."-01";
            $fatura->consumo_ponta = str_replace(',','.',str_replace('.','', $request->input('consumo_ponta')));
            $fatura->consumo_fora_ponta = str_replace(',','.',str_replace('.','', $request->input('consumo_fora_ponta')));
            $fatura->consumo_total = str_replace(',','.',str_replace('.','', $request->input('consumo_total')));
            $fatura->demanda_medida = str_replace(',','.',str_replace('.','', $request->input('demanda_medida')));            
            $fatura->demanda_contratada = str_replace(',','.',str_replace('.','', $request->input('demanda_contratada')));
            $fatura->custo = str_replace(',','.',str_replace('.','', $request->input('custo')));
            $fatura->geracao_mensal = str_replace(',','.',str_replace('.','', $request->input('geracao_mensal')));
            $fatura->injetada_fp = str_replace(',','.',str_replace('.','', $request->input('injetada_fp')));
            $fatura->injetada_p = str_replace(',','.',str_replace('.','', $request->input('injetada_p')));
            $fatura->saldo_mensal = str_replace(',','.',str_replace('.','', $request->input('saldo_mensal')));
            $fatura->saldo_acumulado = str_replace(',','.',str_replace('.','', $request->input('saldo_acumulado')));
            $fatura->uc_id = $request->input('uc_id');
            $fatura->save();
        }

        return redirect('fatura');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
