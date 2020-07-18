@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Plataforma do Instituto Votorantim já atendeu mais de duas mil pessoas em Muriaé
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 24 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/23.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>Cidade de Minas Gerais iniciou o serviço de telemedicina desenvolvido pelo Instituto Votorantim no dia 1º de junho e já soma 2.006 atendimentos. Disponibilizado pela prefeitura, o atendimento é totalmente gratuito. </p>
       <p>O assunto foi destaque no blog Guia Muriaé. Confira: <a href="https://www.guiamuriae.com.br/noticias/saude/telemedicina-ja-atendeu-mais-de-2-mil-pessoas-com-sintomas-do-coronavirus-em-muriae/" style="word-wrap: break-word;" target="_blank">https://www.guiamuriae.com.br/noticias/saude/telemedicina-ja-atendeu-mais-de-2-mil-pessoas-com-sintomas-do-coronavirus-em-muriae/  <a></p>
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