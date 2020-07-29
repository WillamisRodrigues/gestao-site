@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim lança edital para doar programa de inteligência artificial para municípios
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Programa contemplará dez cidades brasileiras com mais de 350 mil habitantes </i> 
        </h4>
         <p class="text-white"> 22 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/32.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>O Instituto Votorantim lança mais uma iniciativa para ajudar o combate à pandemia no Brasil. Trata-se de um edital para inscrição no programa que dará treinamento e tecnologia de telemedicina com inteligência artificial para o enfrentamento da pandemia do novo coronavírus a dez cidades brasileiras. Os municípios selecionados receberão apoio técnico para implantar o programa Laura P.A. Digital para a realização de consultas e acompanhamento de casos confirmados de covid-19 a distância.</p>
         <p>O assunto foi destaque na Folha de São Paulo. Confira mais detalhes: <a href="https://www1.folha.uol.com.br/cotidiano/2020/07/cidades-receberao-telemedicina-com-inteligencia-artificial-contra-covid-19.shtml" style="word-wrap: break-word;" target="_blank">https://www1.folha.uol.com.br/cotidiano/2020/07/cidades-receberao-telemedicina-com-inteligencia-artificial-contra-covid-19.shtml<a></p>
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