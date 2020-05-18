@extends('layouts.site.app-site')
@section('titulo','Todas as noticias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
       
  <section  style="margin:200px 0px;" id="todasnoticias">
    <div class="container">
      <div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Todas as Notícias </h2>
        <div class="divisao-6"></div>
       </div>

      <div class="row area-noticia">
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
            <img width="100%" src="{{asset('site/img/noticias/3.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">15 de Maio de 2020</h6>
              <h2 class="section-intro__title titulo-item-noticia">Sorocaba recebe 100 mil EPIs para unidades de saúde</h2>
              <p class="section-intro__subtitle desc-noticia">
              O quadro Solidariedade S/A, do telejornal Tem Notícias 2ª Edição, 
              veiculado em toda a região de Sorocaba, mostrou a entrega de 100 mil 
              EPIs para unidades....
            </p>
            <a href="{{route('combater-coronavirus')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
              <img width="100%" src="{{asset('site/img/noticias/2.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">14 de Maio de 2020</h6>
              <h2 class="section-intro__title titulo-item-noticia">Os aspectos clínicos e laboratoriais do Covid-19</h2>
              <p class="section-intro__subtitle desc-noticia">
              Na última quinta-feira (14) aconteceu a nona palestra da iniciativa Webinar Saúde. 
              Conduzido pelo diretor Clínico do Grupo Fleury e médico infectologista ...
              </p>
              <a href="{{route('aspecto-clinico')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
            <img width="100%" src="{{asset('site/img/noticias/4.jpg')}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia">12 de Maio de 2020</h6>
              <h2 class="section-intro__title titulo-item-noticia">A tecnologia como uma aliada  à saúde</h2>
              <p class="section-intro__subtitle desc-noticia">
              Na terça-feira (12) aconteceu a oitava palestra da iniciativa Webinar Saúde. 
              Conduzida pela diretora executiva de Tecnologia e Operações da BP....  
            </p>
            <a href="{{route('tecnologia-aliada')}}" class="btn btn-leia-mais">LEIA MAIS</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
   @include('site.contato')
</main>  
  @endsection