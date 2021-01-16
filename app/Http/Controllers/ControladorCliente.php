<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;
use App\User;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 0)   
            return view('client.index');
        else if (Auth::user()->type == 1)  
            return view('admin.index');
        else
            return view('provider.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $redes = redes::all();
        $unidades = unidades::all();
        $ucs = ucs::all();
        $faturas = faturas::all();

        $data = DB::table('users')
        ->join('redes','users.id', '=', 'redes.user_id')
        ->join('unidades','redes.id', '=', 'unidades.rede_id') 
        ->join('ucs','unidades.id', '=', 'ucs.unidade_id') 
        ->join('faturas','ucs.id', '=', 'faturas.uc_id')
        ->select('faturas.*')->where('users.id','=',Auth::user()->id)->get();
        

        return $data->toJson();
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
