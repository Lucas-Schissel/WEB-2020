<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/cadastro', 'ClienteController@telaCadastro');