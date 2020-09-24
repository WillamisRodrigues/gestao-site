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
Route::get('/materiais-download/ferramentas/{id?}', ['uses' => 'MaterialController@ferramentas', 'as' => 'ferramentas']);
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
Route::get('/posts/necessidade-isolamento', ['uses' => 'NoticiaController@post19', 'as' => 'necessidade-isolamento']);
Route::get('/posts/farol-covid', ['uses' => 'NoticiaController@post20', 'as' => 'farol-covid']);
Route::get('/posts/plataforma-telemedicina', ['uses' => 'NoticiaController@post21', 'as' => 'plataforma-telemedicina']);
Route::get('/posts/participar-programa', ['uses' => 'NoticiaController@post22', 'as' => 'participar-programa']);
Route::get('/posts/respiradores-reparados-bahia', ['uses' => 'NoticiaController@post23', 'as' => 'respiradores-reparados-bahia']);
Route::get('/posts/atendimeno-muriae', ['uses' => 'NoticiaController@post24', 'as' => 'atendimento-muriae']);
Route::get('/posts/ceara-contemplados', ['uses' => 'NoticiaController@post25', 'as' => 'ceara-contemplados']);
Route::get('/posts/campanha-doacoes', ['uses' => 'NoticiaController@post26', 'as' => 'campanha-doacoes']);
Route::get('/posts/pintadas-bahia', ['uses' => 'NoticiaController@post27', 'as' => 'pintadas-bahia']);
Route::get('/posts/recursos-hospitalares', ['uses' => 'NoticiaController@post28', 'as' => 'recursos-hospitalares']);
Route::get('/posts/busca-tratamentos', ['uses' => 'NoticiaController@post29', 'as' => 'busca-tratamentos']);
Route::get('/posts/testes-rapidos', ['uses' => 'NoticiaController@post30', 'as' => 'testes-rapidos']);

Route::get('/posts/cidade-vuneravel-saopaulo', ['uses' => 'NoticiaController@post31', 'as' => 'cidade-vuneravel-saopaulo']);
Route::get('/posts/contempla-43-cidades', ['uses' => 'NoticiaController@post32', 'as' => 'contempla-43-cidades']);
Route::get('/posts/estudo-droga-tocilizumabe', ['uses' => 'NoticiaController@post33', 'as' => 'estudo-droga-tocilizumabe']);
Route::get('/posts/programa-inteligencia-artificial', ['uses' => 'NoticiaController@post34', 'as' => 'programa-inteligencia-artificial']);
Route::get('/posts/papel-lideranca', ['uses' => 'NoticiaController@post35', 'as' => 'papel-lideranca']);
Route::get('/posts/ebook-recursos', ['uses' => 'NoticiaController@post36', 'as' => 'ebook-recursos']);
Route::get('/posts/retomada-economica', ['uses' => 'NoticiaController@post37', 'as' => 'retomada-economica']);
Route::get('/posts/ebook-auxiliar', ['uses' => 'NoticiaController@post38', 'as' => 'ebook-auxiliar']);
Route::get('/teste', ['uses' => 'HomeController@teste', 'as' => 'teste']);

Auth::routes();