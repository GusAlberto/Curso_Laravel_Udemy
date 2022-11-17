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
    return view('welcome');
});

//Implementando a rota Contato pegando acesso pelo Id, sem mostrar no caminho
Route::get('/contato/[id?]', function($id = null) {
    return "Contato id = $id";
});

Route::post('/contato', function() {
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function() {
    return "Contato PUT";
});
