<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function mostrar(){
        return view('mostrar');
    }

    public function adicionar(){
        return view('adicionar');
    }

    public function atualizar(){
        return view('atualizar');
    }

    public function detalhes(){
        return view('detalhes');
    }

    public function myfood(){
        return view('myfood');
    }

    public function login(){
        return view('login');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function restaurantes(){
        return view('restaurantes');
    }

    
}

