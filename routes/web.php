<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós';
});

Route::get('/login', function(){
    return 'Essa é a página de login';
});

Route::get('/salas', function(){
    return 'Essa é a página com salas com rodas de conversa';
});

Route::get('/perfil', function(){
    return 'Essa é a página que irá mostrar o seu perfil com seus laudos';
});

Route::get('/rodas', function(){
    return 'Essa é dentro das salas de rodas de conversa';
});

Route ::get('/contatos', function () {
     return 'Essa é a pagína sobre os contatos'; });

Route ::get('/contrato', function () { 
    return 'Essa é a pagína para contratar um profissional'; });