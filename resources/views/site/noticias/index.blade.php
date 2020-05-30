@extends('layouts.site.app-site')
@section('titulo','Todas as noticias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  
  <main class="side-main"> 
       
  <section  style="margin:100px 0px;" id="todasnoticias">
    <div class="container">
      <div class="titulo-noticia">
      <h2 class="section-intro__title titulo-lista-noticias">Todas as Notícias </h2>
        <div class="divisao-6"></div>
       </div>

      <div class="row area-noticia">
      @foreach($noticias as $noticia)
        <div class="col-md-3 col-lg-4 mb-4 mb-lg-0 mt-2">
          <div class="card text-center card-pricing">
            <div class="card-pricing__header">
            <img width="100%" src="{{asset('site/img/noticias/'.$noticia->miniatura)}}" alt="">
            </div>
            <ul class="card-pricing__list">
            <h6 class="card-title data-da-noticia"> <i class="fa fa-clock"></i> {{ date('d/m/Y', strtotime($noticia->created_at)) }}</h6>
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
    </div>
  </section>
   @include('site.contato')
</main>  
  @endsection