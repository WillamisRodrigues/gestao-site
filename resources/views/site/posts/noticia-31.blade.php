@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Pesquisa do Instituto Votorantim revela a cidade mais vulnerável ao Covid-19 da Grande São Paulo
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Trabalho do Instituto reuniu dados do IBGE, SUS, Cadastro Nacional de Estabelecimentos de Saúde (CNES) e da Agência Nacional de Saúde Suplementar (ANSS)  </i> 
        </h4>
         <p class="text-white"> 16 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/30.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>O Instituto Votorantim desenvolveu uma pesquisa que identifica que a população da cidade de Biritiba Mirim, na Grande São Paulo, é a mais vulnerável ao coronavírus entre as cidades da região metropolitana, enquanto que São Bernardo do Campo, no ABC Paulista, é a menos vulnerável. Para chegar nessas conclusões, o Instituto atuou em parceria com Instituto Brasileiro de Geografia e Estatística (IBGE), Sistema Único de Saúde (SUS), Cadastro Nacional de Estabelecimentos de Saúde (CNES) e da Agência Nacional de Saúde Suplementar (ANSS) e levou em consideração cinco pilares: população vulnerável, economia local, estrutura do sistema de saúde, organização do sistema de saúde, e capacidade fiscal da administração municipal.</p>
         <p> O assunto é destaque no G1. Confira: <a href="https://g1.globo.com/sp/sao-paulo/noticia/2020/07/16/biritiba-mirim-e-a-cidade-da-grande-sp-mais-vulneravel-a-covid-19-e-sao-bernardo-a-menos-diz-estudo.ghtml" style="word-wrap: break-word;" target="_blank">https://g1.globo.com/sp/sao-paulo/noticia/2020/07/16/biritiba-mirim-e-a-cidade-da-grande-sp-mais-vulneravel-a-covid-19-e-sao-bernardo-a-menos-diz-estudo.ghtml<a></p>
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