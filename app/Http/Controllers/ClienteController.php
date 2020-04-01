<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function telaCadastro(){
		return view("tela_cadastro_clientes");
    }
    
    function novo(Request $req){
        $Nome = $req->input('nome');
        $Cep = $req->input('cep');
        $Estado = $req->input('estado');
        $Cidade = $req->input('cidade');

        $Novo = new Cliente();
        $Novo->nome = $Nome;
        $Novo->cep = $Cep;
        $Novo->estado = $Estado;
        $Novo->cidade = $Cidade;
        $Novo->Save();

        if($Novo->save()){
            $mensagem = "Cliente cadastrado com sucesso!!";
        }else{
            $mensagem = "Cliente nao cadastrado tente novamente mais tarde";
        }

        return view("resultado",["alerta" => $mensagem]);

    }
}
