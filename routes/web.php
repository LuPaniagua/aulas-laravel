<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós';
}); 

Route::get('/index',function(){
    return view('index');
});