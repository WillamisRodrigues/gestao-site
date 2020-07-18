@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim e BNDES selecionam mais prefeituras para participar do programa Municípios Contra o Novo Coronavírus
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 18 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/padrao.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Instituto Votorantim e o BNDES anunciam a seleção de 43 novos municípios, dentro da 2ª edição do edital Municípios Contra o Coronavírus, para receber assessoria técnica e especializada para as Prefeituras e para equipes das Secretarias Municipais de Saúde e de Gestão, no apoio para o enfrentamento e no gerenciamento dos efeitos da pandemia de ovid-19. Além dos 43 selecionados, outras 87 cidades já estão participando do programa totalizando 130 municípios apoiados.  </p>
       <p>O assunto foi destaque no portal Segs. 
Confira:  <a href="https://www.segs.com.br/demais/236676-instituto-votorantim-e-bndes-selecionam-43-municipios-para-receber-apoio-tecnico-em-gestao-no-enfrentamento-da-covid-19 " style="word-wrap: break-word;" target="_blank">https://www.segs.com.br/demais/236676-instituto-votorantim-e-bndes-selecionam-43-municipios-para-receber-apoio-tecnico-em-gestao-no-enfrentamento-da-covid-19  <a></p>
       </div>
      <div style="height:100px;"></div>
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