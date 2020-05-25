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

Route::get('/', ['uses' => 'HomeController@site', 'as' => 'site']);
Route::get('/instituto-votorantim', ['uses' => 'HomeController@site', 'as' => 'site']);
Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/lista_banner', ['uses' => 'ConteudoController@listaBanners', 'as' => 'banner']);
Route::get('/editar_lead_aluno/{id}/edit', 'ConteudoController@edit_banner')->name('user-edit');
Route::get('/gestao', ['uses' => 'ConteudoController@gestao', 'as' => 'adm']);
Route::get('/banner', ['uses' => 'ConteudoController@banner', 'as' => 'banner']);
Route::get('/noticia', ['uses' => 'NoticiaController@index', 'as' => 'noticia']);
Route::get('/noticias', ['uses' => 'NoticiaController@lista', 'as' => 'todas-noticias']);
Route::get('/webinar', ['uses' => 'ConteudoController@webinar', 'as' => 'webinar']);
Route::get('/play/aspectos', ['uses' => 'ConteudoController@playlist', 'as' => 'play']);
Route::get('/metodologia-organizacao', ['uses' => 'ConteudoController@metodologia', 'as' => 'metodologia']);
Route::get('/play/gestao', ['uses' => 'ConteudoController@playlistgestao', 'as' => 'playgestao']);
Route::get('/play/saude', ['uses' => 'ConteudoController@playlistsaude', 'as' => 'playsaude']);
Route::get('/play/saude', ['uses' => 'ConteudoController@playlistsaude', 'as' => 'playsaude']);
Route::get('/municipios-selecionados', ['uses' => 'ConteudoController@municipios', 'as' => 'municipios-selecionados']);
Route::get('/ajax/estados.html', ['uses' => 'ConteudoController@estados', 'as' => 'estados']);









Route::get('/materiais-download', ['uses' => 'ConteudoController@todosmateriais', 'as' => 'materiais-download']);
Route::post('cache/get-cache.php', ['uses' => 'ConteudoController@cache', 'as' => 'get-cache']);
Route::post('cache/get-cache2.php', ['uses' => 'ConteudoController@cache2', 'as' => 'get-cache2']);
Route::post('cache/get-cache3.php', ['uses' => 'ConteudoController@cache3', 'as' => 'get-cache2']);
Route::get('/conteudo', ['uses' => 'ConteudoController@index', 'as' => 'conteudo']);
Route::post('/contato', ['uses' => 'ContatoController@index', 'as' => 'contato']);
Route::get('/agenda', ['uses' => 'CalendarioController@index', 'as' => 'agenda']);

// noticias
Route::get('/posts/tecnologia-aliada', ['uses' => 'NoticiaController@post', 'as' => 'tecnologia-aliada']);
Route::get('/posts/aspectos-clinicos', ['uses' => 'NoticiaController@post2', 'as' => 'aspecto-clinico']);
Route::get('/posts/combater-coronavirus', ['uses' => 'NoticiaController@post3', 'as' => 'combater-coronavirus']);
Route::get('/posts/indicadores-logistica', ['uses' => 'NoticiaController@post4', 'as' => 'indicadores-logistica']);

Auth::routes();