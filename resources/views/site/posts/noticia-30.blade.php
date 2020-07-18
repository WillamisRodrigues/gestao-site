@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Parceria do Instituto Votorantim viabiliza 300 testes rápidos para auxiliar no combate ao coronavírus em Aripuanã
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Doação é resultado da parceria entre o Instituto e a Nexa, empresa a qual já realiza uma série de ações para o município</i> 
        </h4>
         <p class="text-white"> 03 de julho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/28.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
        <p>O Instituto Votorantim e a Nexa, empresa de mineração e metalurgia, doaram 300 novos testes rápidos para diagnosticar o novo coronavírus no município de Aripuanã (MT). A cidade é onde a Nexa onde desenvolve o maior empreendimento de mineração do estado de Mato Grosso. A Secretária Municipal de Saúde, Fabrícia Souza, explicou que a doação é bastante oportuna, principalmente no período de pandemia em que várias ações e serviços estão sendo executados para combater o avanço da doença.</p>
         <p> Saiba mais detalhes acessando: <a href="https://www.topnews.com.br/noticia/58643/nexa-doa-300-novos-testes-rapidos-para-auxiliar-no-combate-ao-coronavirus-em-aripuana" style="word-wrap: break-word;" target="_blank">https://www.topnews.com.br/noticia/58643/nexa-doa-300-novos-testes-rapidos-para-auxiliar-no-combate-ao-coronavirus-em-aripuana<a></p>
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