@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Campanha de doação de alimentos da Ticket, apoiada pelo Instituto Votorantim, é destaque na Folha de São Paulo
        </h2>
        <div class="divisao-4"></div>
        <h4 class="text-white subtitulo-post">
          <i> Mais de 581 mil cartões alimentação da Ticket carregados com R$ 100 cada um foram doados para a população</i> 
        </h4>
         <p class="text-white"> 27 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/25.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>O Instituto Votorantim e outras instituições, governos e empresas estão participando ativamente de doações para a população no período da pandemia provocada pelo coronavírus no Brasil. Uma das ações do Instituto é em conjunto com a Ticket, em que mais de 581 mil de cartões alimentação foram doados.  </p>
       <p>Cada cartão receberá em média três recargas de R$ 100. O assunto foi destaque na Folha de São Paulo. Confira: <a href="https://www1.folha.uol.com.br/empreendedorsocial/2020/06/doacoes-de-cestas-basicas-digitais-e-alimentos-combatem-a-fome-na-pandemia.shtml" style="word-wrap: break-word;" target="_blank">https://www1.folha.uol.com.br/empreendedorsocial/2020/06/doacoes-de-cestas-basicas-digitais-e-alimentos-combatem-a-fome-na-pandemia.shtml  <a></p>
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