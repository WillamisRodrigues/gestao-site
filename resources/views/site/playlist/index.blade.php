@extends('layouts.site.app-play')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header-noticias')

	<div class="main">
		<section class="mt-200">
			<div class="container">
			<div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Aspectos Clínicos:</h2>
        <div class="divisao-6"></div>
       </div>
			</div>
		</section>
		<section class="mt-200 play-mobile">
			<h1 class="titulo"></h1>
			<div id="aspectos"></div>
		</section>
		<section class="mt-200">
			<div class="container">
			<div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Gestão da saúde e <br> liderança na  Pandemia:</h2>
        <div class="divisao-6"></div>
       </div>
			</div>
		</section>
		<section class="mt-200 play-mobile">
			<h1 class="titulo"></h1>
			<div id="gestao"></div>
		</section>
	</div>
	@include('site.contato')
@endsection


