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
Route::get('/lista_noticias', ['uses' => 'NoticiaController@listaNoticias', 'as' => 'lista-noticias']);

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
Route::get('/municipios-selecionados', ['uses' => 'ConteudoController@municipios', 'as' => 'municipios-selecionados']);
Route::get('/ajax/estados.html', ['uses' => 'ConteudoController@estados', 'as' => 'estados']);
Route::get('/ajax/regioes.html', ['uses' => 'ConteudoController@regioes', 'as' => 'regioes']);









Route::get('/materiais-download', ['uses' => 'MaterialController@index', 'as' => 'materiais-download']);
Route::get('/materiais-download/ferramentas', ['uses' => 'MaterialController@ferramentas', 'as' => 'ferramentas']);
Route::post('play/cache/get-cache.php', ['uses' => 'ConteudoController@cache', 'as' => 'get-cache']);
Route::post('play/cache/get-cache2.php', ['uses' => 'ConteudoController@cache2', 'as' => 'get-cache2']);
Route::post('play/cache/get-cache3.php', ['uses' => 'ConteudoController@cache3', 'as' => 'get-cache2']);
Route::get('/conteudo', ['uses' => 'ConteudoController@index', 'as' => 'conteudo']);
Route::post('/contato', ['uses' => 'ContatoController@index', 'as' => 'contato']);
Route::get('/agenda', ['uses' => 'CalendarioController@index', 'as' => 'agenda']);

// noticias
Route::get('/posts/tecnologia-aliada', ['uses' => 'NoticiaController@post', 'as' => 'tecnologia-aliada']);
Route::get('/posts/aspectos-clinicos', ['uses' => 'NoticiaController@post2', 'as' => 'aspecto-clinico']);
Route::get('/posts/combater-coronavirus', ['uses' => 'NoticiaController@post3', 'as' => 'combater-coronavirus']);
Route::get('/posts/indicadores-logistica', ['uses' => 'NoticiaController@post4', 'as' => 'indicadores-logistica']);
Route::get('/posts/espacos-fisicos', ['uses' => 'NoticiaController@post5', 'as' => 'espacos-fisicos']);
Route::get('/posts/cidades-vuneraveis', ['uses' => 'NoticiaController@post6', 'as' => 'cidades-vuneraveis']);
Route::get('/posts/parceria', ['uses' => 'NoticiaController@post7', 'as' => 'parceria']);
Route::get('/posts/qualidade-seguranca', ['uses' => 'NoticiaController@post8', 'as' => 'qualidade-seguranca']);
Route::get('/posts/sistema-telemedicina', ['uses' => 'NoticiaController@post9', 'as' => 'sistema-telemedicina']);
Route::get('/posts/municipios-vuneraveis', ['uses' => 'NoticiaController@post10', 'as' => 'municipios-vuneraveis']);
Route::get('/posts/profissionais-saude', ['uses' => 'NoticiaController@post11', 'as' => 'profissionais-saude']);
Route::get('/posts/kits-profissionais', ['uses' => 'NoticiaController@post12', 'as' => 'kits-profissionais']);
Route::get('/posts/equipamentos', ['uses' => 'NoticiaController@post13', 'as' => 'equipamentos-protecao']);
Route::get('/posts/cidades-apoio-bndes', ['uses' => 'NoticiaController@post14', 'as' => 'cidades-apoio-bndes']);
Route::get('/posts/manejo-clinico-ventilatorio', ['uses' => 'NoticiaController@post15', 'as' => 'manejo-clínico-ventilatório']);
Route::get('/posts/pacientes-araraquara', ['uses' => 'NoticiaController@post16', 'as' => 'pacientes-araraquara']);
Route::get('/posts/epis-hospitais', ['uses' => 'NoticiaController@post17', 'as' => 'epis-hospitais']);
Route::get('/posts/conhecimento-covid-19', ['uses' => 'NoticiaController@post18', 'as' => 'conhecimento-covid-19']);

Auth::routes();