<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós';
}); 

Route::get('/index',function(){
    return view('index');
});

// Rota de contato
Route::get('/contato', [ContatosController::class, 'index']) ->name('contatos.index');
// Rota Delete
Route::delete('/contatos/{contatoId}', [ContatosController::class, 'delete'])->name('contatos.delete');