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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'CadastrosController@index');
Route::get('/show/{id}', 'CadastrosController@show');
Route::get('/cadastrar', 'CadastrosController@create');
Route::get('/cadastrar/{id}/editar', 'CadastrosController@edit');
Route::put('{id}', 'CadastrosController@update');
Route::delete('/cadastrar/{id}', 'CadastrosController@destroy');
Route::post('/', 'CadastrosController@store');
//Route::get('/vizualizar', [CadastrosController::class, 'vizualizar']);
//Route::get('/visualiza/{id}', 'CadastrosController@index');
