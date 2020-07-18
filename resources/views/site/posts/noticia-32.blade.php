@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Projeto "Municípios contra o Coronavírus" do Instituto Votorantim contempla mais 43 cidades
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Primeira fase da iniciativa que visa auxiliar os profissionais ligados a prefeitura das cidades selecionadas a combater a pandemia já vinha apoiando outros 87 municípios  </i> 
        </h4>
         <p class="text-white"> 14 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/31.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>O Instituto Votorantim e o Banco Nacional de Desenvolvimento Econômico e Social (BNDES) anunciam a seleção de mais 43 municípios que participarão do projeto “Municípios contra o Conoravírus”. A ação visa levar até essas localidades uma assessoria técnica especializada para que as prefeituras e suas equipes possam trabalhar de forma coordenada para o melhor enfrentamento da pandemia, bem como o gerenciamento dos efeitos causados pela Covid-19.</p>
         <p>Confira mais detalhes acessando: <a href="https://brasil61.com/noticias/instituto-votorantim-presta-assessoria-tecnica-a-municipios-para-o-combate-a-pandemia-bras200827" style="word-wrap: break-word;" target="_blank">https://brasil61.com/noticias/instituto-votorantim-presta-assessoria-tecnica-a-municipios-para-o-combate-a-pandemia-bras200827<a></p>
        </div>
      <div style="height:30px;"></div>
      <h2 class="section-intro__title titulo-lista-noticias">Mais Notícias: </h2>
    <div class="divisao-6"></div>
      <div style="height:30px;"></div>
      <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                        @foreach($noticias as $noticia)
                           <!-- column -->
                           <div class="col-lg-4 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                <img width="100%" src="{{asset('site/img/noticias/'.$noticia->miniatura)}}" alt="">
                                    <div class="card-body">
                                    <h6 class="card-title data-da-noticia"><i class="fa fa-clock"></i> {{ date('d/m/Y', strtotime($noticia->created_at)) }}</h6>
                                        <h4 class="card-title titulo-item-noticia"> <strong>{{$noticia->titulo}}</strong> </h4>
                                        <p class="card-text desc-noticia">
                                            {{$noticia->descricao}}
                                        </p>
                                        <a href="{{$noticia->destino}}" class="btn btn-leia-mais"> > Leia Mais </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            @endforeach
                        </div>
                        <!-- Row -->
                    </div>
                </div>
  </section>
  @include('site.contato')
</main>  
  @endsection