@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Ceará é maioria em lista de municípios contemplados com plataforma para telemedicina
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 17 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/24.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O programa Municípios Contra o Novo Coronavírus teve o seu segundo edital lançado e conta com 43 prefeituras que irão receber os serviços da plataforma de telemedicina desenvolvida pelo Instituto Votorantim. Dentro desse número, 14 cidades são do Ceará. No Nordeste, são 32. </p>
       <p>O assunto foi destaque no blog do Jocélio Leal do jornal O Povo. Confira: <a href="https://mais.opovo.com.br/colunistas/jocelio-leal/2020/06/17/covid-19--14-municipios-do-ceara-terao-apoio-do-instituto-votorantim-e-bndes.html" style="word-wrap: break-word;" target="_blank">https://mais.opovo.com.br/colunistas/jocelio-leal/2020/06/17/covid-19--14-municipios-do-ceara-terao-apoio-do-instituto-votorantim-e-bndes.html  <a></p>
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