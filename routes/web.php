<?php

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

Route::get('/users', function(){
   return 'Users';
});

Route::get('users/new', function(){
   return "crear usuario";
});

Route::get('/users/{id}', function($id){
    return "mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('/users/{id}/{nickname?}', function($id, $nickname = null){
   if($nickname){
       return " el usuario {$id} le dicen {$nickname}";
   }else{
       return "el usuario {$id}";
   }
});

