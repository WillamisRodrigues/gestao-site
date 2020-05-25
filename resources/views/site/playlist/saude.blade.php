@extends('layouts.site.app-play')
@section('titulo','Home Votorantim')
@section('conteudo')
  @include('layouts.site.header-noticias')

	<div class="main">
		<section class="mt-200">
			<div class="container">
			<div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Webinar:</h2>
        <div class="divisao-6"></div>
		<p class="desc-sobrewebinars">
		O Instituto Votorantim, em parceria com a BP - 
		A Beneficência Portuguesa de São Paulo, realiza semanalmente webinars 
		técnicos e de gestão área de saúde ,sobre temas relacionados a gestão 
		do sistema de atendimento a população, cuidados aos profissionais, protocolos 
		em geral  e outros temas de relevância no combate ao COVID-19. 
		Confira o conteúdo das videoconferências já realizadas:
		</p>
	   </div>
	   <span> <strong> Categorias:</strong> </span>
	  @include('site.playlist.menu.principal')   
	</div>
	   </section>
		<section class="mt-200 play-mobile">
			<h1 class="titulo"></h1>
			<div id="saude"></div>
		</section>
	</div>
	@include('site.contato')
@endsection


