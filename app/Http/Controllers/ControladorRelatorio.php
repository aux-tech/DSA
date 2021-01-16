<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;

class ControladorRelatorio extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $rede = redes::all();
        $unidade = unidades::all();
        $ucs = ucs::all();
        $fatura = faturas::all();
        return view('admin/gerador_relatorio', compact('rede','unidade','ucs','fatura'));
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
        $faturas = faturas::all();
        $unidade = unidades::all();
        $ucs = ucs::all();
        $rede = redes::all();
        $id = $request->input('uc_id');
        $data =$request->input('date');
        $fatura = $faturas->where('uc_id',$id)->sortByDesc('id');
        //echo "<pre>",var_dump($fatura-['geracao_mensal']),"</pre>" ;
        return view('admin/relatorio', compact('rede','unidade','ucs','fatura','id','data'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
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
