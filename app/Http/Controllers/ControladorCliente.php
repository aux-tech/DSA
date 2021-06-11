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

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $rede = redes::all();
        
        if( $request->input('stepcadastro') == 1)
        {
            $user = new User();            
            $user->email = $request->input('email');
            $user->name = $request->input('user');
            $user->type = 0;
            $user->password =Hash::make( $request->input('password'));
            $user->rede = $request->input('rede_id');
            $user->save();

        }
        if( $request->input('stepcadastro') == 2)
        {
            $user = new User();            
            $user->email = $request->input('email');
            $user->name = $request->input('user');
            $user->type = 1;
            $user->password =Hash::make( $request->input('password'));
            $user->save();

        }
        if( $request->input('stepcadastro') == 3)
        {
            if(Auth::user()->type == 2){
                $user = new User();            
                $user->email = $request->input('email');
                $user->name = $request->input('user');
                $user->type = 2;
                $user->password =Hash::make( $request->input('password'));
                $user->save();
            }
        }

        return view('admin.users',compact(['rede']) );
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
          
    }
}
