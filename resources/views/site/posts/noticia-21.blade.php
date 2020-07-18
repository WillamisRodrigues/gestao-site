@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Cidade em Minas Gerais agora conta com atendimentos voltado para saúde mental na plataforma de telemedicina do Instituto Votorantim
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 19 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/17.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>A cidade de Muriaé é um dos 130 municípios que estão no programa do Instituto Votorantim "Municípios contra o Coronavírus". Além de receber os atendimentos por telemedicina, os cidadãos da cidade agora também podem ser encaminhados para atendimentos voltados para a saúde mental. Todo o serviço é virtual. </p>
       <p>Saiba mais detalhes acessando:  <a href="https://www.guiamuriae.com.br/noticias/saude/muriae-passa-a-oferecer-teleatendimento-para-casos-de-saude-mental/" style="word-wrap: break-word;" target="_blank">https://www.guiamuriae.com.br/noticias/saude/muriae-passa-a-oferecer-teleatendimento-para-casos-de-saude-mental/ <a></p>
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