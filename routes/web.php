<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
});

/*Routes Admin Master*/

Route::get('/masteradmin', function () {
    return view('masteradmin.index');
})->middleware('auth');

/*Routes Admin*/

Route::get('/admin/relatorio', function () {
    return view('admin/relatorio');
})->middleware('auth');

Route::get('/admin', function () {
    return view('admin.index'); 
})->middleware('auth');

Route::get('/usuarios', function () {
    return view('admin.users');
})->middleware('auth');

/* Routes Clients*/

Route::get('/info', function () {
    return view('client.infoprojeto');
})->middleware('auth')->name('info');

Route::get('/gestao', function () {
    return view('client.gestao');
})->middleware('auth')->name('gestao');

Route::get('/geracao', function () {
    return view('client.geracao');
})->middleware('auth')->name('geracao');

Route::get('/consumo', function () {
    return view('client.consumo');
})->middleware('auth')->name('consumo');

Route::get('/economia', function () {
    return view('client.economia');
})->middleware('auth')->name('economia');

Route::get('/educacional', function () {
    return view('client.educacional');
})->middleware('auth')->name('educacional');

Route::resource('fatura', 'ControladorFatura')->middleware('auth');
Route::resource('relatorio', 'ControladorRelatorio')->middleware('auth');
Route::resource('client', 'ControladorCliente')->middleware('auth');
Route::get('/client/data','ControladorCliente@show')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();