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

Route::get('/admin/relatorio', function () {
    return view('admin/relatorio');
})->middleware('auth');

Route::get('/admin/relatorio', function () {
    return view('admin/relatorio');
})->middleware('auth');

Route::get('/update','ControladorUpdate@index')->middleware('auth');

Route::get('/update/{id}','ControladorUpdate@update')->middleware('auth');

Route::get('/delete/{id}','ControladorUpdate@destroy')->middleware(('auth'));

Route::get('/usuarios', 'ControladorCliente@store')->middleware('auth');

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
Route::resource('deletar','ControladorUpdate')->middleware('auth');
Route::resource('edit','ControladorEdit')->middleware('auth');
Route::resource('home', 'HomeController')->middleware('auth');

Auth::routes();
