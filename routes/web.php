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
    return view('site.index');
});

Route::get('/home', ['uses' => 'homeController@index', 'as' => 'site']);
Route::get('/gestao', ['uses' => 'ConteudoController@gestao', 'as' => 'adm']);
Route::get('/banner', ['uses' => 'ConteudoController@banner', 'as' => 'banner']);
Route::get('/noticia', ['uses' => 'NoticiaController@index', 'as' => 'noticia']);
Route::get('/webinar', ['uses' => 'ConteudoController@webinar', 'as' => 'webinar']);
Route::get('/conteudo', ['uses' => 'ConteudoController@index', 'as' => 'conteudo']);
Auth::routes();