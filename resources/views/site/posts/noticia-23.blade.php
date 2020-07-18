@extends('layouts.site.app-site')
@section('titulo','Notícias')
@section('conteudo')
  @include('layouts.site.header-noticias')
  <main class="side-main"> 
  <section class="post" style="background-size:100% 50%; background-color: #0000c9;">
    <div>
      <div class="text-center">
        <h2 class="section-intro__title titulo-post">
        Instituto Votorantim participa de rede voluntária que incentiva a manutenção de respiradores mecânicos em todo o país
        </h2>
        <div class="divisao-4"></div>
         <p class="text-white"> 23 de junho de 2020 </p>
         <div style="height:260px;"></div>
      </div>
    </div>
  </section>
  <section class="container">
      <img src="{{asset('site/img/post/22.jpg')}}" alt="" class="img-noticia">
  </section>
  <section class="container">
        <div class="desc-post">
       <p>A iniciativa é do Senai Cinematec em parceria com o governo do estado da Bahia. No entanto, foi replicada pelo Senai Nacional e já devolveu, até esta terça-feira (23), mais de 1,5 mil de respiradores prontos para o uso a instituições de saúde de todo país. A Bahia lidera a lista, com 209 equipamentos já consertados.</p>
       <p>O assunto foi destaque no blog Bahia Notícias. Confira:  <a href="https://www.bahianoticias.com.br/noticia/250036-mais-de-15-mil-respiradores-foram-reparados-no-pais-a-partir-de-uma-iniciativa-da-bahia.html" style="word-wrap: break-word;" target="_blank">https://www.bahianoticias.com.br/noticia/250036-mais-de-15-mil-respiradores-foram-reparados-no-pais-a-partir-de-uma-iniciativa-da-bahia.html  <a></p>
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