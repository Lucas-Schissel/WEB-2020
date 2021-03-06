<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/cadastro', 'ClienteController@telaCadastro');
Route::post('/usuario/novo', 'ClienteController@novo')->name('cliente_novo');
Route::get('/usuario/lista', 'ClienteController@nomesCliente');