@extends('layouts.site.app-site')
@section('titulo','Todas as noticias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
       
  <section  style="margin:200px; 0px" id="todasnoticias">
    <div class="container">
      <div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Todas as Notícias </h2>
        <div class="divisao-6"></div>
       </div>

      <div class="row area-noticia">
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/1.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">13 November, 2019</h6>
              <h2 class="section-intro__title titulo-item-noticia">Guia de Planejamento
da Atuação Social
(ISE) 2019</h2>
              <p class="section-intro__subtitle desc-noticia">
              O grande desafio para uma empresa que chega
aos seus 100 anos, como a Votorantim S.A.,
é entender que sua responsabilidade perante às
grandes questões globais é proporcional ao
seu tamanho...  
            </p>
            <a href="{{route('post')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/2.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">13 November, 2019</h6>
              <h2 class="section-intro__title titulo-item-noticia">Animação, engajamento e
educação na Oficina de
Mobilização do PVE 2019!</h2>
              <p class="section-intro__subtitle desc-noticia">
              Não há como falar de educação sem engajar.
E foi pensando nisso que o Instituto
Votorantim preparou um evento cheio de
motivação para receber e reenergizar os...
              </p>
              <a href="{{route('post')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/3.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">13 November, 2019</h6>
              <h2 class="section-intro__title titulo-item-noticia">#MissãoPiauí
programas e projetos
sociais em ação!</h2>
              <p class="section-intro__subtitle desc-noticia">
              Em julho, representantes do Instituto
Votorantim (iV), da Votorantim Energia (VE)
e do Banco Nacional de Desenvolvimento
Econômico e Social (BNDES), bem
como acionistas...    
            </p>
            <a href="{{route('post')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
   @include('site.contato')
</main>  
  @endsection