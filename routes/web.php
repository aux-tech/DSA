<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin/relatorio')->middleware('auth');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/usuarios', function () {
    return view('admin.users');
})->middleware('auth');

Route::get('/info', function () {
    return view('client.infoprojeto');
})->middleware('auth');

Route::get('/gestao', function () {
    return view('client.gestao');
})->middleware('auth');

Route::get('/geracao', function () {
    return view('client.geracao');
})->middleware('auth');

Route::get('/consumo', function () {
    return view('client.consumo');
})->middleware('auth');

Route::get('/economia', function () {
    return view('client.economia');
})->middleware('auth');

Route::get('/educacional', function () {
    return view('client.educacional');
})->middleware('auth');

Route::resource('fatura', 'ControladorFatura')->middleware('auth');
Route::resource('relatorio', 'ControladorRelatorio')->middleware('auth');
Route::resource('client', 'ControladorCliente')->middleware('auth');
Route::get('/client/data','ControladorCliente@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
