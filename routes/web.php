<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/jogos', 'jogos');

//Route::view('/jogos', 'jogos', ['name' =>'GTA']);

//Receber Apenas Texto
//Route::get('/jogos/{name?}', function($name = null){
//    return view('jogos', ['nomeJogo' => $name]);
//})->where('name', '[A-Za-z]+');

Route::get('/jogos/{idJogo?}/{name?}', function($idJogo = null, $name = null){
    return view('jogos', ['idJogo' => $idJogo, 'nomeJogo' => $name]);
})->where(['idJogo' => '[0-9]+', 'name' => '[a-z]+']);