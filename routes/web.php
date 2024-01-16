<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',function(){
    return "Teste 1 2 3...";
});

Route::get('/home',function(){
    return view('home',['xuxu'=> 'xuxao'],['idade'=>'17']);
});

Route::get('/mostrar',[FuncionariosController::class,'mostrar']);

Route::get('/add',[FuncionariosController::class,'adicionar']);

Route::get('/add/atualizar',[FuncionariosController::class,'atualizar']);

Route::get('/detalhes',[FuncionariosController::class,'detalhes']);

Route::get('/myfood',[FuncionariosController::class,'myfood']);

Route::get('/login',[FuncionariosController::class,'login']);

Route::get('/cadastro',[FuncionariosController::class,'cadastro']);

Route::get('/restaurantes',[FuncionariosController::class,'restaurantes']);





