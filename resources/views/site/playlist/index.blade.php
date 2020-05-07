@extends('layouts.site.app-play')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header-noticias')

	<div class="main">
		<section class="mt-250 play-mobile">
			<h1 class="titulo"></h1>
			<div id="playlist-right"></div>
		</section>
	</div>
	@include('site.contato')
@endsection


