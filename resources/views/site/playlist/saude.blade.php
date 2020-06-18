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
		<section class="noticias mt-4" id="noticias">
    <div class="container">
      <div class="titulo-noticia">
        <h2 class="section-intro__title titulo-noticia">NOTÍCIAS</h2>
        <div class="divisao-2"></div>
        <a href="{{route('todas-noticias')}}" class="todas-noticias">VER TODAS AS NOTÍCIAS <img src="{{asset('site/img/icone-noticia.png')}}" alt=""> </a>
      </div>

      <div class="row area-noticia">
      @foreach($noticias as $noticia)
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/'.$noticia->miniatura)}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia"><i class="fa fa-clock"></i> {{ date('d/m/Y', strtotime($noticia->created_at)) }}</h6>
              <h2 class="section-intro__title titulo-item-noticia">{{$noticia->titulo}}</h2>
              <p class="section-intro__subtitle desc-noticia">
              {{$noticia->descricao}}
                 
            </p>
            <a href="{{$noticia->destino}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </section>
	</div>
	@include('site.rodape-webinar')
@endsection


