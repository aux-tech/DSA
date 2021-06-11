<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\redes;
use App\unidades;
use App\ucs;
use App\faturas;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type == 0)   
            return view('client.index');
        else if(Auth::user()->type == 1 or Auth::user()->type == 2)
            return view('admin.index');
        else
            return view('index');    
    }
}
